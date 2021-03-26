<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StudentLoginController extends Controller
{
    public function _contruct(){
        $this->middleware('guest:student');
    }
    public function showLoginForm(){
        return view('auth.student-login');
    }

    public function login(Request $request){
        //validate inputs
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //atempt to login thi5_i5_5tron9_pa55_for_9it
        if(Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            //if successful redirect to the intended page
            return redirect()->intended('yeneta/student');
        }
        else{
            //if unsuccessful
            return redirect()->back()->withInput($request->only('email', 'remeber'));
        }
    }
}
