<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function Home(){

        return view('home');

    }
    function About(){

        return view('about');

    }
    function Service(){

        return view('service');

    }
    function portfolio(){


        return view('portfolio');
    }
}
