<?php

use Illuminate\Database\Seeder;

class AccountingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Accounting::create([
            'dept_name' => 'accounting',
            'course_code' => 'Math1011',
            'course_title' => 'Mathematics for Natural Science',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 2,
            'instructor_name' => 'worku@gmail.com',
            'year' => 1,
            'semester' => 'I',
        ]);
        App\Accounting::create([
            'dept_name' => 'accounting',
            'course_code' => 'FLEn1011',
            'course_title' => 'Communicative English Language Skills 1',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 2,
            'instructor_name' => 'worku@gmail.com',
            'year' => 1,
            'semester' => 'I',
        ]);
        App\Accounting::create([
            'dept_name' => 'accounting',
            'course_code' => 'Phys1011',
            'course_title' => 'General Physics',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 1,
            'tutor_hrs' => 2,
            'year' => 1,
            'semester' => 'I',
        ]);
        App\Accounting::create([
            'dept_name' => 'accounting',
            'course_code' => 'Psch1011',
            'course_title' => 'General Psychology',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 1,
            'semester' => 'I',
        ]);
        App\Accounting::create([
            'dept_name' => 'accounting',
            'course_code' => 'LoCT1011',
            'course_title' => 'Critical Thinking',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 1,
            'semester' => 'I',
        ]);
    }
}
