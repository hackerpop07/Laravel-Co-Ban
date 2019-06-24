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

Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'Hello World!';

    }

});
Route::get('/', function () {
    return view("welcome");
});

Route::get('/login', function () {
    return view('login.login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('login.welcome_admin');
    }
    return view('login.login_error');
});
Route::get('/product', 'productCOntroller@viewCalculator');
Route::post('/product', 'productCOntroller@calculator');
Route::get('/simpledictionary', 'dictionaryControllers@viewDictionary');
Route::post('/simpledictionary', 'dictionaryControllers@Dictionary');
