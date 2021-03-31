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
    public function registerStudentStore($request){

        $this->validate($request, [
            
        ]);
        
        $student = new Student;
        $student -> firstname = $request->firstname;
        $student -> middlename = $request->middlename;
        $student -> lastname = $request->lasttname;
        $student -> gender = $request->gender;
        $student -> dept_name = $request->dept_name;
        $student -> section = $request->section;
        $student -> year = $request->year;
        $student -> semester = $request->semester;
        $student->save();

    return redirect()->back();
    }
    public function listStudents(){
        return view('yeneta.registrar.students');
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
