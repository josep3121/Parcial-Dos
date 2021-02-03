<?php

namespace Database\Seeders;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;
use Illuminate\support\Str;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'ISBN' => '1025',
                'titulo' => 'La luz',
                'precio' => '5000',
                'stock' => '5',
                'editorial' => '1',
            ],
            [
                'ISBN' => '0432',
                'titulo' => 'Especialidad',
                'precio' => '22000',
                'stock' => '15',
                'editorial' => '3',
            ],
            [
                'ISBN' => '4925',
                'titulo' => 'Jesus Vive',
                'precio' => '15000',
                'stock' => '0',
                'editorial' => '2',
            ],
            [
                'ISBN' => '7711',
                'titulo' => 'Troya',
                'precio' => '35000',
                'stock' => '22',
                'editorial' => '4',
            ],    
            [
                'ISBN' => '8825',
                'titulo' => 'La supremacia',
                'precio' => '45000',
                'stock' => '8',
                'editorial' => '5',
            ],    
        ];
        DB::table('libros')->insert($data);
    }
}
