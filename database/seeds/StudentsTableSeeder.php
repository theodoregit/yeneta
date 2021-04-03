<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\student::create([
            'idnumber' => 'UR/3256/12',
            'fullname' => 'ayalew ketema',
            'gender' => 'male',
            'dept_name' => 'computer science',
            'section' => '1',
            'year' => 1,
            'semester' => 'I'
        ]);
        App\student::create([
            'idnumber' => 'UR/5656/12',
            'fullname' => 'chane gedefaw',
            'gender' => 'male',
            'dept_name' => 'accounting',
            'section' => '2',
            'year' => 1,
            'semester' => 'I'
        ]);
    }
}
