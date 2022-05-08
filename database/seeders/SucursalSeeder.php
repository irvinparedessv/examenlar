<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sucursal;
use Carbon\Carbon;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Sucursal::insert([


            'created_at' => Carbon::now(),
            'id' => 1,
            
            
            
            'nombre' => 'Curacao',
            
            
            
            'direccion'=> 'San Salvador'
            
            
            
            ],
            
            
            
            [
            
           'created_at' => Carbon::now(),
            
            'id' => 2,
            
            
            
            'nombre' => 'Prisma',
            
            
            
            'direccion'=> 'Santa Ana'
            
            
            
            ],
            
            [
            
            'created_at' => Carbon::now(),
            
            'id' => 3,
            
            
            
            'nombre' => 'Eleven',
            
            
            
            'direccion'=> 'San Miguel'
            
            
            
            ],
            
            [
            
            'created_at' => Carbon::now(),
            
            'id' => 4,
            
            
            
            'nombre' => 'Free',
            
            
            
            'direccion'=> 'La Paz'
            
            
            
            ]
            
            
            
            );
    }
}
