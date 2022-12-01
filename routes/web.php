<?php

use App\Http\Controllers\NotesController;
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


Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::resource('notes', NotesController::class);
    Route::get('/home', [App\Http\Controllers\NotesController::class, 'index'])->name('home');
});