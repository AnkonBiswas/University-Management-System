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
    return view('welcome');
});

Route::get('/login', 'userController@login')->name('user.login');
Route::post('/login', 'userController@verify');

Route::get('/changePassword', 'userController@changePassword')->name('user.changePassword');
Route::post('/changePassword', 'userController@changePass');

Route::get('/faculty/profile', 'facultyController@profile')->name('faculty.profile');

Route::get('/faculty/allStudents', 'facultyController@allStudents')->name('faculty.allStudents');
Route::get('/faculty/allCourses', 'facultyController@allCourses')->name('faculty.allCourses');
Route::get('/faculty/facultyCourses', 'facultyController@facultyCourses')->name('faculty.facultyCourses');
Route::get('/faculty/courseStudents/{id}', 'facultyController@courseStudents')->name('faculty.courseStudents');

Route::get('/faculty/changeGrade/{id}', 'facultyController@viewGrade')->name('faculty.changeGrades');
Route::post('/faculty/changeGrade/{id}', 'facultyController@changeGrade');

Route::get('/faculty/uploadfile/{id}','facultyController@upload')->name('faculty.fileupload');
Route::post('/faculty/uploadfile/{id}','facultyController@showUploadFile')->name('faculty.upload');

Route::get('/faculty/mail', 'facultyController@mail')->name('faculty.mail');
Route::post('/faculty/mail', 'facultyController@sendMail');
Route::get('/faculty/sentMail', 'facultyController@sentMail')->name('faculty.sentMail');
