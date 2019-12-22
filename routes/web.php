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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

 Route::get('/home', 'UserController@index')->name('admin.index');


//student

Route::get('/student', 'UserController@list')->name('student.list');

Route::get('/student/add', 'UserController@add')->name('student.add');
 Route::post('/student/add', 'UserController@adddata');

 Route::get('/student/edit/{id}', 'UserController@edit')->name('student.edit');
 Route::post('/student/edit/{id}', 'UserController@editdata');
 Route::get('/student/delete/{id}', 'UserController@delete')->name('student.delete');
Route::post('/student/load', 'UserController@sload');

Route::get('student/course/{id}', 'UserController@studentcourse')->name('student.course');

Route::post('student/course/{id}', 'UserController@studentcourseadd');





// faculty



Route::get('/faculty', 'UserController@facultylist')->name('faculty.list');

Route::get('/faculty/add', 'UserController@facultyadd')->name('faculty.add');
 Route::post('/faculty/add', 'UserController@facultyadddata');

 Route::get('/faculty/edit/{id}', 'UserController@facultyedit')->name('faculty.edit');
 Route::post('/faculty/edit/{id}', 'UserController@facultyeditdata');
 Route::get('/faculty/delete/{id}', 'UserController@facultydelete')->name('faculty.delete');


// Course




Route::get('/course', 'CourseController@list')->name('course.list');

Route::get('/course/add', 'CourseController@add')->name('course.add');
 Route::post('/course/add', 'CourseController@adddata');

 Route::get('/course/edit/{id}', 'CourseController@edit')->name('course.edit');
 Route::post('/course/edit/{id}', 'CourseController@editdata');
 Route::get('/course/delete/{id}', 'CourseController@delete')->name('course.delete');





// Books


Route::get('/book', 'BookController@list')->name('book.list');

Route::get('/book/add', 'BookController@add')->name('book.add');
 Route::post('/book/add', 'BookController@adddata');

 Route::get('/book/edit/{id}', 'BookController@edit')->name('book.edit');
 Route::post('/book/edit/{id}', 'BookController@editdata');
 Route::get('/book/delete/{id}', 'BookController@delete')->name('book.delete');


// Manager


Route::get('/manager', 'AdminController@list')->name('admin.list');

Route::get('/manager/add', 'AdminController@add')->name('admin.add');
 Route::post('/manager/add', 'AdminController@adddata');

 Route::get('/manager/edit/{id}', 'AdminController@edit')->name('admin.edit');
 Route::post('/manager/edit/{id}', 'AdminController@editdata');
 Route::get('/manager/delete/{id}', 'AdminController@delete')->name('admin.delete');


// Post
Route::get('/post', 'PostController@list')->name('post.index');


Route::get('/post/add', 'PostController@add')->name('post.add');
 Route::post('/post/add', 'PostController@adddata');

//Logout

 Route::get('/logout', 'LogoutController@index')->name('logout.index');




 // Should Be Removed


Route::get('/', 'WebsiteController@index')->name('website.index');
Route::get('/request', 'WebsiteController@add')->name('website.add');
Route::post('/request', 'WebsiteController@adddata');


//Route::get('/profile', 'UserController@index')->name('admin.index');
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');


Route::get('/logout', 'LogoutController@index')->name('logout.index');


//Route::post('/image/edit/{id}', 'ImageController@editimage');


// user

Route::get('/userlist', 'UserController@list')->name('user.list');
Route::get('/user/request', 'UserController@reqlist')->name('req.list');

Route::get('/register', 'UserController@add')->name('user.add');
 Route::post('/register', 'UserController@adddata');

 Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
 Route::post('/user/edit/{id}', 'UserController@editdata');
 Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');



 //Category


 Route::get('/category', 'CategoryController@list')->name('category.list');
Route::get('/category/add', 'CategoryController@add')->name('category.add');
 Route::post('/category/add', 'CategoryController@adddata');

 Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
 Route::post('/category/edit/{id}', 'CategoryController@editdata');
 Route::get('/category/delete/{id}', 'CategoryController@delete')->name('category.delete');



 Route::get('/media', 'MediaController@list')->name('media.list');
Route::get('/media/add', 'MediaController@add')->name('media.add');
 Route::post('/media/add', 'MediaController@adddata');

 Route::get('/media/edit/{id}', 'MediaController@edit')->name('media.edit');
 Route::post('/media/edit/{id}', 'MediaController@editdata');
 Route::get('/media/delete/{id}', 'MediaController@delete')->name('media.delete');




  Route::get('/content/{id}', 'WebsiteController@edit')->name('content.view');
  Route::post('/search', 'WebsiteController@search');
  Route::get('/category/{id}', 'WebsiteController@category')->name('content.category');
