<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $users=User::latest()->get();
        return view('backend.users.index',compact('users'));
    }
    public function create(){
        $departments=Department::all();
        return view('backend.users.create',compact('departments'));
    }

    public function show($id){
        $users=User::find($id);
        if(!$users){
            Session::flash("error","User not found");
            return back();
        }
        return view('backend.users.show',compact("users"));
    }

    public function edit($id){
        $users=User::find($id);
        $departments=Department::all();
        if(!$users){
            Session::flash("error","User not found");
            return back();
        }
        return view('backend.users.edit',compact("users","departments"));
    }

    

    public function store(Request $request){
        $this->validate($request,[
            "name"=>"required|unique:users"
        ]);

        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->email);
        $user->department_id=$request->department_id;
        $user->save();
        
        Session::flash("success","Successfully Saved");
        return redirect("users");
    }

    public function update(Request $request,$id){
        $users=User::find($id);
        if(!$users){
            Session::flash("error","User not found");
            return back();
        }

        $this->validate($request,[
            "name"=>"required|unique:users,name,".$users->id
        ]);

        $users->name=$request->name;
        $users->email=$request->email;
        $users->department_id=$request->department_id;
        $users->save();
        
        Session::flash("success","Successfully Updated");
        return redirect("users");
    }
}
