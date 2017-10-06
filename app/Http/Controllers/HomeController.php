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
}
