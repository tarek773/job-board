<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    function index()
    {
        return view('index' );
    }
    function about()
    {
        return view('about' ,['pagetitle'=> 'About Page']);
    }
    function contact()
    {
        return view('contact' ,['pagetitle'=> 'Contact Page']);
    }
}
