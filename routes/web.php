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
Route::get('/mapagent', function () {
    return view('mapAgent');
});
Route::get('/mapcar', function () {
    return view('mapCar');
});

Route::resource('/agent', 'AgentController');
Route::resource('/car', 'CarController');
Route::resource('/positioncar', 'PositionCarController');