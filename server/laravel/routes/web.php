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
    return view('welcome');
});
Route::get('/archives', function () {
    return '記事一覧';
});
Route::get('/archives/{category}', function ($category) {
    return $category . 'の記事';
});
Route::get('/example', function () {
    return redirect() -> to('/');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/variable/{var}', function ($var) {
    return view('var', ['var' => $var]);
});
