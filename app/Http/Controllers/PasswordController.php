<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index(Request $request)
    {
        return view('password.index')->with([
            'lengthOfPassword' => $request->session()->get('lengthOfPassword', ''),
            'includeNumber' => $request->session()->get('includeNumber', false),
            'includeSpecialChar' => $request->session()->get('includeSpecialChar', 'choose'),
            'password' => $request->session()->get('password')
        ]);

        return view('password.index');
    }

    public function getPassword(Request $request)
    {
        $request->validate([
            'lengthOfPassword' => 'required|integer|min:3',
            'includeSpecialChar' => 'required'
        ]);

        $password = "";

        # Getting data
        $includeSpecialChar = $request->input('includeSpecialChar');
        $includeNumber = $request->has('includeNumber');
        $lengthOfPassword = $request->input('lengthOfPassword');

        $charList = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p',
            'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

        $positionOfNumber = rand(0, $lengthOfPassword - 1);
        $positionOfSpecialChar = rand(0, $lengthOfPassword - 1);
        while ($positionOfNumber == $positionOfSpecialChar) {
            $positionOfSpecialChar = rand(0, $lengthOfPassword - 1);
        }
        for ($index = 0; $index < $lengthOfPassword; $index++) {
            if ($includeNumber and $index == $positionOfNumber) {
                $password = $password . rand(0, 9);
            } else if ($includeSpecialChar != 'choose' and $index == $positionOfSpecialChar) {
                $password = $password . $includeSpecialChar;
            } else {
                $password = $password . $charList[rand(0, 25)];
            }
        }

        return redirect('/')->with([
            'lengthOfPassword' => $lengthOfPassword,
            'includeNumber' => $includeNumber,
            'includeSpecialChar' => $includeSpecialChar,
            'password' => $password
        ]);
    }
}
