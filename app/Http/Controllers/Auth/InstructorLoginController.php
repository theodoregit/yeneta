<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class InstructorLoginController extends Controller
{
    public function _contruct(){
        $this->middleware('guest:instructor');
    }
    public function showLoginForm(){
        return view('auth.instructor-login');
    }

    public function login(Request $request){
        //validate inputs
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //atempt to login
        if(Auth::guard('instructor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            //if successful redirect to the intended page
            return redirect()->intended('yeneta/instructor');
        }
        else{
            //if unsuccessful
            return redirect()->back()->withInput($request->only('email', 'remeber'));
        }
    }
}
