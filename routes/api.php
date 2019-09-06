<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//
// Route::group([
//     'middleware' => 'api',
//     'prefix' => 'auth'
// ], function () {
//     Route::get('/genres','genresController@index');
// });
//Route::middleware('auth:api')->get('/genres','genresController@index');
use App\Mail\TestEmail;
Route::group([
    'prefix' => 'auth'
], function () {
Route::get('genres','genresController@index');
Route::get('movies','moviesController@index');
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
});

Route::get('testsmtpemail', function(){

   $data = ['message' => 'This is a test!'];

    Mail::to('john@example.com')->send(new TestEmail($data));
});

