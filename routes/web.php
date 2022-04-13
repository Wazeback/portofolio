<?php

use App\Http\Controllers\Controller;
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
Route::get('/', ['App\Http\Controllers\IndexController::class', 'show'])->middleware(['auth'])->name('dashboard');

Route::get('/', ['App\http\Controllers\IndexController', 'index']);

Route::get('/dashboard', function() { return view('dashboard'); })->middleware(['auth'])->name('dashboard');

Route::resource('projects', \App\Http\Controllers\ProjectController::class)->middleware(['auth']);

Route::resource('mails', \App\Http\Controllers\MailController::class);

require __DIR__.'/auth.php';
