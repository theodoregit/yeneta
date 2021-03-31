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
    }
}
