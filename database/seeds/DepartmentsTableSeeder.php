<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Departement::create([
            'dept_name' => 'computer science',
        ]);
        App\Departement::create([
            'dept_name' => 'management',
        ]);
        App\Departement::create([
            'dept_name' => 'accounting',
        ]);
    }
}
