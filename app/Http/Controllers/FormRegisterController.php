<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormRegisterController extends Controller
{
    public function index()
    {
        return view('form-register');
    }
    public function register(Request $request)
    {

        $username = $request->input('username', 'You have not entered a username');
        $name = $request->input('name', 'You have not entered a name');
        $password = $request->input('password', '<PASSWORD>');

        return view('form-register')->with([
            'username' => $username,
            'name' => $name,
            'password' => $password
        ]);
    }

}
