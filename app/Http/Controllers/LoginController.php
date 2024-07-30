<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return View ('login');
    }


    public function loginproses(){
       
        if (auth()->guard('super-admin')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('super-admin');
        }

        if (auth()->guard('admin')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('admin');
        }

        if (auth()->guard('customer')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('customer');
        }

        return redirect('login');
    }

    public function logout(){
        
		auth()->guard('admin')->logout();
		auth()->guard('customer')->logout();
        return redirect('/');
    }
}
