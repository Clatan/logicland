<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function login()
    {
        return view('login');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function signup()
    {
        return view('signup');
    }

      public function home()
    {
        return view('home');
    }

    public function beginner()
    {
        return view('beginner');
    }
    
    public function elementary()
    {
        return view('elementary');
    }

    public function intermediate()
    {
        return view('intermediate');
    }

    public function advance()
    {
        return view('advance');
    }

    // public function stage1()
    // {
    //     return view('beginner.stage1', compact('question'));
    // }
}
