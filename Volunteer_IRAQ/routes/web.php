<?php

use Illuminate\Support\Facades\Route;

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

Route::get('', 'IraqController@index');
Route::get('details', 'IraqController@details')->name('details');
Route::get('/intities', 'IraqController@intities');
Route::get('search_Intities', 'IraqController@search_Intities');
Route::get('about', 'IraqController@about');
Route::get('register_type', 'IraqController@register_type');
Route::get('doLogin', 'IraqController@doLogin');
Route::get('register_intities', 'IraqController@register_intities');
Route::get('register_user', 'IraqController@register_user');
Route::get('logout', 'IraqController@logout');










// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('home', function () {
//     return 'Hawraa Arkan Home';
// });

// Route::view('base','index');

// Route::get('hawraa','HawraaController@index');
// Route::get('users/{id}','HawraaController@show');
// Route::get('sum/{id}','HawraaController@sum');

// Route::get('Najaf', 'NajafController@index');
// Route::get('Najaf/{id}', 'NajafController@show');



// Route::get('/greeting', function () {
//     return 'Hello World';
// });

// use App\Http\Controllers\UserController;

// Route::get('/user', [UserController::class, 'index']);


// use Illuminate\Http\Request;

// Route::get('/users', function (Request $request) {
//     // ...
// });
