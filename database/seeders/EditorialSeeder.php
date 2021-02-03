<?php

namespace Database\Seeders;


use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;
use Illuminate\support\Str;
use Illuminate\Database\Seeder;

class EditorialSeeder extends Seeder
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
                'nombre' => 'Norma',
                'direccion' => 'AvDorado 90-10',
                'ciudad' => 'Bogota',
                'telefono' => '426652',
            ],
            [
                'nombre' => 'Mc Graw Hill',
                'direccion' => 'Carrera 85k #46-A',
                'ciudad' => 'Bogota',
                'telefono' => '3102266',
            ],
            [
                'nombre' => 'Alfaomega Colombiana',
                'direccion' => 'CLL 62 #46-20',
                'ciudad' => 'Bogota',
                'telefono' => '485210',
            ],
            [
                'nombre' => 'Los Tres editores S.A.S',
                'direccion' => 'CLL 32 #25-6',
                'ciudad' => 'Cali',
                'telefono' => '125520',
            ],    
            [
                'nombre' => 'La Santillana',
                'direccion' => 'Cra 82 #11-24',
                'ciudad' => 'Medellin',
                'telefono' => '700022',
            ],    
        ];
        DB::table('editorial')->insert($data);
    }
}
