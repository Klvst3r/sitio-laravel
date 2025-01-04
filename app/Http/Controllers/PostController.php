<?php

namespace App\Http\Controllers;

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
        $posts = DB::table('posts')->get();

        return view('blog', ['posts' => $posts]);

    }
}
