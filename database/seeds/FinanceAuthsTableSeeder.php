<?php

use Illuminate\Database\Seeder;

class FinanceAuthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\FinanceAuth::create([
            'name' => 'mark',
            'email' => ' mark@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
