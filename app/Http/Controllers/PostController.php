<?php


namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//Visualizcion de errores
use Illuminate\View\View;

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

    public function create(){
      //return 'Create Form';
      return view('posts.create');
    }

    /*public function store(){
      //return 'Process the form';
      //return request();
    }*/

    //Acceso al request de maner diecta con la clase Request
    public function store(Request $request){
      //return $request;
      
            //Acceso a todos datos especificos del request
            //return $request->input('title');


      //Validación del formulario

      $request->validate([
        'title' => ['required', 'min:4'],
        'body' => ['required'],
      ],[
        'title.required' => 'El campo :attribute es requerido'
      ]);

      //Nueva instancia del modelo post
      $post = new Post;
      $post->title = $request->input('title');
      //Hacemos lo mismo con el body
      $post->body = $request->input('body');

      $post->save();

      //Retornando una redirección
      //return redirect('/blog');

      //Aunque lo correcto es utlizar rutas
      //return redirect()->route('post.index');

      //Mensaje antes de redireccionado
      session()->flash('status', 'Post created!');

      //Redireccionando con el helper
      return to_route('posts.index');
    }

}
