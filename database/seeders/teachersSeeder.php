<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class teachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([

            
            'name' => 'jeny',
            'email' => 'jeny@gmail.com',
            'created_at' =>now(),
            'updated_at' => now()
            
        ],

        [
            'name' => 'utsavi',
            'email' => 'utsavi@gmail.com',
            'created_at' =>now(),
            'updated_at' => now()   
        ],

        [
            'name' => 'dhruvi',
            'email' => 'dhruvi@gmail.com',
            'created_at' =>now(),
            'updated_at' => now()   
        ],

        
    );
    }
}
