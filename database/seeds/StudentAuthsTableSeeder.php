<?php

use Illuminate\Database\Seeder;

class StudentAuthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\StudentAuth::create([
            'idnumber' => 'UR/3256/12',
            'password' =>bcrypt('password')
        ]);
        App\StudentAuth::create([
            'idnumber' => 'UR/5656/12',
            'password' =>bcrypt('password')
        ]);
        App\StudentAuth::create([
            'idnumber' => 'UR/2256/12',
            'password' =>bcrypt('password')
        ]);
    }
}
