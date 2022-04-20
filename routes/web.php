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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/petitioners','PetitionerController@index');
Route::get('/petitioners/store','PetitionerController@store');
Route::post('/petitioners/add','PetitionerController@add');
Route::get('/petitioners/delete','PetitionerController@delete');
Route::post('/petitioners/del','PetitionerController@del');
Route::get('/petitioners/update','PetitionerController@update');
Route::post('/petitioners/up','PetitionerController@up');
Route::post('/petitioners/disp','PetitionerController@disp');


Route::get('/firs','FirController@index');
Route::get('/firs/store','FirController@store');
Route::post('/firs/add','FirController@add');
Route::get('/firs/delete','FirController@delete');
Route::post('/firs/del','FirController@del');
Route::get('/firs/update','FirController@update');
Route::post('/firs/up','FirController@up');
Route::post('/firs/disp','FirController@disp');


Route::get('/accused','AccusedController@index');
Route::get('/accused/store','AccusedController@store');
Route::post('/accused/add','AccusedController@add');
Route::get('/accused/delete','AccusedController@delete');
Route::post('/accused/del','AccusedController@del');
Route::get('/accused/update','AccusedController@update');
Route::post('/accused/up','AccusedController@up');
Route::post('/accused/disp','AccusedController@disp');


Route::get('/io','IoController@index');
Route::get('/io/store','IoController@store');
Route::post('/io/add','IoController@add');
Route::get('/io/delete','IoController@delete');
Route::post('/io/del','IoController@del');
Route::get('/io/update','IoController@update');
Route::post('/io/up','IoController@up');
Route::post('/io/disp','IoController@disp');

Route::get('/cases','CaseController@index');
Route::get('/cases/store','CaseController@store');
Route::post('/cases/add','CaseController@add');
Route::get('/cases/delete','CaseController@delete');
Route::post('/cases/del','CaseController@del');
Route::get('/cases/update','CaseController@update');
Route::post('/cases/up','CaseController@up');
Route::post('/cases/disp','CaseController@disp');
Route::get('/cases/description/{id}','CaseController@desc');

Route::get('/lockups','LockupController@index');
Route::get('/lockups/store','LockupController@store');
Route::post('/lockups/add','LockupController@add');
Route::get('/lockups/delete','LockupController@delete');
Route::post('/lockups/del','LockupController@del');
Route::get('/lockups/update','LockupController@update');
Route::post('/lockups/up','LockupController@up');
Route::post('/lockups/disp','LockupController@disp');

Route::get('/place','UserController@index');
Route::post('/placefir','UserController@fir');
Route::post('/cases','UserController@cases');
Route::post('/caseadd/{id}','UserController@caseadd');
Route::get('/viewstatus','UserController@viewstatus');
Route::post('/select','UserController@Selected');
