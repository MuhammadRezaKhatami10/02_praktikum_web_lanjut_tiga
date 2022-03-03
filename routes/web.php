<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Nphpow create something great!
|
*/

//langkah1
Route::redirect('/', 'https://www.educastudio.com/');

//langkah2
Route::prefix('category')->group(function () {
    Route::redirect('/edugames', 'https://www.educastudio.com/category/marbel-edu-games');
    Route::redirect('/kidsgames', 'https://www.educastudio.com/category/marbel-and-friends-kids-games');
    Route::redirect('/storybook', 'https://www.educastudio.com/category/riri-story-books');
    Route::redirect('/kidssong', 'https://www.educastudio.com/category/kolak-kids-songs');
});

//langkah3
Route::get('/berita/{id}', function ($id=1) {
    return redirect()->route('berita');
});
Route::redirect('/berita', 'https://www.educastudio.com/news')->name('berita');

Route::get('/berita/{id}', function ($id=2) {
    return redirect()->route('berita2');
});
Route::redirect('/berita2', 'https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19')->name('berita2');

//langkah4
Route::prefix('program')->group(function () {
    Route::redirect('/karir', 'https://www.educastudio.com/program/karir');
    Route::redirect('/magang', 'https://www.educastudio.com/program/magang');
    Route::redirect('/kunjungan', 'https://www.educastudio.com/program/kunjungan-industri');
});

//langkah5
Route::redirect('/about', 'https://www.educastudio.com/about-us');

//langkah6
Route::resource('contact', PageController::class)->only(['index']);

