<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class LoginController extends Controller
{   
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLogin']);
    }


    public function showLogin(){

        return view('auth.login');

    }

    public function login(){
        
        $credentials = $this->validate(request(), [

            $this->userName() => 'required|string',
            'password' => 'required|string'

       ]);


       if (Auth::attempt($credentials)) {
           return redirect()->route('dashboard');
       }

       return back()->withErrors([$this->userName() => trans('auth.failed')])
                    ->withInput(request([$this->userName()]));

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function userName(){
        return 'email';
    }





    /*use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/
}
