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

// aggiunta route specifica (inutilmente dato che laravel assume automaticamente che si 
// stia lavorando con Blade [assurdo]) 

// prima route diretta alla prima pagina
Route::get('/welcome.blade.php', function () {
    return view('welcome');
});

// seconda route diretta alla second page
Route::get('/secondPage.blade.php', function () {
    return view('secondPage');
});
