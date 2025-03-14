<?php


namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//como vamos a utilizar el modelo Post en el metodo post debemos importarlo


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

        return view('posts.index', ['posts' => $posts]);

    }

  /*  public function show($post){
        //return $post;
        //return Post::find($post);
        return Post::findOrFail($post);
    }*/

      public function show(Post $post){
        //return $post;
        return view('posts.show', ['post' => $post]);
    }

}
