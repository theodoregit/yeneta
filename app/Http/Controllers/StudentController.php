<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\Grade;
use App\Computer_Science;
use App\Accounting;
use App\Management;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('yeneta.student.home');
    }
    public function grades(){
        $user = Auth::user()->idnumber;
        $student = Student::where('idnumber', '=', $user)->get();
        $grades = preg_replace("/[^a-zA-Z0-9\s]/", "", Grade::where('stud_id', '=', $user)->pluck('assessment'));
        $fullname = preg_replace("/[^a-zA-Z0-9\s]/", "", $student->pluck('fullname'));
        $year = preg_replace("/[^a-zA-Z0-9\s]/", "", $student->pluck('year'));
        $semester = preg_replace("/[^a-zA-Z0-9\s]/", "", $student->pluck('semester'));
        $courses = Grade::where('stud_id', '=', $user)->get();
        $dept_name = preg_replace("/[^a-zA-Z0-9\s]/", "", $student->pluck('dept_name'));
        switch ($dept_name) {
            case 'computer science':
                $dept = Computer_Science::all();
                break;
            case 'accounting':
                $dept = Accounting::all();
                break;
            case 'management':
                $dept = Management::all();
                break;
            default:
                //
                break;
        }
        // echo $a->count();
        return view('yeneta.student.gradeReport')
                    ->with('fullname', $fullname)
                    ->with('year', $year)
                    ->with('semester', $semester)
                    ->with('courses', $courses)
                    ->with('dept', $dept);
    }
    public function announcements(){
        return view('yeneta.student.readAnnouncements');
    }
}
