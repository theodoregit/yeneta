<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Grade::create([
            'stud_id' => 'UR/3256/12',
            'course_code' =>'Math1011',
            'assessment' => 25,
            'mid_exam' => 22,
            'final_exam' => 35,
            'total' => 82,
            'grade_type' => 'A-',
        ]);
        App\Grade::create([
            'stud_id' => 'UR/3256/12',
            'course_code' =>'FLEn1011',
            'assessment' => 25,
            'mid_exam' => 22,
            'final_exam' => 35,
            'total' => 82,
            'grade_type' => 'A-',
        ]);
        App\Grade::create([
            'stud_id' => 'UR/3256/12',
            'course_code' =>'Phys1011',
            'assessment' => 25,
            'mid_exam' => 22,
            'final_exam' => 35,
            'total' => 82,
            'grade_type' => 'A-',
        ]);
        App\Grade::create([
            'stud_id' => 'UR/3256/12',
            'course_code' =>'Psch1011',
            'assessment' => 25,
            'mid_exam' => 22,
            'final_exam' => 35,
            'total' => 82,
            'grade_type' => 'A-',
        ]);
        App\Grade::create([
            'stud_id' => 'UR/3256/12',
            'course_code' =>'LoCT1011',
            'assessment' => 25,
            'mid_exam' => 22,
            'final_exam' => 35,
            'total' => 82,
            'grade_type' => 'A-',
        ]);
        App\Grade::create([
            'stud_id' => 'UR/3256/12',
            'course_code' =>'SpSc1011',
            'assessment' => 25,
            'mid_exam' => 22,
            'final_exam' => 35,
            'total' => 82,
            'grade_type' => 'A-',
        ]);
        App\Grade::create([
            'stud_id' => 'UR/3256/12',
            'course_code' =>'GeES1011',
            'assessment' => 25,
            'mid_exam' => 22,
            'final_exam' => 35,
            'total' => 82,
            'grade_type' => 'A-',
        ]);
    }
}
