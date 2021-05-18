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
use App\Custom\HelperClass;
use App\Payment;
use Session;

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

        $student = Student::create([
            'idnumber' => $request->idnumber,
            'fullname' => $request->firstname . ' ' . $request->middlename . ' ' . $request->lastname,
            'gender' => $request->gender,
            'dept_name' => $request->department,
            'section' => $request->section,
            'year' => $request->year,
            'semester' => $request->semester,
        ]);

        $stupayment = new Payment;
            $stupayment->fullname = $request->firstname . ' ' . $request->middlename . ' ' . $request->lastname;
            $stupayment->idnumber = $request->idnumber;
            $stupayment->dept_name = $request->department;
            $stupayment->year = $request->year;
            $stupayment->semester = $request->semester;
            $stupayment->amount = 0.00;
            $stupayment->penality = 0.00;
            $stupayment->total = 0.00;
            $stupayment->save();

        // echo $student->accountings()->attach($request->dept_name);
        // // dd($request->all());

        $std = new CreateTables();
        $std->create_table(preg_replace("/[^a-zA-Z0-9\s]/", "", $request->idnumber));
        
        //let's create a student's account
        $student_account = StudentAuth::create([
            'idnumber' => $request->idnumber,
            'password' => bcrypt('password'),
        ]);

        //fill student's private table with ...
        $std = preg_replace("/[^a-zA-Z0-9\s]/", "", $request->idnumber);
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
                                    'grade_type' => 'NG',
                                    'isPassed' => 0);
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
                                    'grade_type' => 'NG',
                                    'isPassed' => 0);
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
                                    'grade_type' => 'NG',
                                    'isPassed' => 0);
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
        $students_management = Student::where('dept_name', '=', 'management')->get();
        $students_accounting = Student::where('dept_name', '=', 'accounting')->get();
        $students_computer_science = Student::where('dept_name', '=', 'computer science')->get();
        return view('yeneta.registrar.students')
                    ->with('students_m', $students_management)
                    ->with('students_a', $students_accounting)
                    ->with('students_c', $students_computer_science);
    } 
    public function studentDetail($idnumber){
        $insertStr = new HelperClass();
        $newstring = $insertStr->stringInsert($idnumber, '/', 2);
        $newstring = $insertStr->stringInsert($newstring, '/', 7);
        // echo $newstring;

        $students = Student::where('idnumber', '=', $newstring)->first();
        return view('yeneta.registrar.student-detail')
                    ->with('students', $students);
    }
    public function assignInstructors(){
        return view('yeneta.registrar.assign');
    }
    public function payment(){
        return view('yeneta.registrar.payment')->with('students', Student::all())
                                                ->with('payments', Payment::all());
    }
    public function announcement(){
        return view('yeneta.registrar.announcement');
    }

    public function search(Request $request){
        $this->validate($request, [
            'query' => 'required',
        ]);
        $results = Student::where('idnumber', 'like', '%' . request('query') . '%')->get();
       
        return view('yeneta.registrar.results')->with('results', $results);
    }

    public function paymentstore(Request $request, $idnumber)
    {
        
        $payment = Payment::find($idnumber);
        $temps = [
            '11','21','31','41','51','61','71','81','91','101','111','121','12','22','32','42','52','62','72','82','92','102','112','122','13','23','33','43','53','63','73','83','93','103','113','123','14','24','34','44','54','64','74','84','94','104','114','124'  
        ];
        foreach ($temps as $temp) {
            if (($request->month).$payment->year == $temp) {
                if ($payment->{$temp} > 0.00) {
                    Session::flash('info', 'You have already paid for this month');
                    break; 
                }
                $payment -> penality = $request->penality;
                $payment ->amount = $request->amount;
                $payment->total = $payment->total + $request->total;
                $payment->{$temp} = $request->total;
                $payment->save();
                Session::flash('success', 'Thank you for paying');
                break;
            }
        }
    return redirect()->back();
}
    public function paymentfilter(Request $request){

        $filter = $request->dept_name;
        $payments = Payment::query()
                        ->Where('dept_name', 'LIKE', "%{$filter}%")
                        ->get();
        $temps = [
            '11','21','31','41','51','61','71','81','91','101','111','121','12','22','32','42','52','62','72','82','92','102','112','122','13','23','33','43','53','63','73','83','93','103','113','123','14','24','34','44','54','64','74','84','94','104','114','124'  
        ];

        $paidfilter = 100.00;
        $unpaidfilter = 0.00;
        foreach ($temps as $temp) {
            if ((($request->month).$request->year)== $temp) {
            
            if ($request->status == 'paid') {
                if ($filter == 'management' | $filter == 'accounting' | $filter == 'computer science') {
                    $payments = Payment::query()
                    ->Where($temp, '>', "%{$paidfilter}%")
                    ->Where('dept_name', 'LIKE', "%{$filter}%")
                    ->get();
                }else {
                    $payments = Payment::query()
                    ->Where($temp, '>', "%{$paidfilter}%")
                    ->get();
                }
            } elseif ($request->status == 'unpaid') {
                if ($filter == 'management' | $filter == 'accounting' | $filter == 'computer science') {
                    $payments = Payment::query()
                    ->Where($temp, '==', "%{$unpaidfilter}%")
                    ->Where('dept_name', 'LIKE', "%{$filter}%")
                    ->get(); 
                }else {
                    $payments = Payment::query()
                    ->Where($temp, '=', "%{$unpaidfilter}%")
                    ->get();
                }
            } 
            
        }

        }
        return view('yeneta.registrar.payment', compact('payments'));
    }


    
    
}
