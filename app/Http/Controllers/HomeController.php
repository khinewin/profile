<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentClass;
class HomeController extends Controller
{
    public function getWelcome(){
        $stc=StudentClass::all();
        return view ('welcome')->with(['stc'=>$stc]);
    }

    public function getClassName($cName){
        $sts=StudentClass::where('class_name', $cName)->first();
        return view('class-name')->with(['st'=>$sts]);
    }
}
