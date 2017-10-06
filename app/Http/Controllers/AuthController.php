<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin(){
        return view ('admin/auth.login');
    }
    public function postLogin(Request $request){
        $this->validate($request, [
           'user_name'=>'required|exists:users',
            'password'=>'required'
        ]);
        if(Auth::attempt(['user_name'=>$request['user_name'], 'password'=>$request['password']])){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('err', 'Authentication have been failed.');
        }
    }
    public function getRegister(){
        return view ('admin/auth.register');
    }
    public function postRegister(Request $request){
        $this->validate($request,[
           'user_name'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8',
            'password_confirm'=>'required|same:password'
        ]);
        $user=new User();
        $user->user_name=$request['user_name'];
        $user->email=$request['email'];
        $user->password=bcrypt($request['password']);
        $user->save();
        Auth::login($user);
        return redirect()->route('dashboard');

    }
}
