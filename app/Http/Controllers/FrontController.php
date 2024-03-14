<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function albums()
    {
        return view('front.albums-store');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function elements()
    {
        return view('front.elements');
    }
    public function event()
    {
        return view('front.event');
    }
    public function blog()
    {
        return view('front.blog');
    }
}
