<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('homepage');
// });

// Route::get('/page', function () {
//     return view('home');
// });

Route::get('/{locale}', function (string $locale) {
    if(! in_array($locale,['en','jp','vi'])){
        abort(400);
    }

    App::setLocale($locale);
    return view('homepage');
});
