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

Route::controller('App\Http\Controllers\SetController')->group(function() {
  Route::get('/sets', 'index')->name('sets.index');
  Route::get('/sets/create', 'create')->name('sets.create');
  Route::post('/sets/store', 'store')->name('sets.store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
