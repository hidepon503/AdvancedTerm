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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/default', function () {
    return view('layouts.default');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/thanks', function () {
    return view('thanks');
});
Route::get('/done', function () {
    return view('done');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/mypage', function () {
    return view('mypage');
});