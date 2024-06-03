<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function profile()
    {
        return view('pages.profile');
    }
    public function popular()
    {
        return view('popular');
    }

}
