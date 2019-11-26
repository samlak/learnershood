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

// use App\Http\Controllers\AcademicController;

Auth::routes();

Route::get('/', 'PublicController@index');
Route::get('/contact', 'PublicController@contact');
Route::get('/about', 'PublicController@about');
Route::get('/search', 'PublicController@search');
Route::get('/preview/{token}', 'PublicController@preview');

Route::get('/courses', 'PublicController@courses');
Route::get('/course/{code}', 'PublicController@singleCourse');

Route::get('/addcourse', 'AccountController@addCourse');
Route::post('/addcourse', 'AccountController@storeCourse');
Route::get('/editcourse/{school}/{code}', 'AccountController@editCourse');
Route::put('/editcourse/{school}/{code}', 'AccountController@updateCourse');

Route::get('/school/{code}', 'PublicController@singleSchool');
Route::get('/schools', 'PublicController@schools');

Route::get('/addschool', 'AccountController@addSchool');
Route::post('/addschool', 'AccountController@storeSchool');
Route::get('/editschool/{code}', 'AccountController@editSchool');
Route::put('/editschool/{code}', 'AccountController@UpdateSchool');

Route::get('/department/{school}/{code}', 'PublicController@singleDepartment');
Route::get('/departments', 'PublicController@departments');

Route::get('/adddepartment', 'AccountController@addDepartment');
Route::post('/adddepartment', 'AccountController@storeDepartment');
Route::get('/editdepartment/{school}/{code}', 'AccountController@editDepartment');
Route::put('/editdepartment/{school}/{code}', 'AccountController@updateDepartment');

Route::get('/submit', 'AccountController@submit');
Route::get('/library', 'AccountController@library');
Route::get('/account', 'AccountController@account');
Route::get('/profile', 'AccountController@profile');
Route::get('/changepassword', 'AccountController@changePassword');

Route::get('/admin/addcourse', 'AdminController@addCourse');

Route::get('/admin/adddepartment', 'AccountController@addDepartment');
Route::get('/admin/addschool', 'AccountController@addSchool');

Route::get('/testing', 'AcademicController@testing');
