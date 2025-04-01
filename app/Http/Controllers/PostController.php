<?php


namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

//SavePostRequest
use App\Http\Requests\SavePostRequest;

use Illuminate\Support\Facades\DB;

//Visualizcion de errores
use Illuminate\View\View;

//como vamos a utilizar el modelo Post en el metodo post debemos importarlo


class PostController extends Controller
{
    //constuctor que traen los middlewares gracia s que se extienden a este controlador
    public function __construct(){
      $this->middleware('auth', ['except' => ['index', 'show']]);
     }


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
      return view('posts.create', ['post' => new Post]);
    }

    /*public function store(){
      //return 'Process the form';
      //return request();
    }*/

    //Acceso al request de maner diecta con la clase Request
    public function store(SavePostRequest $request){
      //return $request;
      
            //Acceso a todos datos especificos del request
            //return $request->input('title');


      //Validación del formulario

      //Al tener el SavePostRequest ṕdemos elimianr estas validaciones ya que tienen la logica de validción en el mismo SavePostRequest
      // $validated = $request->validate([
      //   'title' => ['required', 'min:4'],
      //   'body' => ['required'],
      // ],[
      //   'title.required' => 'El campo :attribute es requerido'
      // ]);

      //dd($validated);

      //Nueva instancia del modelo post
      /*
      $post = new Post;
      $post->title = $request->input('title');
      $post->body = $request->input('body');

      $post->save();
      */

      // Hacemos con eloquent una creación
      //Ya no los utilizamos manualmente
      // Post::create([
      //   'title' => $request->input('title'),
      //   'body' => $request->input('body'),
      // ]);

      //Pasamos el array validado en lugar del codigo anterior
      Post::create($request->validated());


      //Retornando una redirección
      //return redirect('/blog');

      //Aunque lo correcto es utlizar rutas
      //return redirect()->route('post.index');

      //Mensaje antes de redireccionado
      //session()->flash('status', 'Post created!');

      //Redireccionando con el helper
      //return to_route('posts.index');

      //Se utiliza el metodo with para definir mensajes flash
      return to_route('posts.index')->with('status', 'Post created!');
    }

    public function edit(Post $post){
      //return $post;
      
      //Retornamos la vista edit
      return view('posts.edit', ['post' => $post]);

    }

    public function update(SavePostRequest $request, Post $post){
      //return 'Edit post';
      
      // $validated = $request->validate([
      //   'title' => ['required', 'min:4'],
      //   'body' => ['required'],
      // ],[
      //   'title.required' => 'El campo :attribute es requerido'
      // ]);

      //Buscar el post en la BD, aunque ya no es necesario por que le indicamos la larvel por el modelo que busque el registro correspondiente
      //$post = Post::find($post);
      
      //Se editan los cmpos y se guardan
      //Ya no se utilizan la variables por que se sustituye con eloquent
      //$post->title = $request->input('title');
      //$post->body = $request->input('body');
      //$post->save();
      

      //Se emplea eloquent para actualizar con Eloquent
      //$post->update($validated);
      $post->update($request->validated());


      //session()->flash('status', 'Post updated!');
      //session()->flash('status', 'Post updated!');

      //Redireccionando con el helper
      //return to_route('posts.show', $post);

      //Se optimiza el mensaje flash
      return to_route('posts.show', $post)->with('status', 'Post updated!');

    }

    public function destroy(Post $post){
        //return $post;
        $post->delete();

        return to_route('posts.index')->with('status', 'Post deleted');

    }


}
