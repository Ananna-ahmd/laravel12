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
    public function sign_up(){
        return view('sign_up');
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $results = Course::where('title', 'like', "%$query%")->get();

        return view('search.results', compact('results'));
    }
    public function course(){
        return view('course');
    }

}
