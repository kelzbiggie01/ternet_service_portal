<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function getHomePage(){
        // $services=Service::take(6)->get();
        // return view('frontend.pages.home',compact('services'));
        return view('frontend.pages.home');
    }

    public function getServices(){
        return  view('frontend.pages.services');
    }

    public function getContact_us(){
        return view('frontend.pages.contact_us');
    }

    public function getLogin(){
        return view('frontend.auth.login');
    }
    public function showServices(){
        return view('frontend.pages.showservices');
    }
    public function showDepartment(){
        return view('frontend.pages.showdepartment');
    }
}
