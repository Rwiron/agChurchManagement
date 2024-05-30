<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class webController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function sermons()
    {
        return view('home.sermons');
    }

    public function news()
    {
        return view('home.news');
    }

    public function events()
    {
        return view('home.events');
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }
}