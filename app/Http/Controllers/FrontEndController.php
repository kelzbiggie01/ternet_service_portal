<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function getHomePage(){
        // $services=Service::take(6)->get();
        // return view('frontend.pages.home',compact('services'));
        return view('frontend.home');
    }
}
