<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use charts;
use DB;
use App\Payment;

class ChartController extends Controller
{
    public function index(){
        $students = Student::where(DB::raw("(DATE_FORMAT(dept_name,'%Y'))"))->get();
        $chart = charts::database($students, 'bar', 'highcharts')
                        ->title("Registered Students in each month")
                        ->elementlabel("Total students")
                        ->dimensions(1000,500)
                        ->responsive(false)
                        ->groupByMonth(date('Y'), true);

        $pie_charts = charts::database(Student::all(),'pie', 'highcharts')
                            ->title('pie chart of total students')
                            ->labels(['management', 'compouter science', 'accounting'])
                            ->groupBy('dept_name')
                            ->dimensions(1000,500)
                            ->responsive(false);

        $dept = charts::database(Student::all(), 'bar' ,'highcharts')
                        ->title("Students in Each Department")
                        ->elementlabel("Total Students")
                        ->dimensions(1000,500)
                        ->responsive(false)
                        ->groupBy('dept_name');
        $stud_gender = charts::database(Student::all(), 'donut' ,'highcharts')
                            ->title("student's Gender percentage")
                            ->elementlabel("Total Students")
                            ->dimensions(1000,500)
                            ->responsive(false)
                            ->groupBy('gender');
       
    return view('yeneta.dean.statistics', compact('chart', 'pie_charts','dept', 'stud_gender'));
    }
    public function paidstu(Request $request){
            $months  = $request->thismonth;
            $students = Payment::query()
                                ->Where($months. 1, '>', 300 )
                                ->get();

            $secondstudents = Payment::query()
                                ->Where($months. 2, '>', 300 )
                                ->get();
            $thirdstudents = Payment::query()
                                ->Where($months. 3, '>', 300 )
                                ->get();
            $fourthstudents = Payment::query()
                                ->Where($months. 4, '>', 300 )
                                ->get();


            $firstpaidstudents = charts::database($students, 'bar', 'highcharts')
                                ->title("1st Year Paid Students in each department in current month")
                                ->elementlabel("Total students")
                                ->dimensions(1000,500)
                                ->responsive(false)
                                ->groupBy('dept_name');

            $secondpaidstudents = charts::database($secondstudents, 'bar', 'highcharts')
                                ->title("2nd Year Paid Students in each department in current month")
                                ->elementlabel("Total students")
                                ->dimensions(1000,500)
                                ->responsive(false)
                                ->groupBy('dept_name');

            $thirdpaidstudents = charts::database($thirdstudents, 'bar', 'highcharts')
                                ->title("3rd Year Paid Students in each department in current month")
                                ->elementlabel("Total students")
                                ->dimensions(1000,500)
                                ->responsive(false)
                                ->groupBy('dept_name');

            $fourthpaidstudents = charts::database($fourthstudents, 'bar', 'highcharts')
                                ->title("4th Year Paid Students in each department in current month")
                                ->elementlabel("Total students")
                                ->dimensions(1000,500)
                                ->responsive(false)
                                ->groupBy('dept_name');

            $totalfirststu = Payment::query()
                                ->Where('year', '=' ,'1')
                                ->count(); 
            $totalsecondstu = Payment::query()
                                ->Where('year', '=' ,'2')
                                ->count(); 
            $totalthirdstu = Payment::query()
                                ->Where('year', '=' ,'3')
                                ->count(); 
            $totalfourthstu = Payment::query()
                                ->Where('year', '=' ,'4')
                                ->count(); 
        return view('yeneta.dean.Paidstu', compact('firstpaidstudents', 'secondpaidstudents', 'thirdpaidstudents', 'fourthpaidstudents', 'totalfirststu','totalsecondstu','totalthirdstu','totalfourthstu'));
    }
}
