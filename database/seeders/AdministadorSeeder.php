<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Administrador;
use Carbon\Carbon;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Administrador::insert([

            'created_at' => Carbon::now(),

            'id' => 1,
            
            
            
            'dui' => '12345678',
            
            
            
            'direccion'=> 'San Miguel',
            
            
            
            'genero'=> 'Masculino',
            
            
            
            'id_usuario'=> 1
            
            
            
            ],
            
            [
            
            'created_at' => Carbon::now(),
            
            'id' => 2,
            
            
            
            'dui' => '12345678',
            
            
            
            'direccion'=> 'San Salvador',
            
            
            
            'genero'=> 'Femenino',
            
            
            
            'id_usuario'=> 2
            
            
            
            ],
            
            [
            
           'created_at' => Carbon::now(),
            
            'id' => 3,
            
            
            
            'dui' => '12345678',
            
            
            
            'direccion'=> 'Santa Ana',
            
            
            
            'genero'=> 'Masculino',
            
            
            
            'id_usuario'=> 3
            
            
            
            ],
            
            [
            
            'created_at' => Carbon::now(),
            
            'id' => 4,
            
            
            
            'dui' => '12345678',
            
            
            
            'direccion'=> 'San Salvador',
            
            
            
            'genero'=> 'Masculino',
            
            
            
            'id_usuario'=> 4
            
            
            
            ]
            
            
            
            );
    }
}
