<?php

use Illuminate\Database\Seeder;

class DeanAuthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\DeanAuth::create([
            'name' => 'tedy',
            'email' => 'tedy@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
