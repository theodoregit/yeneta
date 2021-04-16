<?php

use Illuminate\Database\Seeder;

class InstructorAuthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\InstructorAuth::create([
            'name' => 'worku',
            'email' => 'worku@gmail.com',
            'password' => bcrypt('password')
        ]);
        App\InstructorAuth::create([
            'name' => 'alemu',
            'email' => 'alex@gmail.com',
            'password' => bcrypt('password')
        ]);
        App\InstructorAuth::create([
            'name' => 'belay',
            'email' => 'bele@gmail.com',
            'password' => bcrypt('password')
        ]);
        App\InstructorAuth::create([
            'name' => 'kelemu',
            'email' => 'kel@gmail.com',
            'password' => bcrypt('password')
        ]);
        App\InstructorAuth::create([
            'name' => 'gelmo',
            'email' => 'gel@gmail.com',
            'password' => bcrypt('password')
        ]);
        App\InstructorAuth::create([
            'name' => 'aster',
            'email' => 'astu@gmail.com',
            'password' => bcrypt('password')
        ]);
        App\InstructorAuth::create([
            'name' => 'zimbelachew',
            'email' => 'zim@gmail.com',
            'password' => bcrypt('password')
        ]);
        App\InstructorAuth::create([
            'name' => 'girma',
            'email' => 'girma@gmail.com',
            'password' => bcrypt('password')
        ]);
        App\InstructorAuth::create([
            'name' => 'gerem',
            'email' => 'gere@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
