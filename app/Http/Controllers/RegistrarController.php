<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;
use App\Student;

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
