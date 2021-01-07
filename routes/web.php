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

Route::get('/', \App\Http\Livewire\Home::class)->name('home');
Route::get('/create', \App\Http\Livewire\Resume::class)->name('home');
Route::get('/create-resume', [\App\Http\Controllers\ResumeController::class, 'generatePDF'])->name('create-resume');
//Route::group(['middleware'=>'guest'], function () {
//    Route::livewire('/login', 'login')->name('login');
//    Route::livewire('/register', 'register');
//});
