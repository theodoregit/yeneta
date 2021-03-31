<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('yeneta.instructor.students');
    }
    public function fillgrades(){
        return view('yeneta.instructor.grades');
    }
    public function announcement(){
        return view('yeneta.instructor.announcement');
    }
}
