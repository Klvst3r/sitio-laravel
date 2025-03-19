<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;



class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                "id" => 1,
                "title" => "Primer Post",
                "body" => "Cuerpo Primer Post",
                "created_at" => "2025-03-11T09:17:59.000000Z",
                "updated_at" => "2025-03-11T09:17:59.000000Z",
              ],
              [
                "id" => 2,
                "title" => "Segundo Post",
                "body" => "Cuerpo de Segundo Post",
                "created_at" => "2025-03-13T15:09:57.000000Z",
                "updated_at" => "2025-03-13T15:09:57.000000Z",
              ],
              [
                "id" => 3,
                "title" => "Titulo Tercer Post",
                "body" => "Body tercer post",
                "created_at" => "2025-03-19T17:57:18.000000Z",
                "updated_at" => "2025-03-19T17:57:18.000000Z",
              ],
              [
                "id" => 4,
                "title" => "CTitulo Cuarto post",
                "body" => "Body Cuarto Post",
                "created_at" => "2025-03-19T18:03:32.000000Z",
                "updated_at" => "2025-03-19T18:03:32.000000Z",
              ],
          
        ]);

    }
}
