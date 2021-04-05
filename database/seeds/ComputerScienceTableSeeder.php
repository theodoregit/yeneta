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
            'course_title' => 'Communicative English Language Skills I',
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

        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'FLEn1012',
            'course_title' => 'Communicative English Language Skills II',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 1,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'Anth1012',
            'course_title' => 'Social Anthropology',
            'ects' => 3,
            'credit_hrs' => 2,
            'lecture_hrs' => 2,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 1,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'Math1041',
            'course_title' => 'Applied Mathematics I',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 1,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'Hist. 1012',
            'course_title' => 'History Of Ethiopia and Horn',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 1,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'EmTe1012',
            'course_title' => 'Introduction to Emerging Technologies',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 1,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'MCiE1012',
            'course_title' => 'Moral and Civic Eduction',
            'ects' => 3,
            'credit_hrs' => 2,
            'lecture_hrs' => 2,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 1,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc1012',
            'course_title' => 'Computer Programming',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 1,
            'year' => 1,
            'semester' => 'II',
        ]);
        
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'EENG2042',
            'course_title' => 'Digital Logic Design',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 0,
            'year' => 2,
            'semester' => 'I',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc2015',
            'course_title' => 'Fundamentals of Programming in C++',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 1,
            'year' => 2,
            'semester' => 'I',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'MATH2012',
            'course_title' => 'Linear Algebra',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 1,
            'year' => 2,
            'semester' => 'I',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc2015',
            'course_title' => 'Fundamentals of Database Systems',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 2,
            'year' => 2,
            'semester' => 'I',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'ECON2103',
            'course_title' => 'Economics',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 2,
            'semester' => 'I',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'STATA2015',
            'course_title' => 'Probability and Statistics',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 1,
            'year' => 2,
            'semester' => 'I',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'SINE2011',
            'course_title' => 'Inclusiveness',
            'ects' => 4,
            'credit_hrs' => 2,
            'lecture_hrs' => 2,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 2,
            'semester' => 'I',
        ]);

        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc2032',
            'course_title' => 'Data Communication and Computer Networks',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 2,
            'year' => 2,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc2042',
            'course_title' => 'Advanced Database Systems',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 2,
            'year' => 2,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc2052',
            'course_title' => 'Object-Oriented Programming',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 2,
            'year' => 2,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'MATH2051',
            'course_title' => 'Discrete Mathematics and Combinatorics',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 2,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc2091',
            'course_title' => 'Data Structure and Algoritms',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 2,
            'year' => 2,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc2022',
            'course_title' => 'Computer organization and Architecture',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 0,
            'lab_hrs' => 0,
            'tutor_hrs' => 1,
            'year' => 2,
            'semester' => 'II',
        ]);

        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc3023',
            'course_title' => 'Operating Systems',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 2,
            'year' => 3,
            'semester' => 'I',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'MATH3081',
            'course_title' => 'Numerical Analysis',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 0,
            'year' => 3,
            'semester' => 'I',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc3053',
            'course_title' => 'Advanced Java Programming',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 2,
            'year' => 3,
            'semester' => 'I',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc3061',
            'course_title' => 'Software Engineering',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 2,
            'year' => 3,
            'semester' => 'I',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc3101',
            'course_title' => 'Automata and Complexity Theory',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 2,
            'year' => 3,
            'semester' => 'I',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc3024',
            'course_title' => 'Microprocessor and Assembly Language Programming',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 1,
            'year' => 3,
            'semester' => 'I',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'IRGI3021',
            'course_title' => 'Global Trends',
            'ects' => 4,
            'credit_hrs' => 2,
            'lecture_hrs' => 2,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 3,
            'semester' => 'I',
        ]);

        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc3034',
            'course_title' => 'Wireless Communication and Mobile Computing',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 1,
            'year' => 3,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc3082',
            'course_title' => 'Web Programming',
            'ects' => 7,
            'credit_hrs' => 4,
            'lecture_hrs' => 3,
            'lab_hrs' => 3,
            'tutor_hrs' => 1,
            'year' => 3,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc3034',
            'course_title' => 'Design and Analysis of Algorithms',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 3,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 3,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc3102',
            'course_title' => 'Compiler Design',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 2,
            'year' => 3,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc3072',
            'course_title' => 'Computer Graphics',
            'ects' => 5,
            'credit_hrs' => 3,
            'lecture_hrs' => 2,
            'lab_hrs' => 3,
            'tutor_hrs' => 1,
            'year' => 3,
            'semester' => 'II',
        ]);
        App\Computer_Science::create([
            'dept_name' => 'computer_science',
            'course_code' => 'CoSc3122',
            'course_title' => 'Industrial Practice',
            'ects' => 3,
            'credit_hrs' => 2,
            'lecture_hrs' => 0,
            'lab_hrs' => 0,
            'tutor_hrs' => 0,
            'year' => 3,
            'semester' => 'II',
        ]);
        
    }
}
