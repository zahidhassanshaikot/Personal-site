<?php

Auth::routes();

Route::get('/password-change', 'BackEndController@passwordChange')->name('password-change');
Route::post('/update-password', 'BackEndController@updatePassword')->name('update-password');
Route::get('/edit-profile', 'BackEndController@editProfile')->name('edit-profile');
Route::post('/update-profile', 'BackEndController@updateProfile')->name('update-profile');

Route::get('/edit-about-me/{id}', 'BackEndController@editAboutMe')->name('edit-about-me');
Route::post('/update-about-me', 'BackEndController@updateAboutMe')->name('update-about-me');


Route::post('/send-contact-us-message', 'FrontEndController@sendContactMessage')->name('send-contact-us-message');
Route::get('/view/contact-message', 'BackEndController@viewContact')->name('view-contact-info');


Route::get('/deshboard', 'BackEndController@deshboard')->name('deshboard');
Route::get('/manage-profile', 'BackEndController@manageProfile')->name('manage-profile');
Route::get('/manage-about', 'BackEndController@manageAbout')->name('manage-about');

Route::get('/manage-service', 'BackEndController@manageService')->name('manage-service');
Route::get('/add/new-service', 'BackEndController@addNewService')->name('add-new-service');
Route::get('/edit-service/{id}', 'BackEndController@editService')->name('edit-service');
Route::get('/service-details/{id}', 'FrontEndController@serviceDetails')->name('service-details');
Route::get('/delete-service/{id}', 'BackEndController@deleteService')->name('delete-service');
Route::post('/save/new-service', 'BackEndController@saveNewService')->name('save-new-service');
Route::post('/save/update-service', 'BackEndController@updateService')->name('update-service');


Route::get('/', 'FrontEndController@index')->name('/');
Route::get('/service', 'FrontEndController@service')->name('service');
// Route::get('/home', 'HomeController@index')->name('home');
