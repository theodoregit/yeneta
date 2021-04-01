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
            'idnumber' => 'UR/7855/12',
            'fullname' => 'abebe',
            'gender' => 'male',
            'dept_name' => 'computer science',
            'section' => '1',
            'year' => 1,
            'semester' => 'I'
        ]);
    }
}
