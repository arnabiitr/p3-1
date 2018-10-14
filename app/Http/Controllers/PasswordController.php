<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        return 'Show the form';
    }

    public function getPassword()
    {
        return 'Show the password based on selected options';
    }
}
