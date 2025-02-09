<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($credentials)){
            if(Auth::check() && Auth::user()->role === 'admin'){
                $user = User::where('email',$credentials["email"])->first();
                $request->session()->put('username',$user->name);
                return redirect()->intended('/dashboard');
            }else{
                $user = User::where('email',$credentials["email"])->first();
                $request->session()->put('username',$user->name);
                return redirect()->intended('/profile');
            } 
        }
        
        return redirect()->withErrors(['message' => 'Invalid Credentials']);
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }

    public function showSignup(){
        return view('signup');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        try{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);

            return redirect()->route('profile');

        } catch(\Exception $e){
            return back()->withErrors(['message' => 'Something went wrong with registration.']);
        }

    }

    function showProfile(){
        return view('profile');
    }

    function showDashboard(){
        return view('dashboard');
    }
}
