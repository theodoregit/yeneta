<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;
use App\Student;
use App\Custom\CreateTables;
use App\StudentAuth;
use App\Computer_Science;
use App\Accounting;
use App\Management;
use DB;

class RegistrarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:registrar');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        
        return view('yeneta.registrar.home')->with('todos',ToDo::all());
    }

    public function registerStudent(){
        return view('yeneta.registrar.register')->with('students', student::all());
    }
    public function registerStudentStore(Request $request){

        $this->validate($request, [
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'idnumber' => 'required',
            'department' => 'required',
            'section' => 'required',
            'gender' => 'required',
            'year' => 'required',
            'semester' => 'required',
        ]);
        
        $student = new Student;
        $student->idnumber = $request->idnumber;
        $student->fullname = $request->firstname . ' ' . $request->middlename . ' ' . $request->lastname;
        $student->gender = $request->gender;
        $student->dept_name = $request->department;
        $student->section = $request->section;
        $student->year = $request->year;
        $student->semester = $request->semester;
        $student->save();

        // echo $student->accountings()->attach($request->dept_name);
        // // dd($request->all());

        $std = new CreateTables();
        $std->create_table(preg_replace("/[^a-zA-Z0-9\s]/", "", $student->idnumber));
        
        //let's create a student's account
        $student_account = new StudentAuth;
        $student_account->idnumber = $request->idnumber;
        $student_account->password = bcrypt('password');
        $student_account->save();

        //fill student's private table with ...
        $std = preg_replace("/[^a-zA-Z0-9\s]/", "", $student->idnumber);
        switch ($request->department) {
            case 'computer science':
                $comp = Computer_Science::where('year', '=', $request->year)
                                        ->where('semester', '=', $request->semester)
                                        ->get(['course_title', 'credit_hrs']);
                //loop through the number of courses and insert into the the student's private table
                for ($i=0; $i < count($comp->all()); $i++) { 
                    $values = array('course_name' => $comp->pluck('course_title')[$i],
                                    'credit_hrs' => $comp->pluck('credit_hrs')[$i],
                                    'year'=> $request->year,
                                    'semester' => $request->semester,
                                    'assessment' => 0.0,
                                    'mid_exam' => 0.0,
                                    'final_exam' => 0.0,
                                    'total' => 0.0,
                                    'grade_type' => 'NG');
                    DB::table($std)->insert($values);
                }
                // dd($values);
                break;  
            case 'accounting':
                $comp = Accounting::where('year', '=', $request->year)
                                        ->where('semester', '=', $request->semester)
                                        ->get(['course_title', 'credit_hrs']);
                //loop through the number of courses and insert into the the student's private table
                for ($i=0; $i < count($comp->all()); $i++) { 
                    $values = array('course_name' => $comp->pluck('course_title')[$i],
                                    'credit_hrs' => $comp->pluck('credit_hrs')[$i],
                                    'year'=> $request->year,
                                    'semester' => $request->semester,
                                    'assessment' => 0.0,
                                    'mid_exam' => 0.0,
                                    'final_exam' => 0.0,
                                    'total' => 0.0,
                                    'grade_type' => 'NG');
                    DB::table($std)->insert($values);
                }
                // dd($comp->all());
                break;
            case 'management':
                $comp = Management::where('year', '=', $request->year)
                                        ->where('semester', '=', $request->semester)
                                        ->get(['course_title', 'credit_hrs']);
                //loop through the number of courses and insert into the the student's private table
                for ($i=0; $i < count($comp->all()); $i++) { 
                    $values = array('course_name' => $comp->pluck('course_title')[$i],
                                    'credit_hrs' => $comp->pluck('credit_hrs')[$i],
                                    'year'=> $request->year,
                                    'semester' => $request->semester,
                                    'assessment' => 0.0,
                                    'mid_exam' => 0.0,
                                    'final_exam' => 0.0,
                                    'total' => 0.0,
                                    'grade_type' => 'NG');
                    DB::table($std)->insert($values);
                }
                break;
            default:
                //
                break;
        }
        
        return redirect()->back();
    }
    public function listStudents(){
        $students = Student::all();
        return view('yeneta.registrar.students')
                    ->with('students', $students);
    }
    public function viewGrades(){
        return view('yeneta.registrar.grades');
    }
    public function payment(){
        return view('yeneta.registrar.payment')->with('students', Student::all());
    }
    public function announcement(){
        return view('yeneta.registrar.announcement');
    }

    
    
}
