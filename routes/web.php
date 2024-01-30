<?php

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

// prima route diretta alla prima pagina
Route::get('/welcome', function () {
    return view('welcome');
});

// seconda route diretta alla second page
Route::get('/second-page', function () {
    return view('secondPage');
})->name('second-page');
