<?php


namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //public function __invoke(){
    //public function methodname(){
        public function index(){

        //return 'blog';

       /*  $posts = [
            ['title' =>'Fisrt post'],
            ['title' => 'Second post'],
            ['title' => 'Third post'],
            ['title' => 'Fourth post'],
        ]; */
        //Conexion con la BD
        // $posts = DB::table('posts')->get(); //Forma de Accesar a la BD con el metodo DB

        //Acceso a laa BD mediante el ORM eloquent 
        $posts = Post::get();

        return view('blog', ['posts' => $posts]);

    }
}
