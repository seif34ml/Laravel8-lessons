<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Validator,Redirect,Response;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;


class RegisterController extends Controller
{
  function index(){
    return view('register');
  }
  function register(){
      $attributes=request()->validate([
          "name"=>'required|max:255|min:5',
          "email"=>'required|max:255|unique:users,email',
          "password"=>'required|max:255|min:5',


      ]);
      $attributes['verified']=1;
      $atts=$attributes;

      User::create($atts);
       return  Redirect::to('/')->withSuccess('welcome');
  }
  function indexLogin(){
    return view('welcome');
  }
  function login(){

      $attributes=request()->validate([
          'email'=>'required',
          'password'=>'required'
      ]);

      if(auth()->attempt($attributes)) {
             session()->regenerate();

            return redirect()->intended('posts')->with('Success','logged in');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');



  }
  function logout(){
      auth()->logout();
      return redirect('/');
  }

}
