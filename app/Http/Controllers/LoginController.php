<?php

namespace App\Http\Controllers;

use Faker\Calculator\TCNo;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
}
