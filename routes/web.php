<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is IF you can register web routes for your application. These
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



Route::group(['middleware' => 'auth'], function () {


    Route::resource('courses', 'CourseController');

    Route::get('/course_list', function () {
        $course_list = \App\Course::all();
        return view('course_list', ['course_list' => $course_list]);
    })->name('course_list'); 

    Route::get('/view_course', function () {
        return view('view_course');
    })->name('view_course');


    Route::resource('rounds', 'RoundController');


    
    Route::get('/profile', 'ProfileController@ProfileStats')->name('profile');

});


Route::get('ajax_getcourse', 'GetCourseController@GetCourseId')->name('getcourse');
Route::get('ajax_getholes', 'GetCourseController@GetCourseHoles')->name('getholes');







// Register/Login Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

