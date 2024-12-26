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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::view('/', 'welcome')->name('home');

//Contacto
Route::view('/contacto', 'contact')->name('contact');

//Blog
Route::view('/blog', 'blog')->name('blog');

// About
Route::view('/about', 'about')->name('about');

