<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('auth.admin.login');
    }


    public function store(Request $request){
        $data=$request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);


    //    dd(!auth()->attempt($request->only('email','password')));
    //    dd($request->password);


        // if(!Auth::attempt($request->only('email','password'))){
        if(!Auth::guard('admin')->attempt($request->only('email','password'))){
            
            return back()->with('error' , 'Invalid username or password');

        }

        return redirect()->route('adminDashboard');
    }

}
