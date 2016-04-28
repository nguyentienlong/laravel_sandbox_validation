<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix' => 'student'], function() {
//     Route::get('{student}/detail', 'StudentController@detail');
// });


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//studnet route binding

//implicit
Route::model('student', 'App\Models\Student'); //we can define call back here - but not good organize


Route::group(['middleware' => ['web']], function () {
    // student resources
    Route::resources(['student' => 'StudentController']);
    // class resources
    Route::resources(['class' => 'ClassController']);
});
