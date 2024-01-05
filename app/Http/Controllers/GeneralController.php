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
}
