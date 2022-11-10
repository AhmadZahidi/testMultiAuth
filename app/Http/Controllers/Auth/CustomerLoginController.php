<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerLoginController extends Controller
{
    public function index(){
        return view('auth.customer.login');
    }
    
    public function store(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(!auth()->attempt($request->only('email','password'))){
            return back()->with('error' , 'Invalid username or password');
        }

        return redirect()->route('dashboard');
    }
}
