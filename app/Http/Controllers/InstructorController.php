<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Custom\HelperClass;
use DB;
use App\Instructor;
use Auth;
use stdClass;

class InstructorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:instructor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('yeneta.instructor.home');
    }
    public function viewCourses(){
        return view('yeneta.instructor.courses');
    }
    public function viewStudents(){
        $user = Auth::user()->email;
        $department = Instructor::where('email', '=', $user)->pluck('department');        
        $department = preg_replace("/[^a-zA-Z0-9\s]/", "", $department[0]);
        
        $courses = Instructor::where('email', '=', $user)->get();
        foreach($courses as $course){
            $course = $course->course;
        }
        $q = '"';
        
        $students = Student::where('dept_name', '=', $department)->get();
        $c = count($students);
        for ($i=0; $i < $c; $i++) { 
            $student_t = DB::select('SELECT isPassed FROM ' . preg_replace("/[^a-zA-Z0-9\s]/", "", $students[$i]->idnumber) . ' WHERE course_name = ' . $q . $course . $q);
            if($student_t[0]->isPassed == 1){
                unset($students[$i]);                
            }
            
        }
        
        

        return view('yeneta.instructor.students')
                    ->with('students', $students)
                    ->with('course', $course)
                    ->with('courses', $courses);
    }
    public function teachingCourses(){
        return view('yeneta.instructor.teaching_courses');
    }
    public function fillgrades(){
        $loop = ['1', '2', '3', '4'];
        return view('yeneta.instructor.grades')
                    ->with('loops', $loop);
    }
    public function announcement(){
        return view('yeneta.instructor.announcement');
    }
    public function submitGrades(Request $request, $idnumber){
        $course_name = $request->course;
        $assessment = $request->assessment;
        $mid_exam = $request->mid;
        $final_exam = $request->final;
        $total = $assessment + $mid_exam + $final_exam;
        $grade_type = 'NG';
        if ($total >= 90) {
            $grade_type = 'A+';
        }
        else if ($total >= 85) {
            $grade_type = 'A';
        }
        else if ($total >= 80) {
            $grade_type = 'A-';
        }
        else if ($total >= 75) {
            $grade_type = 'B+';
        }
        else if ($total >= 70) {
            $grade_type = 'B';
        }else if ($total >= 65) {
            $grade_type = 'B-';
        }
        else if ($total >= 60) {
            $grade_type = 'C+';
        }
        else if ($total >= 50) {
            $grade_type = 'C';
        }
        else if ($total >= 45) {
            $grade_type = 'C-';
        }
        else if ($total >= 40) {
            $grade_type = 'D';
        }
        else if ($total < 40) {
            $grade_type = 'F';
        }
        $values = array('assessment' => $assessment, 
                        'mid_exam' => $mid_exam, 
                        'final_exam' => $final_exam, 
                        'total' => $total, 
                        'grade_type' => $grade_type);
        // dd($values);
        $user = Auth::user()->email;
        $course = Instructor::where('email', '=', $user)->pluck('course');
        $course = preg_replace("/[^a-zA-Z0-9\s]/", "", $course);
        
        // dd($course);
        DB::table($idnumber)->where('course_name', $course_name)->update($values);
        
        return redirect()->back();
    }
}
