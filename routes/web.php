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


/*
 *  Chap 6 - Middleware
 */

Route::get('role', [
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
]);

Route::get('terminate', [
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
]);

/*
 *  Chap 7 - Controller
 */

Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
]);

Route::get('usercontroller/path', [
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
]);

Route::resource('my', 'MyController');

class MyClass{
    public $foo = 'bar';
}

Route::get('myclass', 'ImplicitController@index');

/*
 *  Chap 8 - Request
 */

Route::get('foo/bar', 'UriController@index');

Route::get('register', function (){
    return view('register');
});

Route::post('user/register', [
    'uses' => 'UserRegistration@postRegister'
]);

/*
 *  Chap 9 - Cookie
 */

Route::get('cookie/set', 'CookieController@setCookie');

Route::get('cookie/get', 'CookieController@getCookie');

/*
 *  Chap 10 - Response
 */

Route::get('basic_response', function (){
    return 'Hello World';
});

Route::get('header', function (){
    return response("Hello", 200)->header('Content-Type', 'text/html');
});

Route::get('cookie', function (){
    return response("Hello", 200)->header('Content-Type', 'text/html')->withCookie('name', 'NamDeve');
});

Route::get('json', function (){
    return response()->json(['name' => 'NamDeve', 'state' => 'Develop']);
});

/*
 *  Chap 11 - Views
 */

//Route::get('test', function (){
//    return view('test');
//});

Route::get('test2', function (){
    return view('test2');
});

Route::get('blade', function (){
    return view('page', ['name' => 'Nam Deve']);
});

/*
 *  Chap 12 - Redirect
 */

Route::get('test', ['as' => 'testing', function (){
    return view('test2');
}]);

Route::get('redirect', function (){
    return redirect()->route('testing');
});

Route::get('rr', 'RedirectController@index');

Route::get('redirectcontroller', function (){
    return redirect()->action('RedirectController@index');
});