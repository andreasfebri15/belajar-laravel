<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function login()
    {
        $data = [];
        $data['title'] = 'Login';
        return view('general.login', $data);
    }

    public function register()
    {
        $data = [];
        $data['title'] = 'Register';
        return view('general.register', $data);
    }
}
