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

Route::get('/course_list', function () {

    $course = \App\Course::all();

    return view('course_list', ['course' => $course]);
});


//Route::get('/add_course', function () {

//    $course = \App\Course::all();

//    return view('add_course', ['course' => $course]);
//});



Route::group(['middleware' => 'auth'], function () {

    Route::get('/add_course', 'CourseController@showAddCourseForm')->name('add_course');
    Route::post('/add_course', ['as' => 'add_course', 'uses' => 'CourseController@saveCourses']);

    Route::get('/add_round', 'RoundController@showAddRoundForm')->name('add_round');
    Route::post('/add_round', ['as' => 'add_round', 'uses' => 'RoundController@saveRound']);

    
    Route::get('/profile', 'ProfileController@ProfileStats')->name('profile');

});


Route::get('ajax_getcourse', 'GetCourseController@GetCourseId')->name('getcourse');







// Register/Login Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

