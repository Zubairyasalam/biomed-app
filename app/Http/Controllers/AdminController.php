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
        $addons = \App\Models\Addon::all();
        return view('admin.fees.index', compact('fees', 'addons'));
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

    // CMS: Hero Section Settings
    public function heroSettings()
    {
        $settings = SiteSetting::whereIn('group', ['hero', 'contact'])->get()->groupBy('group');
        $deadlines = Deadline::orderBy('sort_order')->get();
        return view('admin.hero.index', compact('settings', 'deadlines'));
    }

    // CMS: About Section Settings
    public function aboutSettings()
    {
        $settings = SiteSetting::where('group', 'about')->get()->groupBy('group');
        return view('admin.about.index', compact('settings'));
    }

    // CMS: About Organizer Settings
    public function aboutOrganizerSettings()
    {
        $settings = SiteSetting::where('group', 'about_organizer')->get()->groupBy('group');
        return view('admin.about_organizer.index', compact('settings'));
    }

    // CMS: Guidelines Settings
    public function guidelinesSettings()
    {
        $settings = SiteSetting::where('group', 'guidelines')->get()->groupBy('group');
        return view('admin.guidelines.index', compact('settings'));
    }

    // CMS: Conference Section Settings
    public function conferenceSettings()
    {
        $settings = SiteSetting::whereIn('group', ['conference', 'participants'])->get()->groupBy('group');
        return view('admin.conference.index', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/settings'), $fileName);
                $value = 'images/settings/' . $fileName;
            } elseif ($value === null && SiteSetting::where('key', $key)->value('type') === 'image') {
                continue;
            }
            SiteSetting::where('key', $key)->update(['value' => $value]);
        }
        return back()->with('success', 'Settings updated successfully.');
    }

    // CMS: Registration Page Settings
    public function registrationSettings()
    {
        $settings = SiteSetting::whereIn('group', ['registration', 'reg_fields'])->get()->groupBy('group');
        $interestOptions = \App\Models\InterestOption::orderBy('sort_order')->get();
        $policies = \App\Models\Policy::orderBy('sort_order')->get();
        return view('admin.settings.registration', compact('settings', 'interestOptions', 'policies'));
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

    // CMS: Programs & Themes (Workshop & Thrust Areas)
    public function programsSettings()
    {
        $settings = SiteSetting::whereIn('group', ['workshop', 'thrust_areas'])->get()->groupBy('group');
        return view('admin.programs.index', compact('settings'));
    }

    public function updateProgramsSettings(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            // Handle image uploads if present
            if (str_ends_with($key, '_file')) {
                if ($request->hasFile($key)) {
                    $originalKey = str_replace('_file', '', $key);
                    $file = $request->file($key);
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('images/settings'), $fileName);
                    SiteSetting::where('key', $originalKey)->update(['value' => 'images/settings/' . $fileName]);
                }
                continue;
            }
            SiteSetting::where('key', $key)->update(['value' => $value]);
        }
        return back()->with('success', 'Programs & Themes updated successfully.');
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
            // Handle image uploads if present
            if (str_ends_with($key, '_file')) {
                if ($request->hasFile($key)) {
                    $originalKey = str_replace('_file', '', $key);
                    $file = $request->file($key);
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('images/settings'), $fileName);
                    SiteSetting::where('key', $originalKey)->update(['value' => 'images/settings/' . $fileName]);
                }
                continue;
            }
            SiteSetting::where('key', $key)->update(['value' => $value]);
        }
        return back()->with('success', 'Abstracts & Awards settings updated successfully.');
    }

    // CMS: Venue Highlights
    public function venueHighlights()
    {
        $settings = SiteSetting::where('group', 'venue_highlights')->get()->groupBy('group');
        return view('admin.settings.venue_highlights', compact('settings'));
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
            if (str_ends_with($key, '_file')) {
                if ($request->hasFile($key)) {
                    $originalKey = str_replace('_file', '', $key);
                    $file = $request->file($key);
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('images/venue'), $fileName);
                    SiteSetting::updateOrCreate(
                        ['key' => $originalKey, 'group' => 'venue'],
                        ['value' => 'images/venue/' . $fileName]
                    );
                }
                continue;
            }
            SiteSetting::updateOrCreate(
                ['key' => $key, 'group' => 'venue'],
                ['value' => $value]
            );
        }
        return back()->with('success', 'Venue settings updated successfully.');
    }

    // CMS: Deadlines
    public function deadlines()
    {
        $deadlines = Deadline::orderBy('sort_order')->get();
        $settings = SiteSetting::where('group', 'deadlines')->get()->groupBy('group');
        return view('admin.deadlines.index', compact('deadlines', 'settings'));
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

    public function submitPaperSettings()
    {
        $settings = SiteSetting::where('group', 'submit_paper')->get();
        return view('admin.settings.submit_paper', compact('settings'));
    }

    public function updateSubmitPaperSettings(Request $request)
    {
        $settings = $request->except(['_token']);
        foreach ($settings as $key => $value) {
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/settings'), $fileName);
                $value = 'images/settings/' . $fileName;
            } elseif ($value === null && SiteSetting::where('key', $key)->value('type') === 'image') {
                continue;
            } elseif ($value === null && SiteSetting::where('key', $key)->value('type') === 'file') {
                continue;
            }
            SiteSetting::where('key', $key)->update(['value' => $value]);
        }
        return back()->with('success', 'Submit Paper settings updated successfully.');
    }

    // CMS: Page Banners
    public function pageBanners()
    {
        $settings = \App\Models\SiteSetting::where('group', 'page_banners')->get();
        // Group by page prefix, e.g., 'banner_registration_title' -> 'registration'
        $groupedSettings = [];
        foreach ($settings as $setting) {
            $parts = explode('_', $setting->key);
            if (count($parts) >= 3) {
                // banner_{page}_type
                $type = array_pop($parts); // title or image
                array_shift($parts); // remove 'banner'
                $page = implode('_', $parts); // e.g., registration, plenary_speakers
                $groupedSettings[$page][$type] = $setting;
            }
        }
        return view('admin.settings.page_banners', compact('groupedSettings'));
    }

    public function updatePageBanners(Request $request)
    {
        $settings = $request->except(['_token']);
        foreach ($settings as $key => $value) {
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/settings'), $fileName);
                $value = 'images/settings/' . $fileName;
            } elseif ($value === null && SiteSetting::where('key', $key)->value('type') === 'image') {
                continue;
            }
            SiteSetting::where('key', $key)->update(['value' => $value]);
        }
        return back()->with('success', 'Page Banners updated successfully.');
    }

    // --- Submit Paper Form Builder ---
    public function submitPaperFormFields()
    {
        $fields = \App\Models\SubmitPaperField::orderBy('sort_order')->get();
        return view('admin.submit_paper_fields.index', compact('fields'));
    }

    public function storeSubmitPaperFormField(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:submit_paper_fields,name',
            'label' => 'required|string|max:255',
            'type' => 'required|string',
            'placeholder' => 'nullable|string',
            'grid_column' => 'required|string',
            'sort_order' => 'integer',
            'options' => 'nullable|string', 
        ]);
        
        $data['is_required'] = $request->has('is_required');
        
        if (!empty($data['options'])) {
            $data['options'] = array_map('trim', explode(',', $data['options']));
        } else {
            $data['options'] = null;
        }

        \App\Models\SubmitPaperField::create($data);
        return back()->with('success', 'Field added successfully.');
    }

    public function updateSubmitPaperFormField(Request $request, $id)
    {
        $field = \App\Models\SubmitPaperField::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:submit_paper_fields,name,' . $id,
            'label' => 'required|string|max:255',
            'type' => 'required|string',
            'placeholder' => 'nullable|string',
            'grid_column' => 'required|string',
            'sort_order' => 'integer',
            'options' => 'nullable|string',
        ]);
        
        $data['is_required'] = $request->has('is_required');

        if (!empty($data['options'])) {
            $data['options'] = array_map('trim', explode(',', $data['options']));
        } else {
            $data['options'] = null;
        }

        $field->update($data);
        return back()->with('success', 'Field updated successfully.');
    }

    public function destroySubmitPaperFormField($id)
    {
        \App\Models\SubmitPaperField::findOrFail($id)->delete();
        return back()->with('success', 'Field deleted successfully.');
    }

    // --- Speakers CMS ---

    public function speakers(Request $request)
    {
        $type = $request->query('type', 'plenary'); // Default to plenary
        $speakers = \App\Models\Speaker::where('type', $type)->orderBy('sort_order')->get();
        return view('admin.speakers.index', compact('speakers', 'type'));
    }

    public function storeSpeaker(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|string|in:plenary,keynote,invited',
            'name' => 'required|string|max:255',
            'h_index' => 'nullable|string|max:50',
            'university' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'title' => 'nullable|string', // Some invited speakers might not have titles
            'sort_order' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/speakers'), $imageName);
            $data['image_path'] = 'images/speakers/' . $imageName;
        }

        \App\Models\Speaker::create($data);
        return back()->with('success', 'Speaker added successfully.');
    }

    public function updateSpeaker(Request $request, $id)
    {
        $speaker = \App\Models\Speaker::findOrFail($id);
        
        $data = $request->validate([
            'type' => 'required|string|in:plenary,keynote,invited',
            'name' => 'required|string|max:255',
            'h_index' => 'nullable|string|max:50',
            'university' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'title' => 'nullable|string',
            'sort_order' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/speakers'), $imageName);
            $data['image_path'] = 'images/speakers/' . $imageName;
            
            // Optionally delete old image
            if ($speaker->image_path && file_exists(public_path($speaker->image_path))) {
                // To avoid deleting default seeded images, we could add logic here, 
                // but for now let's just leave old files or delete them.
                // unlink(public_path($speaker->image_path));
            }
        }

        $speaker->update($data);
        return back()->with('success', 'Speaker updated successfully.');
    }

    public function destroySpeaker($id)
    {
        $speaker = \App\Models\Speaker::findOrFail($id);
        $speaker->delete();
        return back()->with('success', 'Speaker deleted successfully.');
    }

    // --- Topics CMS ---

    public function topics(Request $request)
    {
        $column = $request->query('column', 1);
        $topics = \App\Models\Topic::where('column_number', $column)->orderBy('sort_order')->get();
        $settings = \App\Models\SiteSetting::where('group', 'topics')->get()->groupBy('group');
        return view('admin.topics.index', compact('topics', 'column', 'settings'));
    }

    public function updateTopicsSettings(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            if (str_ends_with($key, '_file')) {
                if ($request->hasFile($key)) {
                    $originalKey = str_replace('_file', '', $key);
                    $file = $request->file($key);
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('images/settings'), $fileName);
                    \App\Models\SiteSetting::updateOrCreate(['key' => $originalKey, 'group' => 'topics'], ['value' => 'images/settings/' . $fileName]);
                }
                continue;
            }
            \App\Models\SiteSetting::updateOrCreate(['key' => $key, 'group' => 'topics'], ['value' => $value]);
        }
        return back()->with('success', 'Topic settings updated successfully.');
    }

    public function storeTopic(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'column_number' => 'required|integer|in:1,2,3',
            'sort_order' => 'required|integer',
        ]);

        \App\Models\Topic::create($data);
        return back()->with('success', 'Topic added successfully.');
    }

    public function updateTopic(Request $request, $id)
    {
        $topic = \App\Models\Topic::findOrFail($id);
        
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'column_number' => 'required|integer|in:1,2,3',
            'sort_order' => 'required|integer',
        ]);

        $topic->update($data);
        return back()->with('success', 'Topic updated successfully.');
    }

    public function destroyTopic($id)
    {
        $topic = \App\Models\Topic::findOrFail($id);
        $topic->delete();
        return back()->with('success', 'Topic deleted successfully.');
    }

    // --- Highlights CMS ---

    public function highlights(Request $request)
    {
        $column = $request->query('column', 1);
        $highlights = \App\Models\Highlight::where('column_number', $column)->orderBy('sort_order')->get();
        $settings = \App\Models\SiteSetting::where('group', 'highlights')->get()->groupBy('group');
        return view('admin.highlights.index', compact('highlights', 'column', 'settings'));
    }

    public function updateHighlightsSettings(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            if (str_ends_with($key, '_file')) {
                if ($request->hasFile($key)) {
                    $originalKey = str_replace('_file', '', $key);
                    $file = $request->file($key);
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('images/settings'), $fileName);
                    \App\Models\SiteSetting::updateOrCreate(['key' => $originalKey, 'group' => 'highlights'], ['value' => 'images/settings/' . $fileName]);
                }
                continue;
            }
            \App\Models\SiteSetting::updateOrCreate(['key' => $key, 'group' => 'highlights'], ['value' => $value]);
        }
        return back()->with('success', 'Highlight settings updated successfully.');
    }

    public function storeHighlight(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'column_number' => 'required|integer|in:1,2,3',
            'sort_order' => 'required|integer',
        ]);

        \App\Models\Highlight::create($data);
        return back()->with('success', 'Highlight added successfully.');
    }

    public function updateHighlight(Request $request, $id)
    {
        $topic = \App\Models\Highlight::findOrFail($id);
        
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'column_number' => 'required|integer|in:1,2,3',
            'sort_order' => 'required|integer',
        ]);

        $topic->update($data);
        return back()->with('success', 'Highlight updated successfully.');
    }

    public function destroyHighlight($id)
    {
        $topic = \App\Models\Highlight::findOrFail($id);
        $topic->delete();
        return back()->with('success', 'Highlight deleted successfully.');
    }

    // --- Committee CMS ---

    public function committee(Request $request)
    {
        $category = $request->query('category', 'leadership'); // Default to leadership
        $members = \App\Models\CommitteeMember::where('category', $category)->orderBy('sort_order')->get();
        return view('admin.committee.index', compact('members', 'category'));
    }

    public function storeCommitteeMember(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'category' => 'required|string|in:leadership,organizing_committee,advisory_committee',
            'subcategory' => 'nullable|string|in:chief_patron,patrons,convenor,organizing_secretaries',
            'icon' => 'nullable|string|max:255',
            'sort_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $data['is_active'] = $request->has('is_active');

        \App\Models\CommitteeMember::create($data);
        return back()->with('success', 'Committee member added successfully.');
    }

    public function updateCommitteeMember(Request $request, $id)
    {
        $member = \App\Models\CommitteeMember::findOrFail($id);
        
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'category' => 'required|string|in:leadership,organizing_committee,advisory_committee',
            'subcategory' => 'nullable|string|in:chief_patron,patrons,convenor,organizing_secretaries',
            'icon' => 'nullable|string|max:255',
            'sort_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $data['is_active'] = $request->has('is_active');

        $member->update($data);
        return back()->with('success', 'Committee member updated successfully.');
    }

    public function destroyCommitteeMember($id)
    {
        $member = \App\Models\CommitteeMember::findOrFail($id);
        $member->delete();
        return back()->with('success', 'Committee member deleted successfully.');
    }
    // --- Sponsors CMS ---

    public function sponsors()
    {
        $settings = \App\Models\SiteSetting::where('group', 'sponsors')->get()->groupBy('group');
        $tiers = \App\Models\SponsorPackage::where('type', 'tier')->orderBy('sort_order')->get();
        $additional = \App\Models\SponsorPackage::where('type', 'additional')->orderBy('sort_order')->get();
        return view('admin.sponsors.index', compact('settings', 'tiers', 'additional'));
    }

    public function updateSponsorSettings(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            \App\Models\SiteSetting::updateOrCreate(['key' => $key, 'group' => 'sponsors'], ['value' => $value]);
        }
        return back()->with('success', 'Sponsor settings updated successfully.');
    }

    public function storeSponsorPackage(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'features' => 'nullable|string',
            'ribbon_color' => 'nullable|string|max:255',
            'type' => 'required|string|in:tier,additional',
            'sort_order' => 'required|integer',
        ]);

        if (!empty($data['features'])) {
            $data['features'] = array_map('trim', explode("\n", $data['features']));
        } else {
            $data['features'] = null;
        }

        \App\Models\SponsorPackage::create($data);
        return back()->with('success', 'Sponsor package added successfully.');
    }

    public function updateSponsorPackage(Request $request, $id)
    {
        $package = \App\Models\SponsorPackage::findOrFail($id);
        
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'features' => 'nullable|string',
            'ribbon_color' => 'nullable|string|max:255',
            'type' => 'required|string|in:tier,additional',
            'sort_order' => 'required|integer',
        ]);

        if (!empty($data['features'])) {
            $data['features'] = array_map('trim', explode("\n", $data['features']));
        } else {
            $data['features'] = null;
        }

        $package->update($data);
        return back()->with('success', 'Sponsor package updated successfully.');
    }

    public function destroySponsorPackage($id)
    {
        $package = \App\Models\SponsorPackage::findOrFail($id);
        $package->delete();
        return back()->with('success', 'Sponsor package deleted successfully.');
    }

    // --- Awards CMS ---
    public function awards()
    {
        $settings = \App\Models\SiteSetting::where('group', 'awards_page')->get()->groupBy('group');
        $awards = \App\Models\Award::orderBy('sort_order')->get();
        return view('admin.awards.index', compact('settings', 'awards'));
    }

    public function updateAwardsSettings(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            \App\Models\SiteSetting::updateOrCreate(['key' => $key, 'group' => 'awards_page'], ['value' => $value]);
        }
        return back()->with('success', 'Awards settings updated successfully.');
    }

    public function storeAward(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'icon_color' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'benefits' => 'nullable|string',
            'eligibility' => 'nullable|string',
            'guidelines' => 'nullable|string',
            'sort_order' => 'required|integer',
        ]);
        
        \App\Models\Award::create($data);
        return back()->with('success', 'Award created successfully.');
    }

    public function updateAward(Request $request, $id)
    {
        $award = \App\Models\Award::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'icon_color' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'benefits' => 'nullable|string',
            'eligibility' => 'nullable|string',
            'guidelines' => 'nullable|string',
            'sort_order' => 'required|integer',
        ]);

        $award->update($data);
        return back()->with('success', 'Award updated successfully.');
    }

    public function destroyAward($id)
    {
        \App\Models\Award::findOrFail($id)->delete();
        return back()->with('success', 'Award deleted successfully.');
    }
}
