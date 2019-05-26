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

Route::get('/', 'EmployeeController@home')->name('welcome');
Route::group(['prefix' => 'employees'], function () {
    Route::get('/', 'EmployeeController@index')->name('employees.index');

    Route::get('/create', 'EmployeeController@create')->name('employees.create');
    Route::post('/create', 'EmployeeController@store')->name('employees.store');

    Route::get('/{id}/edit', 'EmployeeController@edit')->name('employees.edit');
    Route::post('/{id}/edit', 'EmployeeController@update')->name('employees.update');

    Route::get('/{id}/delete', 'EmployeeController@destroy')->name('employees.delete');

    Route::get('/search', 'EmployeeController@search')->name('employees.search');

});
Route::group(['prefix' => 'groups'], function () {
    Route::get('/','GroupController@index')->name('groups.index');

    Route::get('/create','GroupController@create')->name('groups.create');
    Route::post('/create','GroupController@store')->name('groups.store');

    Route::get('/{id}/edit', 'GroupController@edit')->name('groups.edit');
    Route::post('/{id}/edit', 'GroupController@update')->name('groups.update');
});