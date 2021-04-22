<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class FinanceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:finance');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('yeneta.finance.home');
    }
    public function stats(){
        return view('yeneta.finance.stats');
    }
    public function payments(){
        // $gregorian = new Andegna\DataTime('now');
        // $ethipic = new Andegna\DateTime($gregorian);
        return view('yeneta.finance.trackPayment');
    }
    public function paymentResult(Request $request){
        // dd($request[0]);
        foreach($request->query as $query){
            $query = $query;
        }
        return view('yeneta.finance.payment-result')
                    ->with('query', $query);
    }
}
