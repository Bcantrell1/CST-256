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

Route::get('/', function () {
    return view('index');
}); 

Route::get('/login', function () {
    return view('login');
});

Route::get('/login2', function ()
{
    return view('login2');
});

Route::get('/login3', function ()
{
    return view('login3');
});

Route::post('/dologin','LoginController@index');
Route::post('/dologin3','LoginController3@index');

Route::resource('/usersrest', 'UsersRestController');

Route::get('/testapi', 'RestClientController@index');

Route::get('/loggingservice/{msg}','TestLoggingController@index');