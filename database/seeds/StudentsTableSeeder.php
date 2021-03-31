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
            'student_id' => 'atr/7855/12',
            'firstname' => 'abebe',
            'middlename' => 'alemu',
            'lastname' => 'tesema',
            'gender' => 'male',
            'dept_name' => 'computer science',
            'section' => 'one',
            'sgpa' => 3.33,
            'cgpa' =>3.33 ,
            'year' => 1,
            'semester' => 'one'
        ]);
    }
}
