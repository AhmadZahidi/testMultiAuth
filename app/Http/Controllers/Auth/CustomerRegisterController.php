<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerRegisterController extends Controller
{
    public function index(){
        return view('auth.customer.register');
    }

    public function store(Request $request){
        $data=$request->validate([
            'name'=>'required | min:5|max:255',
            'email'=>'required | email',
            'password'=>'required | confirmed |min:8'
        ]);

        $data['password']=Hash::make($data['password']);

        Customer::create($data);

        return redirect()->route('login');

    }
}
