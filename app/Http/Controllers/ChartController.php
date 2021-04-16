<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use charts;
use DB;

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
}
