<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
    public function login(Request $request){
        $this->validate($request,[
            "email"=>"required|email",
            "password"=>"required"
        ]);
    
        $credentials=[
            "email"=>$request->email,
            "password"=>$request->password
        ];
    
        if(Auth::attempt($credentials)){
    
            return redirect()->intended('backendservices');
        }
    
        session::flash("error"," Email or Password is not valid");
        return back();
    } 

    
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }
}
