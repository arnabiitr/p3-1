<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        return view('password.index');
    }

    public function getPassword()
    {
        return view('password.getPassword');
    }
}
