<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado; 
use Carbon\Carbon;
class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          //
          Empleado::insert([

            'created_at' => Carbon::now(),

            'id' => 1,
            
            
            
            'nombre' => 'Irvin',
            
            
            
            'edad'=> 26,
            
            
            
            'sueldo_base'=> '1200',
            
            
            
            'direccion'=> 'San Salvador',
            
            
            
            'foto'=> 'foto.jpg',
            
            
            
            'id_administrador'=> 1,
            
            
            
            'id_sucursal'=> 1
            
            
            
            ],
            
            [
            
           'created_at' => Carbon::now(),
            
            'id' => 2,
            
            
            
            'nombre' => 'Claudia',
            
            
            
            'edad'=> 27,
            
            
            
            'sueldo_base'=> '1200',
            
            
            
            'direccion'=> 'Santa Tecla',
            
            
            
            'foto'=> 'foto.jpg',
            
            
            
            'id_administrador'=> 2,
            
            
            
            'id_sucursal'=> 2
            
            
            
            ],
            
            [
            
            'created_at' => Carbon::now(),
            
            'id' => 3,
            
            
            
            'nombre' => 'Manuel',
            
            
            
            'edad'=> 28,
            
            
            
            'sueldo_base'=> '900',
            
            
            
            'direccion'=> 'San Juan Nonualco',
            
            
            
            'foto'=> 'foto.jpg',
            
            
            
            'id_administrador'=> 3,
            
            
            
            'id_sucursal'=> 3
            
            
            
            ],
            
            [
            
            'created_at' => Carbon::now(),
            
            'id' => 4,
            
            
            
            'nombre' => 'Carlos',
            
            
            
            'edad'=> 30,
            
            
            
            'sueldo_base'=> '600',
            
            
            
            'direccion'=> 'San Vicente',
            
            
            
            'foto'=> 'foto.jpg',
            
            
            
            'id_administrador'=> 4,
            
            
            
            'id_sucursal'=> 4
            
            
            
            ]);
    }
}
