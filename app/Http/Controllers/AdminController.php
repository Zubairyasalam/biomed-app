<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\PaperSubmission;
use App\Models\RegistrationFee;
use App\Models\SiteSetting;
use App\Models\Deadline;
use App\Models\Addon;
use App\Models\Policy;

class AdminController extends Controller
{
    public function index()
    {
        $registrationCount = Registration::count();
        $submissionCount = PaperSubmission::count();
        
        // Calculate Revenue (Assuming reg_category holds the base amount, and workshop is a boolean for +500)
        $totalRevenue = Registration::all()->sum(function($reg) {
            $base = (int)$reg->reg_category;
            $workshop = $reg->workshop ? 500 : 0;
            return $base + $workshop;
        });

        // Chart Data: Registrations by category
        $regByCategory = Registration::select('reg_category', \DB::raw('count(*) as total'))
                            ->groupBy('reg_category')
                            ->pluck('total', 'reg_category')
                            ->toArray();

        // Recent Activity
        $recentRegistrations = Registration::orderBy('created_at', 'desc')->take(5)->get();
        $recentSubmissions = PaperSubmission::orderBy('created_at', 'desc')->take(5)->get();
        
        return view('admin.dashboard', compact(
            'registrationCount', 'submissionCount', 'totalRevenue', 
            'regByCategory', 'recentRegistrations', 'recentSubmissions'
        ));
    }

    public function registrations()
    {
        $registrations = Registration::orderBy('created_at', 'desc')->get();
        return view('admin.registrations', compact('registrations'));
    }

    public function submissions()
    {
        $submissions = PaperSubmission::orderBy('created_at', 'desc')->get();
        return view('admin.submissions', compact('submissions'));
    }

    // CMS: Registration Fees
    public function fees()
    {
        $fees = RegistrationFee::orderBy('sort_order')->get();
        return view('admin.fees.index', compact('fees'));
    }

    public function storeFee(Request $request)
    {
        $data = $request->validate([
            'category_name' => 'required|string|max:255',
            'price_inr' => 'required|string|max:50',
            'price_usd' => 'nullable|string|max:50',
            'features' => 'required|string',
            'is_active' => 'boolean',
            'is_highlighted' => 'boolean',
            'sort_order' => 'integer'
        ]);

        $data['features'] = json_encode(array_map('trim', explode("\n", $data['features'])));
        $data['is_active'] = $request->has('is_active');
        $data['is_highlighted'] = $request->has('is_highlighted');

        RegistrationFee::create($data);
        return back()->with('success', 'Fee plan created successfully.');
    }

    public function updateFee(Request $request, $id)
    {
        $fee = RegistrationFee::findOrFail($id);
        
        $data = $request->validate([
            'category_name' => 'required|string|max:255',
            'price_inr' => 'required|string|max:50',
            'price_usd' => 'nullable|string|max:50',
            'features' => 'required|string',
            'sort_order' => 'integer'
        ]);

        $data['features'] = json_encode(array_map('trim', explode("\n", $data['features'])));
        $data['is_active'] = $request->has('is_active');
        $data['is_highlighted'] = $request->has('is_highlighted');

        $fee->update($data);
        return back()->with('success', 'Fee plan updated successfully.');
    }

    public function deleteFee($id)
    {
        RegistrationFee::findOrFail($id)->delete();
        return back()->with('success', 'Fee plan deleted.');
    }

    // CMS: Global Settings
    public function settings()
    {
        $settings = SiteSetting::all()->groupBy('group');
        return view('admin.settings.index', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            SiteSetting::where('key', $key)->update(['value' => $value]);
        }
        return back()->with('success', 'Settings updated successfully.');
    }

    // CMS: Registration Page Settings
    public function registrationSettings()
    {
        $settings = SiteSetting::whereIn('group', ['registration', 'reg_fields'])->get()->groupBy('group');
        $interestOptions = \App\Models\InterestOption::orderBy('sort_order')->get();
        return view('admin.settings.registration', compact('settings', 'interestOptions'));
    }

    public function updateRegistrationSettings(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            SiteSetting::where('key', $key)->update(['value' => $value]);
        }
        return back()->with('success', 'Registration settings updated successfully.');
    }

    // CMS: Interest Options
    public function storeInterestOption(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'sort_order' => 'integer'
        ]);
        \App\Models\InterestOption::create($data);
        return back()->with('success', 'Option created successfully.');
    }

    public function deleteInterestOption($id)
    {
        \App\Models\InterestOption::findOrFail($id)->delete();
        return back()->with('success', 'Option deleted successfully.');
    }

    // CMS: Homepage Sections (Participants & Workshop)
    public function homepageSections()
    {
        $settings = SiteSetting::whereIn('group', ['participants', 'workshop', 'thrust_areas'])->get()->groupBy('group');
        return view('admin.settings.homepage', compact('settings'));
    }

    public function updateHomepageSections(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            SiteSetting::where('key', $key)->update(['value' => $value]);
        }
        return back()->with('success', 'Homepage sections updated successfully.');
    }

    // CMS: Abstracts & Awards
    public function abstractsAwards()
    {
        $settings = SiteSetting::whereIn('group', ['abstract', 'awards'])->get()->groupBy('group');
        return view('admin.settings.abstracts_awards', compact('settings'));
    }

    public function updateAbstractsAwards(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            SiteSetting::where('key', $key)->update(['value' => $value]);
        }
        return back()->with('success', 'Abstracts & Awards settings updated successfully.');
    }

    // CMS: Venue
    public function venueSettings()
    {
        $settings = SiteSetting::where('group', 'venue')->get()->groupBy('group');
        return view('admin.settings.venue', compact('settings'));
    }

    public function updateVenueSettings(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            SiteSetting::where('key', $key)->update(['value' => $value]);
        }
        return back()->with('success', 'Venue settings updated successfully.');
    }

    // CMS: Deadlines
    public function deadlines()
    {
        $deadlines = Deadline::orderBy('sort_order')->get();
        return view('admin.deadlines.index', compact('deadlines'));
    }

    public function storeDeadline(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'deadline_date' => 'required|date',
            'is_active' => 'boolean',
            'sort_order' => 'integer'
        ]);
        
        $data['is_active'] = $request->has('is_active');
        Deadline::create($data);
        return back()->with('success', 'Deadline added.');
    }

    public function updateDeadline(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'deadline_date' => 'required|date',
            'sort_order' => 'integer'
        ]);
        
        $data['is_active'] = $request->has('is_active');
        Deadline::findOrFail($id)->update($data);
        return back()->with('success', 'Deadline updated.');
    }

    public function deleteDeadline($id)
    {
        Deadline::findOrFail($id)->delete();
        return back()->with('success', 'Deadline deleted.');
    }

    // CMS: Addons
    public function addons()
    {
        $addons = Addon::all();
        return view('admin.addons.index', compact('addons'));
    }

    public function storeAddon(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'badge_text' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'is_active' => 'boolean'
        ]);
        $data['is_active'] = $request->has('is_active');
        Addon::create($data);
        return back()->with('success', 'Add-on created successfully.');
    }

    public function updateAddon(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'badge_text' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'is_active' => 'boolean'
        ]);
        $data['is_active'] = $request->has('is_active');
        Addon::findOrFail($id)->update($data);
        return back()->with('success', 'Add-on updated successfully.');
    }

    public function deleteAddon($id)
    {
        Addon::findOrFail($id)->delete();
        return back()->with('success', 'Add-on deleted successfully.');
    }

    // CMS: Policies
    public function policies()
    {
        $policies = Policy::orderBy('sort_order')->get();
        return view('admin.policies.index', compact('policies'));
    }

    public function storePolicy(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content_html' => 'required|string',
            'sort_order' => 'integer',
            'is_active' => 'boolean'
        ]);
        $data['is_active'] = $request->has('is_active');
        Policy::create($data);
        return back()->with('success', 'Policy created successfully.');
    }

    public function updatePolicy(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content_html' => 'required|string',
            'sort_order' => 'integer',
            'is_active' => 'boolean'
        ]);
        $data['is_active'] = $request->has('is_active');
        Policy::findOrFail($id)->update($data);
        return back()->with('success', 'Policy updated successfully.');
    }

    public function deletePolicy($id)
    {
        Policy::findOrFail($id)->delete();
        return back()->with('success', 'Policy deleted successfully.');
    }
}
