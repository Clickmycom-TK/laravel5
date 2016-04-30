<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function() {
    return 'Hello';
});

Route::get('world', function() {
    return 'World';
});

Route::get('foo', 'FooController@index');

Route::group(['middleware' => ['api']], function () {
     Route::resource('employees', 'Api\EmployeeController', [
        'except' => ['create', 'edit']
    ]);
});
