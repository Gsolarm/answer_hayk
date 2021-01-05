<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use From;

class AuthController extends Controller
{
    public function registerGet(){
        return view('auth.register');
    }

    public function registerPost(Request $request){
        $this->validate($request, array(
            'email'     =>  'required|unique:users|email|max:255',
            'name'      =>  'required',
            'password'  =>  'required|min:6',
        ));
        
        User::create(array(
            'email'     =>  $request->input('email'),
            'name'      =>  $request->input('name'),
            'password'  =>  bcrypt($request->input('password')),
        ));
        
        return redirect('login')->with('info', 'Your account has been created and you can login now.');
    }



    public function loginGet(){
        return view('auth.login');
    }

    public function loginPost(Request $request){
        $this->validate($request, array(
            'email'     =>  'required',
            'password'  =>  'required',
        ));
        
        if(! Auth::attempt( $request->only( array('email', 'password'), $request->has('remember') ))){
            return redirect()->back()->with('info', 'Invalid Email or Password');
        }
        
        return redirect('post/list');
    }

    public function logout(){
        Auth::logout();

        return redirect('login');
    }
}
