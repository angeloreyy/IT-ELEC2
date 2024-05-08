<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Request::path();
use App\Models\User;

class DataController extends Controller
{
    public function userRegister(Request $request)
    {
        $request->validate([
            //input             //column        table, column
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'name' => 'required|min:3',
        ]);

        $request['password'] = bcrypt($request['password']);
        User::create($request);

        return redirect('/');
    }
    public function userLogin(Request $request)
    {
        User::auth($request)->login($request['username']);
        return view('login');
    }
}
