<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        return View('home');
    }
    public function login()
    {
        return View('login');
    }
    public function doLogin()
    {
        $this->validate(\request() , ['email' => 'required' , 'password'=> 'required']  );
        if(Auth::attempt(['email' => \request('email'), 'password' => \request('password')]))
        {
             $this->guard();


            return redirect('home');
        }

    }
    protected function guard()
    {

        if(Auth::user()->role_id == 1 )
        {
            return Auth::guard('freelancer');
        }
        else
            return Auth::guard('employer');

    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
