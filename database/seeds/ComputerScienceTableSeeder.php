<?php

use Illuminate\Database\Seeder;

class ComputerScienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
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
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
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
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
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
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
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
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
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
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'SpSc1011',
            'course_title' => 'Physical Fitness',
            'ects' => 0,
            'credit_hrs' => 0,
            'lecture_hrs' => 2,
            'lab_hrs' => 2,
            'tutor_hrs' => 2,
            'year' => 1,
            'semester' => 'I',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'GeES1011',
            'course_title' => 'Geography of Ethiopia and the Horn',
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
