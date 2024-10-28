<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function signIn(){
        return view('Sign In');
    }

    function signUp(){
        return view('Sign Up');
    }

    //proses data sign in dr forum
    function signInPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }

        return redirect(route('signIn'))->with('error', 'Sign In details are not valid');
    }

    //proses data sign up yg dikirim dr forum
    function signUpPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password); 
        $user = User::create($data);

        if(!$user){
            return redirect(route('signUp'))->with('error', 'Sign Up failed, please try again');
        }
        return redirect(route('signIn'));
        
    }

    function signOut(){
        Session::flush();
        Auth::logout();
        return redirect(route('signIn'));
    }
}
