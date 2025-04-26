<?php

use App\Http\Controllers\HomeController;
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

Route::get('/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'jp', 'vi', 'fr'])) {
        abort(400);
    }
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/', [HomeController::class, 'index']);
Route::post('/create', [HomeController::class, 'create'])->name('create');
// Delete room
Route::delete('/delete/{id}', [HomeController::class, 'destroy'])->name('delete');
// Search room
Route::get('/search', [HomeController::class, 'search'])->name('search');
