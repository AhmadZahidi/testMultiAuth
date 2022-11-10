<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function index(){
        return view('auth.admin.register');
    }

    public function store(Request $request){
        $data=$request->validate([
            'name'=>'required | min:5|max:255',
            'email'=>'required | email',
            'password'=>'required | confirmed |min:8'
        ]);

        $data['password']=Hash::make($data['password']);

        // dd($request);

        Admin::create($data);

        return redirect()->route('adminLogin');

    }
}
