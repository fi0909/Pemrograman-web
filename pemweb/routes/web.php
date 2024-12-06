<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/baru/home',[UserController::class,('home')])->name('topmenu1');
Route::get('/baru/about',[UserController::class,('about')])->name('topmenu2');
Route::get('/baru/contact',[UserController::class,('contact')])->name('topmenu3');
Route::get('/', function () {
    return view('welcome');
});
