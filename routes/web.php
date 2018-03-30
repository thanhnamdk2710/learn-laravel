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

/*
 *  Chap 5 - Routing
 */

Route::get('ID/{id}', function ($id){
   echo 'ID: ' . $id;
});

Route::get('user/{name?}', function ($name = 'NamDeve'){
    echo 'Name: ' . $name;
});
