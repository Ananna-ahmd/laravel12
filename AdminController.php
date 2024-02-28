<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function e_learning_home()

    {
        return view('e_learning_home');

    }
    public function login(){
        return view('login');
    }

}
