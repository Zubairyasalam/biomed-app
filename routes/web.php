<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PaperSubmissionController;
use App\Http\Controllers\RegistrationController;

Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/submit-paper', function () {
    return view('submit-paper');
})->name('submit-paper');

Route::get('/registration', function () {
    $registrationFees = \App\Models\RegistrationFee::where('is_active', true)->orderBy('sort_order')->get();
    $addons = \App\Models\Addon::where('is_active', true)->get();
    $policies = \App\Models\Policy::where('is_active', true)->orderBy('sort_order')->get();
    return view('registration', compact('registrationFees', 'addons', 'policies'));
})->name('registration');

Route::get('/plenary-speakers', function () {
    return view('plenary-speakers');
})->name('plenary-speakers');

Route::get('/keynote-speakers', function () {
    return view('keynote-speakers');
})->name('keynote-speakers');

Route::get('/invited-speakers', function () {
    return view('invited-speakers');
})->name('invited-speakers');

Route::get('/committee', function () {
    return view('committee');
})->name('committee');

Route::get('/about-organizer', function () {
    return view('about-organizer');
})->name('about-organizer');

Route::get('/topics', function () {
    return view('topics-page');
})->name('topics');

Route::get('/guidelines', function () {
    return view('guidelines');
})->name('guidelines');

Route::get('/sponsors', function () {
    return view('sponsors');
})->name('sponsors');

Route::get('/awards', function () {
    return view('awards');
})->name('awards');

Route::get('/key-dates', function () {
    return view('key-dates');
})->name('key-dates');

Route::get('/venue', function () {
    $settings = \App\Models\SiteSetting::where('group', 'venue')->pluck('value', 'key');
    return view('venue', compact('settings'));
})->name('venue');
Route::post('/api/submit-paper', [PaperSubmissionController::class, 'store']);
Route::post('/api/register', [RegistrationController::class, 'store']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/registrations', [AdminController::class, 'registrations'])->name('admin.registrations');
    Route::get('/submissions', [AdminController::class, 'submissions'])->name('admin.submissions');
    
    // CMS: Registration Fees
    Route::get('/fees', [AdminController::class, 'fees'])->name('admin.fees');
    Route::post('/fees', [AdminController::class, 'storeFee'])->name('admin.fees.store');
    Route::put('/fees/{id}', [AdminController::class, 'updateFee'])->name('admin.fees.update');
    Route::delete('/fees/{id}', [AdminController::class, 'deleteFee'])->name('admin.fees.delete');

    // CMS: Global Settings
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::post('/settings', [AdminController::class, 'updateSettings'])->name('admin.settings.update');

    // CMS: Registration Page Content
    Route::get('/settings/registration', [AdminController::class, 'registrationSettings'])->name('admin.settings.registration');
    Route::post('/settings/registration', [AdminController::class, 'updateRegistrationSettings'])->name('admin.settings.registration.update');
    
    // CMS: Interest Options
    Route::post('/interest-options', [AdminController::class, 'storeInterestOption'])->name('admin.interest_options.store');
    Route::delete('/interest-options/{id}', [AdminController::class, 'deleteInterestOption'])->name('admin.interest_options.delete');

    // CMS: Homepage Sections (Participants & Workshop)
    Route::get('/homepage-sections', [AdminController::class, 'homepageSections'])->name('admin.homepage_sections');
    Route::post('/homepage-sections', [AdminController::class, 'updateHomepageSections'])->name('admin.homepage_sections.update');

    // CMS: Abstracts & Awards
    Route::get('/abstracts-awards', [AdminController::class, 'abstractsAwards'])->name('admin.abstracts_awards');
    Route::post('/abstracts-awards', [AdminController::class, 'updateAbstractsAwards'])->name('admin.abstracts_awards.update');

    // CMS: Venue Settings
    Route::get('/venue-settings', [AdminController::class, 'venueSettings'])->name('admin.venue_settings');
    Route::post('/venue-settings', [AdminController::class, 'updateVenueSettings'])->name('admin.venue_settings.update');

    // CMS: Deadlines
    Route::get('/deadlines', [AdminController::class, 'deadlines'])->name('admin.deadlines');
    Route::post('/deadlines', [AdminController::class, 'storeDeadline'])->name('admin.deadlines.store');
    Route::put('/deadlines/{id}', [AdminController::class, 'updateDeadline'])->name('admin.deadlines.update');
    Route::delete('/deadlines/{id}', [AdminController::class, 'deleteDeadline'])->name('admin.deadlines.delete');

    // CMS: Addons
    Route::get('/addons', [AdminController::class, 'addons'])->name('admin.addons');
    Route::post('/addons', [AdminController::class, 'storeAddon'])->name('admin.addons.store');
    Route::put('/addons/{id}', [AdminController::class, 'updateAddon'])->name('admin.addons.update');
    Route::delete('/addons/{id}', [AdminController::class, 'deleteAddon'])->name('admin.addons.delete');

    // CMS: Policies
    Route::get('/policies', [AdminController::class, 'policies'])->name('admin.policies');
    Route::post('/policies', [AdminController::class, 'storePolicy'])->name('admin.policies.store');
    Route::put('/policies/{id}', [AdminController::class, 'updatePolicy'])->name('admin.policies.update');
    Route::delete('/policies/{id}', [AdminController::class, 'deletePolicy'])->name('admin.policies.delete');
});
