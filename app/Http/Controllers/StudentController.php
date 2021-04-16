<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\Grade;
use App\Computer_Science;
use App\Accounting;
use App\Management;
use DB;
use App\Custom\HelperClass;

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
        
        
        $table_1_I = DB::table(preg_replace("/[^a-zA-Z0-9\s]/", "", $student->pluck('idnumber')))
                                    ->selectRaw('*')
                                    ->where('year', '=', 1)
                                    ->where('semester', '=', 'I')
                                    ->get();
        // dd($table_1_I);
        //calculating gpas
        //year 1 semester I
        $gpa11 = new HelperClass();
        $credit_hrs_counter11 = 1;
        $value11 = 0;
        for ($i=0; $i < count($table_1_I); $i++) { 
            $value11 += $gpa11->gpa_calculator($table_1_I->pluck('credit_hrs')[$i], $table_1_I->pluck('grade_type')[$i]);
            $credit_hrs_counter11 += $table_1_I->pluck('credit_hrs')[$i];
        }
        if($credit_hrs_counter11 > 1){
            $credit_hrs_counter11 -= 1;
        }
        $gpa_1_I = round(($value11 / $credit_hrs_counter11), 2);
        //let's insert this gpa to the students table
        $std_gpa11 = Student::where('idnumber', '=', $user)->first();
        $std_gpa11->s11gpa = $gpa_1_I;
        $std_gpa11->cgpa;
        $std_gpa11->save();


        //year 1 semester II
        $table_1_II = DB::table(preg_replace("/[^a-zA-Z0-9\s]/", "", $student->pluck('idnumber')))
                                    ->selectRaw('*')
                                    ->where('year', '=', 1)
                                    ->where('semester', '=', 'II')
                                    ->get();
        
        $gpa12 = new HelperClass();
        $credit_hrs_counter12 = 1;
        $value12 = 0;        
        for ($i=0; $i < count($table_1_II); $i++) { 
            $value12 += $gpa12->gpa_calculator($table_1_II->pluck('credit_hrs')[$i], $table_1_II->pluck('grade_type')[$i]);
            $credit_hrs_counter12 += $table_1_II->pluck('credit_hrs')[$i];
            // echo $value;
        }
        if($credit_hrs_counter12 > 1){
            $credit_hrs_counter12 -= 1;
        }
        $gpa_1_II = round(($value12 / $credit_hrs_counter12), 2);
        

        //year 2 semester I
        $table_2_I = DB::table(preg_replace("/[^a-zA-Z0-9\s]/", "", $student->pluck('idnumber')))
                                    ->selectRaw('*')
                                    ->where('year', '=', 2)
                                    ->where('semester', '=', 'I')
                                    ->get();
        $gpa21 = new HelperClass();
        $credit_hrs_counter21 = 1;
        $value21 = 0;
        for ($i=0; $i < count($table_2_I); $i++) { 
            $value21 += $gpa21->gpa_calculator($table_2_I->pluck('credit_hrs')[$i], $table_2_I->pluck('grade_type')[$i]);
            $credit_hrs_counter21 += $table_2_I->pluck('credit_hrs')[$i];
            // echo $value;
        }
        if($credit_hrs_counter21 > 1){
            $credit_hrs_counter21 -= 1;
        }
        $gpa_2_I = round(($value21 / $credit_hrs_counter21), 2);
        
        
        //year 2 semester II
        $table_2_II = DB::table(preg_replace("/[^a-zA-Z0-9\s]/", "", $student->pluck('idnumber')))
                                    ->selectRaw('*')
                                    ->where('year', '=', 2)
                                    ->where('semester', '=', 'II')
                                    ->get();
        $gpa = new HelperClass();
        $credit_hrs_counter22 = 1;
        $value22 = 0;
        for ($i=0; $i < count($table_2_II); $i++) { 
            $value22 += $gpa->gpa_calculator($table_1_I->pluck('credit_hrs')[$i], $table_2_II->pluck('grade_type')[$i]);
            $credit_hrs_counter22 += $table_2_II->pluck('credit_hrs')[$i];
            // echo $value;
        }
        if($credit_hrs_counter22 > 1){
            $credit_hrs_counter22 -= 1;
        }
        $gpa_2_II = round(($value22 / $credit_hrs_counter22), 2);


        //year 3 semester I
        $table_3_I = DB::table(preg_replace("/[^a-zA-Z0-9\s]/", "", $student->pluck('idnumber')))
                                    ->selectRaw('*')
                                    ->where('year', '=', 3)
                                    ->where('semester', '=', 'I')
                                    ->get();
        $gpa = new HelperClass();
        $credit_hrs_counter31 = 1;
        $value31 = 0;
        for ($i=0; $i < count($table_3_I); $i++) { 
            $value31 += $gpa->gpa_calculator($table_3_I->pluck('credit_hrs')[$i], $table_3_I->pluck('grade_type')[$i]);
            $credit_hrs_counter31 += $table_3_I->pluck('credit_hrs')[$i];
            // echo $value;
        }
        if($credit_hrs_counter31 > 1){
            $credit_hrs_counter31 -= 1;
        }
        $gpa_3_I = round(($value31 / $credit_hrs_counter31), 2);


        //year 3 semester II
        $table_3_II = DB::table(preg_replace("/[^a-zA-Z0-9\s]/", "", $student->pluck('idnumber')))
                                    ->selectRaw('*')
                                    ->where('year', '=', 3)
                                    ->where('semester', '=', 'II')
                                    ->get();
        $gpa = new HelperClass();
        $credit_hrs_counter32 = 1;
        $value32 = 0;
        for ($i=0; $i < count($table_3_II); $i++) { 
            $value32 += $gpa->gpa_calculator($table_1_I->pluck('credit_hrs')[$i], $table_3_II->pluck('grade_type')[$i]);
            $credit_hrs_counter32 += $table_3_II->pluck('credit_hrs')[$i];
            // echo $value;
        }
        if($credit_hrs_counter32 > 1){
            $credit_hrs_counter32 -= 1;
        }
        $gpa_3_II = round(($value32 / $credit_hrs_counter32), 2);


        //year 4 semester I
        $table_4_I = DB::table(preg_replace("/[^a-zA-Z0-9\s]/", "", $student->pluck('idnumber')))
                                    ->selectRaw('*')
                                    ->where('year', '=', 4)
                                    ->where('semester', '=', 'I')
                                    ->get();
        $gpa = new HelperClass();
        $credit_hrs_counter41 = 1;
        $value41 = 0;
        for ($i=0; $i < count($table_4_I); $i++) { 
            $value41 += $gpa->gpa_calculator($table_4_I->pluck('credit_hrs')[$i], $table_4_I->pluck('grade_type')[$i]);
            $credit_hrs_counter41 += $table_4_I->pluck('credit_hrs')[$i];
            // echo $value;
        }
        if($credit_hrs_counter41 > 1){
            $credit_hrs_counter41 -= 1;
        }
        $gpa_4_I = round(($value41 / $credit_hrs_counter41), 2);


        //year 4 semester II
        $table_4_II = DB::table(preg_replace("/[^a-zA-Z0-9\s]/", "", $student->pluck('idnumber')))
                                    ->selectRaw('*')
                                    ->where('year', '=', 4)
                                    ->where('semester', '=', 'II')
                                    ->get();
        $gpa = new HelperClass();
        $credit_hrs_counter42 = 1;
        $value42 = 0;
        for ($i=0; $i < count($table_4_II); $i++) { 
            $value42 += $gpa->gpa_calculator($table_4_II->pluck('credit_hrs')[$i], $table_4_II->pluck('grade_type')[$i]);
            $credit_hrs_counter42 += $table_4_II->pluck('credit_hrs')[$i];
            // echo $value;
        }
        if($credit_hrs_counter42 > 1){
            $credit_hrs_counter42 -= 1;
        }
        $gpa_4_II = round(($value42 / $credit_hrs_counter42), 2);





        switch ($year) {
            case 1:
                switch ($semester){
                    case 'I':
                        $table_1_I = DB::table(preg_replace("/[^a-zA-Z0-9\s]/", "", $student->pluck('idnumber')))
                                    ->selectRaw('*')
                                    ->where('year', '=', $year+0)
                                    ->where('semester', '=', $semester)
                                    ->get();
                        
                        break;
                    case 'II':
                        //
                        break;
                }                
                break;
            case 2:
                switch ($semester){
                    case 'I':
                        //
                        break;
                    case 'II':
                        //
                        break;
                }                
                break;
            case 3:
                switch ($semester){
                    case 'I':
                        //
                        break;
                    case 'II':
                        //
                        break;
                }                
                break;
            case 4:
                switch ($semester){
                    case 'I':
                        //
                        break;
                    case 'II':
                        //
                        break;
                }                
                break;
            case 5:
                switch ($semester){
                    case 'I':
                        //
                        break;
                    case 'II':
                        //
                        break;
                }                
                break;
        }
        $grade_report_table = 0;
        switch ($dept_name) {
            case 'computer science':
                $dept = Computer_Science::all();
                $grade_report_table = 8;
                break;
            case 'accounting':
                $dept = Accounting::all();
                $grade_report_table = 6;
                break;
            case 'management':
                $dept = Management::all();
                $grade_report_table = 6;
                break;
            default:
                //
                break;
        }
        $years = array();
        for ($i=0; $i < $year; $i++) {
            array_push($years, $i);
            array_push($years, $i);
        }
        
        
        
        //let's compute the cgpa for all semesters
        $total_credit_hours = 0;        
        if($credit_hrs_counter11 > 1){
            $total_credit_hours += $credit_hrs_counter11;
        }
        if($credit_hrs_counter12 > 1){
            $total_credit_hours += $credit_hrs_counter12;
        }
        if($credit_hrs_counter21 > 1){
            $total_credit_hours += $credit_hrs_counter21;
        }
        if($credit_hrs_counter22 > 1){
            $total_credit_hours += $credit_hrs_counter22;
        }
        if($credit_hrs_counter31 > 1){
            $total_credit_hours += $credit_hrs_counter31;
        }
        if($credit_hrs_counter32 > 1){
            $total_credit_hours += $credit_hrs_counter32;
        }
        if($credit_hrs_counter41 > 1){
            $total_credit_hours += $credit_hrs_counter41;
        }
        if($credit_hrs_counter42 > 1){
            $total_credit_hours += $credit_hrs_counter42;
        }
             
        
        $total_values = $value11 + $value12 + $value21 + $value22 + $value31 + $value32 + $value41 + $value42;
        
        if($total_credit_hours > 0){
            $cgpa = round(($total_values/$total_credit_hours), 2);
            $std_cgpa = Student::where('idnumber', '=', $user)->first();
            $std_cgpa->cgpa = $cgpa;
            $std_cgpa->save();
        }    

        return view('yeneta.student.gradeReport')
                    ->with('fullname', $fullname)
                    ->with('year', $year)
                    ->with('semester', $semester)
                    ->with('courses', $courses)
                    ->with('table_1_I', $table_1_I)
                    ->with('table_1_II', $table_1_II)
                    ->with('table_2_I', $table_2_I)
                    ->with('table_2_II', $table_2_II)
                    ->with('table_3_I', $table_3_I)
                    ->with('table_3_II', $table_3_II)
                    ->with('table_4_I', $table_4_I)
                    ->with('table_4_II', $table_4_II)
                    ->with('dept', $dept_name)
                    ->with('gpa_1_I', $gpa_1_I)
                    ->with('gpa_1_II', $gpa_1_II)
                    ->with('gpa_2_I', $gpa_2_I)
                    ->with('gpa_2_II', $gpa_2_II)
                    ->with('gpa_3_I', $gpa_3_I)
                    ->with('gpa_3_II', $gpa_3_II)
                    ->with('gpa_4_I', $gpa_4_I)
                    ->with('gpa_4_II', $gpa_4_II)
                    ->with('cgpa', $cgpa);
    }
    public function announcements(){
        return view('yeneta.student.readAnnouncements');
    }
}
