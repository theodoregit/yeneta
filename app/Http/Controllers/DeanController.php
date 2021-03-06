<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:dean');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('yeneta.dean.home');
    }
    public function viewStats(){
        return view('yeneta.dean.statistics');
    }
    public function viewGrades(){
        return view('yeneta.dean.studentsGrades');
    }
    public function viewPayment(){
        return view('yeneta.dean.payments');
    }
}
