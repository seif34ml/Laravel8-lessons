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
          "email"=>'required|max:255|min:20|unique:users,email',
          "password"=>'required|max:255|min:5',

      ]);
      User::create($attributes);
       return  Redirect::to('/')->withSuccess('welcome');
  }
}
