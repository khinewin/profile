<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentClass;

class ClassController extends Controller
{
    public function getClass(){
        $sts=StudentClass::all();
        return view ('admin.class')->with(['sts'=>$sts]);
    }
    public function postNewClass(Request $request){
        $this->validate($request, [
           'class_name'=>'required'
        ]);

        $st=new StudentClass();
        $st->class_name=$request['class_name'];
        $st->class_date=$request['class_date'];
        $st->text_one=$request['text_one'];
        $st->text_two=$request['text_two'];
        $st->text_three=$request['text_three'];
        $st->text_four=$request['text_four'];
        $st->text_five=$request['text_five'];
        $st->text_six=$request['text_six'];
        $st->text_seven=$request['text_seven'];
        $st->text_eight=$request['text_eight'];
        $st->text_nine=$request['text_nine'];
        $st->text_ten=$request['text_ten'];
        $st->save();
        return redirect()->back();
    }
    public function getDeleteClass($id){
        $cs=StudentClass::where('id', $id)->first();
        $cs->delete();
        return redirect()->back();
    }

}
