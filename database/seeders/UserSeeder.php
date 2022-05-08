<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert([


            'created_at' => Carbon::now(),
            'id' => 1,
            
            'email' =>'testi1@yopmail.com',
            
            
            'name'=> 'irvinParedes',
            
            
            
            'Password' => bcrypt('12345678')
            
            
            
            ],
            
            [
            
                'created_at' => Carbon::now(),
            
            'id' => 2,
            
            'email' =>'testi2@yopmail.com',
            
            
            
            
            'name'=> 'Clauzdyz',
            
            
            
            'Password' => bcrypt('12345678')
            
            
            
            ],
            
            [
            
                'created_at' => Carbon::now(),
            
            'id' => 3,
            
            
            'email' =>'testi3@yopmail.com',
            
            
            
            'name'=> 'Manu',
            
            
            
            'Password' => bcrypt('12345678'),
            
            
            
            ],
            
            [
            
                'created_at' => Carbon::now(),
            
            'id' => 4,
            
            
            
            'email' =>'testi4@yopmail.com',
            
            'name'=> 'Carlitos',
            
            
            
            'Password' => bcrypt('12345678'),
            
            
            
            ]
            
            
            
            );
    }
}
