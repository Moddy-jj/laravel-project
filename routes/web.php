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


Auth::routes();


Route::get('/22', function () { 
    return redirect('/tasks');
});
Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
Route::get('/', function () { 
        return view('index');
});
Route::get('/11', function () { 
    return redirect('/personal');
});
Route::get('/personal', 'PersonalController@index');
Route::post('/personal', 'PersonalController@store');
Route::get('/33', function () { 
    return redirect('/activity');
});
Route::get('/activity', 'ActivityController@index');
Route::post('/activity', 'ActivityController@store');
//Route::get('/44', function () { 
    //return redirect('/login');
    //});
//Route::get('/login', 'LoginController@index');
//Route::post('/login', 'LoginController@store');

//Route::get('/55', function () { 
   // return redirect('/register');
//});
//Route::get('/register', 'RegisterController@index');
//Route::post('/register', 'RegisterController@store');

    