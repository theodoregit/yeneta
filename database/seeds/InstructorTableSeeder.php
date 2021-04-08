<?php

use Illuminate\Database\Seeder;

class InstructorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Instructor::create([
            'fullname' => 'workneh tesema adefris',
            'employee_id' => 'ins/023/10',
            'department' => 'management',
            'course' => 'Economics',
            'phone_number' => '+251-945259636',
            'email' => 'worku@gmail.com',
        ]);
        App\Instructor::create([
            'fullname' => 'workneh tesema adefris',
            'employee_id' => 'ins/023/10',
            'department' => 'management',
            'course' => 'Anthropology',
            'phone_number' => '+251-945259636',
            'email' => 'worku@gmail.com',
        ]);
        App\Instructor::create([
            'fullname' => 'alemu chanie abtie',
            'employee_id' => 'ins/024/10',
            'department' => 'computer science',
            'course' => 'Mathematics for Natural Science',
            'phone_number' => '+251-945259636',
            'email' => 'alex@gmail.com',
        ]);
        App\Instructor::create([
            'fullname' => 'gerem bayitew mitku',
            'employee_id' => 'ins/025/10',
            'department' => 'accounting',
            'course' => '',
            'phone_number' => '+251-945259636',
            'email' => 'gere@gmail.com',
        ]);
    }
}
