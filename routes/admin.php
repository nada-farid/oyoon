<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Sliders
    Route::delete('sliders/destroy', 'SlidersController@massDestroy')->name('sliders.massDestroy');
    Route::post('sliders/media', 'SlidersController@storeMedia')->name('sliders.storeMedia');
    Route::post('sliders/ckmedia', 'SlidersController@storeCKEditorImages')->name('sliders.storeCKEditorImages');
    Route::resource('sliders', 'SlidersController');

    // Services
    Route::delete('services/destroy', 'ServicesController@massDestroy')->name('services.massDestroy');
    Route::post('services/media', 'ServicesController@storeMedia')->name('services.storeMedia');
    Route::post('services/ckmedia', 'ServicesController@storeCKEditorImages')->name('services.storeCKEditorImages');
    Route::resource('services', 'ServicesController');

    // Beneficiaries
    Route::delete('beneficiaries/destroy', 'BeneficiariesController@massDestroy')->name('beneficiaries.massDestroy');
    Route::post('beneficiaries/media', 'BeneficiariesController@storeMedia')->name('beneficiaries.storeMedia');
    Route::post('beneficiaries/ckmedia', 'BeneficiariesController@storeCKEditorImages')->name('beneficiaries.storeCKEditorImages');
    Route::resource('beneficiaries', 'BeneficiariesController');

    // Projects
    Route::delete('projects/destroy', 'ProjectsController@massDestroy')->name('projects.massDestroy');
    Route::post('projects/media', 'ProjectsController@storeMedia')->name('projects.storeMedia');
    Route::post('projects/ckmedia', 'ProjectsController@storeCKEditorImages')->name('projects.storeCKEditorImages');
    Route::resource('projects', 'ProjectsController');

    // News
    Route::delete('newss/destroy', 'NewsController@massDestroy')->name('newss.massDestroy');
    Route::post('newss/media', 'NewsController@storeMedia')->name('newss.storeMedia');
    Route::post('newss/ckmedia', 'NewsController@storeCKEditorImages')->name('newss.storeCKEditorImages');
    Route::resource('newss', 'NewsController');

    // Said About Us
    Route::delete('said-about-uss/destroy', 'SaidAboutUsController@massDestroy')->name('said-about-uss.massDestroy');
    Route::post('said-about-uss/media', 'SaidAboutUsController@storeMedia')->name('said-about-uss.storeMedia');
    Route::post('said-about-uss/ckmedia', 'SaidAboutUsController@storeCKEditorImages')->name('said-about-uss.storeCKEditorImages');
    Route::resource('said-about-uss', 'SaidAboutUsController');

    // Partners
    Route::delete('partners/destroy', 'PartnersController@massDestroy')->name('partners.massDestroy');
    Route::post('partners/media', 'PartnersController@storeMedia')->name('partners.storeMedia');
    Route::post('partners/ckmedia', 'PartnersController@storeCKEditorImages')->name('partners.storeCKEditorImages');
    Route::resource('partners', 'PartnersController');

    // Hawkam Categories
    Route::delete('hawkam-categories/destroy', 'HawkamCategoriesController@massDestroy')->name('hawkam-categories.massDestroy');
    Route::resource('hawkam-categories', 'HawkamCategoriesController');

    // Hawkma
    Route::delete('hawkmas/destroy', 'HawkmaController@massDestroy')->name('hawkmas.massDestroy');
    Route::post('hawkmas/media', 'HawkmaController@storeMedia')->name('hawkmas.storeMedia');
    Route::post('hawkmas/ckmedia', 'HawkmaController@storeCKEditorImages')->name('hawkmas.storeCKEditorImages');
    Route::resource('hawkmas', 'HawkmaController');

    // Report Categories
    Route::delete('report-categories/destroy', 'ReportCategoriesController@massDestroy')->name('report-categories.massDestroy');
    Route::resource('report-categories', 'ReportCategoriesController');

    // Reports
    Route::delete('reports/destroy', 'ReportsController@massDestroy')->name('reports.massDestroy');
    Route::post('reports/media', 'ReportsController@storeMedia')->name('reports.storeMedia');
    Route::post('reports/ckmedia', 'ReportsController@storeCKEditorImages')->name('reports.storeCKEditorImages');
    Route::resource('reports', 'ReportsController');

    // Report Money
    Route::delete('report-moneys/destroy', 'ReportMoneyController@massDestroy')->name('report-moneys.massDestroy');
    Route::post('report-moneys/media', 'ReportMoneyController@storeMedia')->name('report-moneys.storeMedia');
    Route::post('report-moneys/ckmedia', 'ReportMoneyController@storeCKEditorImages')->name('report-moneys.storeCKEditorImages');
    Route::resource('report-moneys', 'ReportMoneyController');

    // Gallery
    Route::delete('galleries/destroy', 'GalleryController@massDestroy')->name('galleries.massDestroy');
    Route::post('galleries/media', 'GalleryController@storeMedia')->name('galleries.storeMedia');
    Route::post('galleries/ckmedia', 'GalleryController@storeCKEditorImages')->name('galleries.storeCKEditorImages');
    Route::resource('galleries', 'GalleryController');

    // Volunteer
    Route::delete('volunteers/destroy', 'VolunteerController@massDestroy')->name('volunteers.massDestroy');
    Route::post('volunteers/media', 'VolunteerController@storeMedia')->name('volunteers.storeMedia');
    Route::post('volunteers/ckmedia', 'VolunteerController@storeCKEditorImages')->name('volunteers.storeCKEditorImages');
    Route::resource('volunteers', 'VolunteerController');

    // Volunteer Guides
    Route::delete('volunteer-guides/destroy', 'VolunteerGuidesController@massDestroy')->name('volunteer-guides.massDestroy');
    Route::post('volunteer-guides/media', 'VolunteerGuidesController@storeMedia')->name('volunteer-guides.storeMedia');
    Route::post('volunteer-guides/ckmedia', 'VolunteerGuidesController@storeCKEditorImages')->name('volunteer-guides.storeCKEditorImages');
    Route::resource('volunteer-guides', 'VolunteerGuidesController');

    // Membership Type
    Route::delete('membership-types/destroy', 'MembershipTypeController@massDestroy')->name('membership-types.massDestroy');
    Route::post('membership-types/media', 'MembershipTypeController@storeMedia')->name('membership-types.storeMedia');
    Route::post('membership-types/ckmedia', 'MembershipTypeController@storeCKEditorImages')->name('membership-types.storeCKEditorImages');
    Route::resource('membership-types', 'MembershipTypeController');

    // Members
    Route::delete('members/destroy', 'MembersController@massDestroy')->name('members.massDestroy');
    Route::resource('members', 'MembersController');

    // Contacts
    Route::delete('contacts/destroy', 'ContactsController@massDestroy')->name('contacts.massDestroy');
    Route::resource('contacts', 'ContactsController');

    // Subscribe
    Route::delete('subscribes/destroy', 'SubscribeController@massDestroy')->name('subscribes.massDestroy');
    Route::resource('subscribes', 'SubscribeController');

    // Settings
    Route::post('settings/media', 'SettingsController@storeMedia')->name('settings.storeMedia');
    Route::post('settings/ckmedia', 'SettingsController@storeCKEditorImages')->name('settings.storeCKEditorImages');
    Route::resource('settings', 'SettingsController', ['except' => ['create', 'store', 'edit', 'show']]);
    Route::get('settings/edit', 'SettingsController@edit')->name('settings.edit');

    // Directors
    Route::delete('directors/destroy', 'DirectorsController@massDestroy')->name('directors.massDestroy');
    Route::post('directors/media', 'DirectorsController@storeMedia')->name('directors.storeMedia');
    Route::post('directors/ckmedia', 'DirectorsController@storeCKEditorImages')->name('directors.storeCKEditorImages');
    Route::resource('directors', 'DirectorsController');

    // Support
    Route::delete('supports/destroy', 'SupportController@massDestroy')->name('supports.massDestroy');
    Route::post('supports/media', 'SupportController@storeMedia')->name('supports.storeMedia');
    Route::post('supports/ckmedia', 'SupportController@storeCKEditorImages')->name('supports.storeCKEditorImages');
    Route::resource('supports', 'SupportController');

    // Certificate
    Route::delete('certificates/destroy', 'CertificateController@massDestroy')->name('certificates.massDestroy');
    Route::post('certificates/media', 'CertificateController@storeMedia')->name('certificates.storeMedia');
    Route::post('certificates/ckmedia', 'CertificateController@storeCKEditorImages')->name('certificates.storeCKEditorImages');
    Route::resource('certificates', 'CertificateController');

    // Article
    Route::delete('articles/destroy', 'ArticleController@massDestroy')->name('articles.massDestroy');
    Route::post('articles/media', 'ArticleController@storeMedia')->name('articles.storeMedia');
    Route::post('articles/ckmedia', 'ArticleController@storeCKEditorImages')->name('articles.storeCKEditorImages');
    Route::resource('articles', 'ArticleController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
