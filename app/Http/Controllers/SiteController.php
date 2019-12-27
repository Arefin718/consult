<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function Home(){
        return view('home');
    }

    public function Contact(){
        return view('contact_us');
    }
}
