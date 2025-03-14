<?php

use App\Http\Controllers\PostController;

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

//Blog - Recibimos un tercer parametro con la llave de post
//Route::view('/blog', 'blog', ['posts' => $posts])->name('blog');

//Route::get('/blog', PostController::class)->name('blog');

/* Route::get('/blog', function(){
    //Movemos el array
    $posts = [
        ['title' =>'Fisrt post'],
        ['title' => 'Second post'],
        ['title' => 'Third post'],
        ['title' => 'Fourth post'],


    ];

    //Devolvemos manualmente la vista
    return view('blog', ['posts' => $posts]);

})->name('blog'); */

//Enviando un array de metodos en nuestro controlador
//Route::get('/blog', [PostController::class, 'methodname'])->name('blog');

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');


//Route::get('/blog/1', [PostController::class, 'show'])->name('blog');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');

// About
Route::view('/about', 'about')->name('about');

