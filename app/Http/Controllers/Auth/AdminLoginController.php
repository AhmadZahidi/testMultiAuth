<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index(){
        return view('auth.admin.login');
    }


    public function store(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);


    //    dd(!auth()->attempt($request->only('email','password')));


        if(!auth()->attempt($request->only('email','password'))){
            
            return back()->with('error' , 'Invalid username or password');

        }

        return redirect()->route('adminDashboard');
    }

}
