<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Primer Post',
                'body' => 'Cuerpo Primer Post',
                'created_at' => '2025-03-11 09:17:59',
                'updated_at' => '2025-03-11 09:17:59',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Segundo Post',
                'body' => 'Cuerpo de Segundo Post',
                'created_at' => '2025-03-13 15:09:57',
                'updated_at' => '2025-03-13 15:09:57',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Titulo Tercer Post',
                'body' => 'Body tercer post',
                'created_at' => '2025-03-19 17:57:18',
                'updated_at' => '2025-03-19 17:57:18',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'CTitulo Cuarto post',
                'body' => 'Body Cuarto Post',
                'created_at' => '2025-03-19 18:03:32',
                'updated_at' => '2025-03-19 18:03:32',
            ),
        ));
        
        
    }
}