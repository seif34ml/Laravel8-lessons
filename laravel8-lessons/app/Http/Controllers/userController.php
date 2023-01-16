<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(User $user){
        return view('userProfile',
        ["user"=>$user]);
    }
}
