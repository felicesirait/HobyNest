<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class AuthManager extends Controller
{
    function signIn() {
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
        $remember = $request->has('remember'); // Cek apakah checkbox "Remember Me" dicentang

        if(Auth::attempt($credentials, $remember)){
            if ($remember) {
                Cookie::queue('remember_me', $request->email, 1); // Simpan cookie selama 1 menit
            }

            // Periksa usertype dan arahkan ke halaman yang sesuai
            $user = Auth::user();
            if ($user->usertype == 'admin') {
                return redirect()->route('admin');
            } else {
                return redirect()->route('home');
            }
        }
        return redirect(route('signIn'))->with('error', 'Sign In details are not valid');
    }

    //proses data sign up yg dikirim dr forum
    function signUpPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            //'usertype' => 'required|in:user,admin', // Validasi usertype
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password); 
        //$data['usertype'] = $request->usertype; // Simpan usertype
        $user = User::create($data);

        if(!$user){
            return redirect(route('signUp'))->with('error', 'Sign Up failed, please try again');
        }
        return redirect(route('signIn'));
        
    }

    function signOut()
    {
        Session::flush();
        Auth::logout();
        Cookie::queue(Cookie::forget('remember_me')); //Hapus cookie "remember_me"
        return redirect(route('signIn'));
    }
}
