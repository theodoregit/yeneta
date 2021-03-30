<?php

use Illuminate\Database\Seeder;

class RegistrarAuthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\RegistrarAuth::create([
            'name' => 'natnael',
            'email' => ' natnael@gmail.com',
            'password' =>bcrypt('password')
        ]);
    }
}
