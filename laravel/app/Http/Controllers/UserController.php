<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function userRegister(Request $request){
        return view('home');
    }
    public function userLogin(Request $request){
        return view('login');
    }
}
