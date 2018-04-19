<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/admin-create', 'AdminController@create')->name('admin.create');
Route::post('/admin/admin-store', 'AdminController@store')->name('admin.store');
Route::get('/admin/admin-delete/{id}', 'AdminController@destroy')->name('admin.destroy');
Route::get('/admin/admin-edit/{id}', 'AdminController@edit')->name('admin.edit');
Route::post('/admin/admin-update', 'AdminController@update')->name('admin.update');


Route::get('admin/customersupport','CustomerController@index')->name('index');
Route::get('admin/customer-view-message/{id}','CustomerController@view')->name('view');
Route::get('admin/customer-view-message-show/{id}','CustomerController@message')->name('message');
Route::post('admin/send-message-user-admin-member','CustomerController@create')->name('create');

//location routes
Route::get('/locations','LocationController@index')->name('location.index');
Route::get('/locations/location-delete/{id}','LocationController@destroy')->name('location.destroy');
Route::get('/locations/location-edit/{id}','LocationController@edit')->name('location.edit');
Route::get('/locations/create-location','LocationController@create')->name('location.create');
Route::post('/locations/store-location','LocationController@store')->name('location.store');
Route::post('/locations/update-location','LocationController@update')->name('location.update');

Route::get('/locations/venue-detail/{id}','VenueController@index')->name('index');
Route::get('/locations/venue-create/{id}','VenueController@create')->name('venue.create');
Route::get('/locations/venue-delete/{id}','VenueController@destroy')->name('venue.destroy');
Route::get('/locations/venue-edit/{id}','VenueController@edit')->name('venue.edit');
Route::post('/locations/venue-add','VenueController@store')->name('venue.store');
Route::post('/locations/venue-update','VenueController@update')->name('venue.update');
Route::get('/admin/venue/datashow/{id}','VenueController@create')->name('create');

 
Route::get('/roles','RoleController@index')->name('role.index');


Route::post('venue/sub_location','VenueController@sub_location')->name('sub_location');
//permission routes

Route::get('/admin/permission','PermissionController@index')->name('permission.index');
Route::get('/admin/permission/create','PermissionController@create')->name('permission.create');
Route::post('/admin/permission/store','PermissionController@store')->name('permission.store');
Route::get('/admin/permission/delete/{id}','PermissionController@destroy')->name('permission.delete');
Route::get('/admin/permission/edit/{id}','PermissionController@edit')->name('permission.edit');
Route::post('/admin/permission/update','PermissionController@update')->name('permission.update');



Route::get('/admin/role','RoleController@index')->name('role.index');
Route::get('/admin/role/create','RoleController@create')->name('role.create');
Route::post('/admin/role/store','RoleController@store')->name('role.store');
Route::get('/admin/role/delete/{id}','RoleController@destroy')->name('role.delete');
Route::get('/admin/role/edit/{id}','RoleController@edit')->name('role.edit');
Route::post('/admin/role/update','RoleController@update')->name('role.update');

