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
use App\FileTransfer;
use App\Announcement;
use DB;
use App\Custom\HelperClass;

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
    public function viewGrades(){
        return view('yeneta.registrar.grades');
    }
    public function payment(){
        return view('yeneta.registrar.payment')->with('students', Student::all());
    }
    public function announcement(){
        return view('yeneta.registrar.announcement')->with('announcements', Announcement::all())
                                                    ->with('viewer', 'registrar');
    }
    public function testing(){
        return view('yeneta.registrar.testing');
    }
    public function announcementstore(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'CreatedFor' => 'required',
            'deadline' => 'required',
        ]);

        $announcement = new Announcement;
        $announcement -> CreatedFor = $request->CreatedFor;
        $announcement -> title = $request->title;
        $announcement -> content  = $request->content;
        $announcement -> CreatedBy = 'registrar';
        $announcement -> deadline = $request->deadline;

        if($request->FileUploaded){
            $FileUploaded = $request->FileUploaded;
            $FileUploaded_new_name = time().$FileUploaded->getClientOriginalName();
            $FileUploaded -> move('uploads/announcements', $FileUploaded_new_name);

            $announcement -> FileUploaded ='uploads/announcements'.$FileUploaded_new_name;
        }

        $announcement->save();
    return redirect()->back();
    }
    public function announcementedit(Request $request,$id){
        $this->validate($request,[
            'title'=>'required'
        ]);

            $announcement = Announcement::find($id);
            $announcement -> CreatedFor = $request->CreatedFor;
            $announcement -> title = $request->title;
            $announcement -> content  = $request->content;
            $announcement -> deadline = $request->deadline;
            $announcement-> CreatedBy = 'Registrar';
            $announcement->save();
            
    return redirect()->back();
    }
    public function announcementdelete($id){
        $announcement = Announcement::find($id);
        $announcement->delete();
    return redirect()->back();
    }
    public function filetransfer(){
        return view('yeneta.registrar.filetransfer')->with('files',FileTransfer::all());
    }
    public function filetransferstore(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'receiver' => 'required',
            'details' => 'required',
            'fileupload' => 'required|file' 
        ]);
        $fileupload = $request->fileupload;
        $fileupload_new_name = time().$fileupload->getClientOriginalName();
        $fileupload -> move('uploads/filetransfer', $fileupload_new_name);




        $filetransfer = new FileTransfer;
            $filetransfer->title = $request->title;
            $filetransfer->details = $request->details;
            $filetransfer->receiver = $request->receiver;
            $filetransfer->fileupload ='uploads/filetransfer'.$fileupload_new_name;
            $filetransfer->sender = 'registrar';
            $filetransfer->save();
        
        return redirect()->back();
    }
    public function search(Request $request){
        $search = $request->input('search');

        $students = Student::query()
                    ->Where('fullname', 'LIKE' ,"%{$search}%")
                    ->orWhere('idnumber', 'LIKE', "%{$search}%")
                    ->get();

        return view('yeneta.registrar.SearchStudent', compact('students'));
    }

    
    
}
