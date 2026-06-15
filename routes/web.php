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
    $speakers = \App\Models\Speaker::where('category', 'plenary')->orderBy('sort_order')->get();
    return view('plenary-speakers', compact('speakers'));
})->name('plenary-speakers');

Route::get('/keynote-speakers', function () {
    $speakers = \App\Models\Speaker::where('category', 'keynote')->orderBy('sort_order')->get();
    return view('keynote-speakers', compact('speakers'));
})->name('keynote-speakers');

Route::get('/invited-speakers', function () {
    $speakers = \App\Models\Speaker::where('category', 'invited')->orderBy('sort_order')->get();
    return view('invited-speakers', compact('speakers'));
})->name('invited-speakers');

Route::get('/committee', function () {
    $leadership = \App\Models\CommitteeMember::where('category', 'leadership')->orderBy('sort_order')->get()->groupBy('subcategory');
    $organizing = \App\Models\CommitteeMember::where('category', 'organizing_committee')->orderBy('sort_order')->get();
    $advisory = \App\Models\CommitteeMember::where('category', 'advisory_committee')->orderBy('sort_order')->get();
    return view('committee', compact('leadership', 'organizing', 'advisory'));
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
    $deadlines = \App\Models\Deadline::where('is_active', true)->orderBy('sort_order')->get();
    return view('key-dates', compact('deadlines'));
})->name('key-dates');

Route::get('/venue', function () {
    $settings = \App\Models\SiteSetting::where('group', 'venue')->pluck('value', 'key');
    return view('venue', compact('settings'));
})->name('venue');
Route::post('/api/submit-paper', [PaperSubmissionController::class, 'store'])->name('api.submit_paper');
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

    // CMS: Hero Section
    Route::get('/hero', [AdminController::class, 'heroSettings'])->name('admin.hero');
    Route::post('/hero', [AdminController::class, 'updateSettings'])->name('admin.hero.update');

    // CMS: About Section
    Route::get('/about', [AdminController::class, 'aboutSettings'])->name('admin.about');
    Route::post('/about', [AdminController::class, 'updateSettings'])->name('admin.about.update');

    // CMS: Conference Section
    Route::get('/conference', [AdminController::class, 'conferenceSettings'])->name('admin.conference');
    Route::post('/conference', [AdminController::class, 'updateSettings'])->name('admin.conference.update');

    // CMS: About Organizer Section
    Route::get('/about-organizer', [AdminController::class, 'aboutOrganizerSettings'])->name('admin.about_organizer');
    Route::post('/about-organizer', [AdminController::class, 'updateSettings'])->name('admin.about_organizer.update');

    // CMS: Guidelines Section
    Route::get('/guidelines', [AdminController::class, 'guidelinesSettings'])->name('admin.guidelines');
    Route::post('/guidelines', [AdminController::class, 'updateSettings'])->name('admin.guidelines.update');

    // CMS: Registration Page Content
    Route::get('/settings/registration', [AdminController::class, 'registrationSettings'])->name('admin.settings.registration');
    Route::post('/settings/registration', [AdminController::class, 'updateRegistrationSettings'])->name('admin.settings.registration.update');
    
    // CMS: Interest Options
    Route::post('/interest-options', [AdminController::class, 'storeInterestOption'])->name('admin.interest_options.store');
    Route::delete('/interest-options/{id}', [AdminController::class, 'deleteInterestOption'])->name('admin.interest_options.delete');

    // CMS: Programs & Themes (Workshop & Thrust Areas)
    Route::get('/programs', [AdminController::class, 'programsSettings'])->name('admin.programs');
    Route::post('/programs', [AdminController::class, 'updateProgramsSettings'])->name('admin.programs.update');

    // CMS: Abstracts & Awards
    Route::get('/abstracts-awards', [AdminController::class, 'abstractsAwards'])->name('admin.abstracts_awards');
    Route::post('/abstracts-awards', [AdminController::class, 'updateAbstractsAwards'])->name('admin.abstracts_awards.update');

    // CMS: Venue Settings
    Route::get('/venue-settings', [AdminController::class, 'venueSettings'])->name('admin.venue_settings');
    Route::post('/venue-settings', [AdminController::class, 'updateVenueSettings'])->name('admin.venue_settings.update');

    // CMS: Homepage Venue Highlights
    Route::get('/venue-highlights', [AdminController::class, 'venueHighlights'])->name('admin.venue_highlights');

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
    
    // CMS: Submit Paper Settings
    Route::get('/settings/submit-paper', [AdminController::class, 'submitPaperSettings'])->name('admin.submit_paper_settings');
    Route::post('/settings/submit-paper', [AdminController::class, 'updateSubmitPaperSettings'])->name('admin.submit_paper_settings.update');

    // CMS: Page Banners
    Route::get('/settings/page-banners', [AdminController::class, 'pageBanners'])->name('admin.page_banners');
    Route::post('/settings/page-banners', [AdminController::class, 'updatePageBanners'])->name('admin.page_banners.update');

    // CMS: Submit Paper Form Builder
    Route::get('/settings/submit-paper/fields', [AdminController::class, 'submitPaperFormFields'])->name('admin.submit_paper_fields');
    Route::post('/settings/submit-paper/fields', [AdminController::class, 'storeSubmitPaperFormField'])->name('admin.submit_paper_fields.store');
    Route::put('/settings/submit-paper/fields/{id}', [AdminController::class, 'updateSubmitPaperFormField'])->name('admin.submit_paper_fields.update');
    Route::delete('/settings/submit-paper/fields/{id}', [AdminController::class, 'destroySubmitPaperFormField'])->name('admin.submit_paper_fields.destroy');
    Route::delete('/policies/{id}', [AdminController::class, 'deletePolicy'])->name('admin.policies.delete');

    // Speakers CMS
    Route::get('/speakers', [AdminController::class, 'speakers'])->name('admin.speakers');
    Route::post('/speakers', [AdminController::class, 'storeSpeaker'])->name('admin.speakers.store');
    Route::put('/speakers/{id}', [AdminController::class, 'updateSpeaker'])->name('admin.speakers.update');
    Route::delete('/speakers/{id}', [AdminController::class, 'destroySpeaker'])->name('admin.speakers.destroy');

    // Topics CMS
    Route::get('/topics', [AdminController::class, 'topics'])->name('admin.topics');
    Route::post('/topics/settings', [AdminController::class, 'updateTopicsSettings'])->name('admin.topics.update_settings');
    Route::post('/topics', [AdminController::class, 'storeTopic'])->name('admin.topics.store');
    Route::put('/topics/{id}', [AdminController::class, 'updateTopic'])->name('admin.topics.update');
    Route::delete('/topics/{id}', [AdminController::class, 'destroyTopic'])->name('admin.topics.destroy');

    // Highlights CMS
    Route::get('/highlights', [AdminController::class, 'highlights'])->name('admin.highlights');
    Route::post('/highlights/settings', [AdminController::class, 'updateHighlightsSettings'])->name('admin.highlights.update_settings');
    Route::post('/highlights', [AdminController::class, 'storeHighlight'])->name('admin.highlights.store');
    Route::put('/highlights/{id}', [AdminController::class, 'updateHighlight'])->name('admin.highlights.update');
    Route::delete('/highlights/{id}', [AdminController::class, 'destroyHighlight'])->name('admin.highlights.destroy');

    // Committee CMS
    Route::get('/committee', [AdminController::class, 'committee'])->name('admin.committee');
    Route::post('/committee', [AdminController::class, 'storeCommitteeMember'])->name('admin.committee.store');
    Route::put('/committee/{id}', [AdminController::class, 'updateCommitteeMember'])->name('admin.committee.update');
    Route::delete('/committee/{id}', [AdminController::class, 'destroyCommitteeMember'])->name('admin.committee.destroy');
    // Sponsors CMS
    Route::get('/sponsors', [AdminController::class, 'sponsors'])->name('admin.sponsors');
    Route::post('/sponsors/settings', [AdminController::class, 'updateSponsorSettings'])->name('admin.sponsors.settings.update');
    Route::post('/sponsors/packages', [AdminController::class, 'storeSponsorPackage'])->name('admin.sponsors.packages.store');
    Route::put('/sponsors/packages/{id}', [AdminController::class, 'updateSponsorPackage'])->name('admin.sponsors.packages.update');
    Route::delete('/sponsors/packages/{id}', [AdminController::class, 'destroySponsorPackage'])->name('admin.sponsors.packages.destroy');

    // Awards CMS
    Route::get('/awards', [AdminController::class, 'awards'])->name('admin.awards');
    Route::post('/awards/settings', [AdminController::class, 'updateAwardsSettings'])->name('admin.awards.settings.update');
    Route::post('/awards', [AdminController::class, 'storeAward'])->name('admin.awards.store');
    Route::put('/awards/{id}', [AdminController::class, 'updateAward'])->name('admin.awards.update');
    Route::delete('/awards/{id}', [AdminController::class, 'destroyAward'])->name('admin.awards.destroy');
});
