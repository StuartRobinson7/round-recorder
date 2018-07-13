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
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/add_round', 'RoundController@showAddRoundForm')->name('add_round');
    Route::post('/add_round', ['as' => 'add_round', 'uses' => 'RoundController@saveRound']);
});


Route::get('ajax_getcourse', 'GetCourseController@GetCourseId')->name('getcourse');



Route::get('/profile', function () {

    $rounds = \App\Round::where('player_id', Auth::user()->id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("SUM(hole_1_par + hole_2_par + hole_3_par + hole_4_par + hole_5_par + hole_6_par + hole_7_par + hole_8_par + hole_9_par + hole_10_par + hole_11_par + hole_12_par + hole_13_par + hole_14_par + hole_15_par + hole_16_par + hole_17_par + hole_18_par) as total_par")                              
                ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")                
                ->selectRaw("SUM(
                    hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score -
                    hole_1_par - hole_2_par - hole_3_par - hole_4_par - hole_5_par - hole_6_par - hole_7_par - hole_8_par - hole_9_par - hole_10_par - hole_11_par - hole_12_par - hole_13_par - hole_14_par - hole_15_par - hole_16_par - hole_17_par - hole_18_par
                    ) as plus_minus")                
                ->selectRaw("SUM(hole_1_putts + hole_2_putts + hole_3_putts + hole_4_putts + hole_5_putts + hole_6_putts + hole_7_putts + hole_8_putts + hole_9_putts + hole_10_putts + hole_11_putts + hole_12_putts + hole_13_putts + hole_14_putts + hole_15_putts + hole_16_putts + hole_17_putts + hole_18_putts) as total_putts")                
                ->selectRaw("SUM(hole_1_putts + hole_2_putts + hole_3_putts + hole_4_putts + hole_5_putts + hole_6_putts + hole_7_putts + hole_8_putts + hole_9_putts + hole_10_putts + hole_11_putts + hole_12_putts + hole_13_putts + hole_14_putts + hole_15_putts + hole_16_putts + hole_17_putts + hole_18_putts) / 18 as putts_per_hole")                
                
                ->selectRaw("SUM(
                        if(hole_1_fir > 0, 1, 0) +
                        if(hole_2_fir > 0, 1, 0) +
                        if(hole_3_fir > 0, 1, 0) +
                        if(hole_4_fir > 0, 1, 0) +
                        if(hole_5_fir > 0, 1, 0) +
                        if(hole_6_fir > 0, 1, 0) +
                        if(hole_7_fir > 0, 1, 0) +
                        if(hole_8_fir > 0, 1, 0) +
                        if(hole_9_fir > 0, 1, 0) +
                        if(hole_10_fir > 0, 1, 0) +
                        if(hole_11_fir > 0, 1, 0) +
                        if(hole_12_fir > 0, 1, 0) +
                        if(hole_13_fir > 0, 1, 0) +
                        if(hole_14_fir > 0, 1, 0) +
                        if(hole_15_fir > 0, 1, 0) +
                        if(hole_16_fir > 0, 1, 0) +
                        if(hole_17_fir > 0, 1, 0) +
                        if(hole_18_fir > 0, 1, 0) 
                        ) / (               
                        if(hole_1_par > 3, 1, 0) +
                        if(hole_2_par > 3, 1, 0) +
                        if(hole_3_par > 3, 1, 0) +
                        if(hole_4_par > 3, 1, 0) +
                        if(hole_5_par > 3, 1, 0) +
                        if(hole_6_par > 3, 1, 0) +
                        if(hole_7_par > 3, 1, 0) +
                        if(hole_8_par > 3, 1, 0) +
                        if(hole_9_par > 3, 1, 0) +
                        if(hole_10_par > 3, 1, 0) +
                        if(hole_11_par > 3, 1, 0) +
                        if(hole_12_par > 3, 1, 0) +
                        if(hole_13_par > 3, 1, 0) +
                        if(hole_14_par > 3, 1, 0) +
                        if(hole_15_par > 3, 1, 0) +
                        if(hole_16_par > 3, 1, 0) +
                        if(hole_17_par > 3, 1, 0) +
                        if(hole_18_par > 3, 1, 0)
                        )
                        * 100
                      as fir_percentage")

                      ->selectRaw("SUM(
                        if(hole_1_gir > 0, 1, 0) +
                        if(hole_2_gir > 0, 1, 0) +
                        if(hole_3_gir > 0, 1, 0) +
                        if(hole_4_gir > 0, 1, 0) +
                        if(hole_5_gir > 0, 1, 0) +
                        if(hole_6_gir > 0, 1, 0) +
                        if(hole_7_gir > 0, 1, 0) +
                        if(hole_8_gir > 0, 1, 0) +
                        if(hole_9_gir > 0, 1, 0) +
                        if(hole_10_gir > 0, 1, 0) +
                        if(hole_11_gir > 0, 1, 0) +
                        if(hole_12_gir > 0, 1, 0) +
                        if(hole_13_gir > 0, 1, 0) +
                        if(hole_14_gir > 0, 1, 0) +
                        if(hole_15_gir > 0, 1, 0) +
                        if(hole_16_gir > 0, 1, 0) +
                        if(hole_17_gir > 0, 1, 0) +
                        if(hole_18_gir > 0, 1, 0) 
                        ) / 18 * 100
                      as gir_percentage")                      

                ->selectRaw("SUM(hole_1_drops + hole_2_drops + hole_3_drops + hole_4_drops + hole_5_drops + hole_6_drops + hole_7_drops + hole_8_drops + hole_9_drops + hole_10_drops + hole_11_drops + hole_12_drops + hole_13_drops + hole_14_drops + hole_15_drops + hole_16_drops + hole_17_drops + hole_18_drops) as total_drops")               
                ->addSelect('round_date')
                ->addSelect('property_name', 'course_name')
                ->get();   
                
         

    return view('profile', compact('rounds'));

    
})->name('profile');




// Register/Login Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

