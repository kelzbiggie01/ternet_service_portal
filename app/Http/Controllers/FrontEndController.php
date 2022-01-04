<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Service;
use App\Models\Department;
use App\Models\Contact;
use Illuminate\Support\Str;

class FrontEndController extends Controller
{
    //
    public function getHomePage(){
        $services=Service::take(6)->get();
        return view('frontend.pages.home',compact('services'));
    }

    public function getServices(){
        $services=Service::simplePaginate(6);
        return  view('frontend.pages.services',compact('services'));
    }

    public function getContact_us(){
        return view('frontend.pages.contact_us');
    }

    public function getLogin(){
        return view('frontend.auth.login');
    }
    public function showServices($id){
        $service=Service::find($id);
        $relatedservices=Service::take(3)->get();
        return view('frontend.pages.showservices',compact("service","relatedservices"));
    }
    public function showDepartment($id){
        $department=Department::find($id);
        return view('frontend.pages.showdepartment',compact("department"));
    }

    public function storeContacts(Request $request){
        $this->validate($request,[
            "email"=>"email"
        ]);
        
        $contacts = new Contact();
        $contacts->name=$request->name;
        $contacts->email=$request->email;
        $contacts->subject=$request->subject;
        $contacts->message=$request->message;
        $contacts->save();
        Session::flash("success","Thank you for contacting us");
        return back();
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
