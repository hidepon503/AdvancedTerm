<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReseController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;

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

Route::get('/',[ReseController::class,'index']);
//Route::get('/index', function () {return view('index');});
Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);
Route::get('/login',[AuthenticatedSessionController::class, 'create']);
Route::post('/login',[AuthenticatedSessionController::class, 'store']);
Route::post('/logout',[AuthenticatedSessionController::class, 'destroy'])->middleware(['auth'])->name('logout');

require __DIR__.'/auth.php';


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