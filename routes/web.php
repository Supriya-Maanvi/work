<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/',[AdminController::class,'adminlogin'])->name('adminlogin');
Route::get('/homepage',[AdminController::class,'homepage'])->name('homepage');
Route::post('/homepage',[PostController::class,'post'])->name('post');

Route::get('/adminprofile',[ProfileController::class,'adminprofile'])->name('adminprofile');
Route::post('/adminprofile',[ProfileController::class,'details'])->name('details');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
