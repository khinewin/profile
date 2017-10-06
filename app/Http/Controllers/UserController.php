<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Profile;
use App\StudentClass;

class UserController extends Controller
{
    public function getDashboard(){
        $stc=StudentClass::all();
        return view ('admin.home')->with(['stc'=>$stc]);
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('/');
    }
    public function getProfile(){
        $user=Auth::User();
        return view ('admin.profile')->with(['user'=>$user]);
    }
    public function postUploadProfile(Request $request){
        if(!Auth::User()->profile->user_id) {
            $img_file = $request->file('user_image');
            $img_name = Auth::User()->user_name . '.' . $request->file('user_image')->getClientOriginalExtension();
            $img_file->move(public_path('/profile'), $img_name);
            $profile = new Profile();
            $profile->user_image = $img_name;
            $profile->user_id = Auth::User()->id;
            $profile->save();
            return redirect()->back();
        }else{
            $img_file = $request->file('user_image');
            $img_name = Auth::User()->user_name . '.' . $request->file('user_image')->getClientOriginalExtension();
            $img_file->move(public_path('/profile'), $img_name);
            return redirect()->back();

        }
    }

}
