<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/login',[AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login',[AuthController::class, 'authenticating'])->middleware('guest');
Route::get('/logout',[AuthController::class, 'logout'])->middleware('auth');

Route::get('/forgot-password', function(){
    return view('lupa-sandi');
})->middleware('guest');

Route::get('/beranda', function(){
    return view('beranda');
})->middleware('auth');

Route::get('/kuisioner', function(){
    return view('kuisioner');
})->middleware('auth');

Route::get('/proses-manajemen', function(){
    return view('prosesMR');
})->middleware('auth');

// Route::get('/masuk', function(){
//     return view('masuk');
// });

