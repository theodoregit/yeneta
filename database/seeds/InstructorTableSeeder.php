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
            'fullname' => 'belay chanie abtie',
            'employee_id' => 'ins/025/10',
            'department' => 'computer science',
            'course' => 'Communicative English Language Skills I',
            'phone_number' => '+251-945259636',
            'email' => 'bele@gmail.com',
        ]);
        App\Instructor::create([
            'fullname' => 'kelemu chanie abtie',
            'employee_id' => 'ins/026/10',
            'department' => 'computer science',
            'course' => 'General Physics',
            'phone_number' => '+251-945259636',
            'email' => 'kel@gmail.com',
        ]);
        App\Instructor::create([
            'fullname' => 'gelmo chanie abtie',
            'employee_id' => 'ins/027/10',
            'department' => 'computer science',
            'course' => 'General Psychology',
            'phone_number' => '+251-945259636',
            'email' => 'gel@gmail.com',
        ]);
        App\Instructor::create([
            'fullname' => 'aster chanie abtie',
            'employee_id' => 'ins/028/10',
            'department' => 'computer science',
            'course' => 'Critical Thinking',
            'phone_number' => '+251-945259636',
            'email' => 'astu@gmail.com',
        ]);
        App\Instructor::create([
            'fullname' => 'zimbelachew chanie abtie',
            'employee_id' => 'ins/029/10',
            'department' => 'computer science',
            'course' => 'Physical Fitness',
            'phone_number' => '+251-945259636',
            'email' => 'zim@gmail.com',
        ]);
        App\Instructor::create([
            'fullname' => 'alemu chanie abtie',
            'employee_id' => 'ins/030/10',
            'department' => 'computer science',
            'course' => 'Mathematics for Natural Science',
            'phone_number' => '+251-945259636',
            'email' => 'alex@gmail.com',
        ]);
        App\Instructor::create([
            'fullname' => 'girma chanie abtie',
            'employee_id' => 'ins/031/10',
            'department' => 'computer science',
            'course' => 'Geography of Ethiopia and the Horn',
            'phone_number' => '+251-945259636',
            'email' => 'girma@gmail.com',
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
