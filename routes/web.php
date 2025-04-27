<?php
Route::group(['as' => 'frontend.'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/chairman', 'HomeController@chairman')->name('chairman');
    Route::get('/news', 'NewController@news')->name('news');
    Route::get('/new/{$id}', 'NewController@new')->name('new');
    Route::get('/directors', 'HomeController@directors')->name('directors');
    Route::get('/partners', 'HomeController@partners')->name('partners');
    Route::get('/scope', 'HomeController@scope')->name('scope');
    Route::get('/certificates', 'HomeController@certificates')->name('certificates');
    Route::get('/sustainability', 'HomeController@sustainability')->name('sustainability');
    Route::get('hawkma/{category}', 'HomeController@hawkma')->name('hawkma');
    Route::get('reports/{type}', 'HomeController@reports')->name('reports');
    Route::get('news', 'NewsController@news')->name('news');
    Route::get('new/{id}', 'NewsController@new')->name('new');
    Route::get('articles', 'ArticleController@articles')->name('articles');
    Route::get('article', 'ArticleController@article')->name('article');
    Route::get('projects', 'ProjectController@projects')->name('projects');
    Route::get('project', 'ProjectController@project')->name('project');
    Route::get('support', 'HomeController@support')->name('support');
    Route::get('membership_types', 'MemberShipController@types')->name('membership_types');
    Route::get('membership_guides', 'MemberShipController@guides')->name('membership_guides');
    Route::get('membership', 'MemberShipController@membership')->name('membership');
    Route::post('membership', 'MemberShipController@store')->name('membership.store');
    Route::get('contact', 'ContactUsController@contact')->name('contact');
    Route::post('contact', 'ContactUsController@store')->name('contact.store');
    Route::get('media', 'MediaController@media')->name('media');

});
