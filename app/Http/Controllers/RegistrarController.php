<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;

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
}
