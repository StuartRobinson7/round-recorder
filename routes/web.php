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
    return view('home');
});

Route::get('/add_course', function () {
    return view('add_course');
});


Route::get('/player_list', function () {

    $player = \App\User::all();

    return view('player_list', ['player' => $player]);
});


//Route::get('/add_course', function () {

//    $course = \App\Course::all();

//    return view('add_course', ['course' => $course]);
//});

Route::get('/add_course', 'CourseController@showAddCourseForm')->name('add_course');
Route::post('/add_course', ['as' => 'add_course', 'uses' => 'CourseController@saveCourses']);


Route::get('/profile', function () {

    $player = \App\User::all();

    return view('profile', ['player' => $player]);
    
})->name('profile');






// Register/Login Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

