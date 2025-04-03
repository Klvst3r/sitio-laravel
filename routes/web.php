<?php

use App\Http\Controllers\Auth\RegisteredUserController;

use App\Http\Controllers\AuthenticatedSessionController;

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

 Route::get('/welcome', function () {
    return view('welcome');
});
 

Route::get('/app', function () {
    return view('app');
});
 



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

//Comentamos los 7 metodos rest para utlizar resources

// Route::get('/blog', [PostController::class, 'index'])->name('posts.index');

// //Formulario de registro
// Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');

// Route::post('blog', [PostController::class, 'store'])->name('posts.store');


// //Route::get('/blog/1', [PostController::class, 'show'])->name('blog');
// //Show
// Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');

// //Edit
// Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// //Update
// Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');

// //delete
// Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');



//
Route::resource('blog', Postcontroller::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
]);



// About
//Route::view('/about', 'about')->name('about')->middleware('auth');
Route::view('/about', 'about')->name('about');

//Login

// Route::get('/login', function(){
//     return 'Login page';
// })->name('login');


//Login
Route::view('/login','auth.login')->name('login');


//
Route::post('/login',[AuthenticatedSessionController::class, 'store']);

Route::post('/logout',[AuthenticatedSessionController::class, 'destroy'])->name('logout');



//Ruta de registro
Route::view('/register','auth.register')->name('register');


Route::post('/register', [RegisteredUserController::class, 'store']);