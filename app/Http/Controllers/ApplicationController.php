<?php

namespace App\Http\Controllers;

use App\Models\ManualApplicationTuition;
use App\Models\ManualApplicationTutor;
use App\Models\NewStudent;
use App\Models\NewTeacher;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function manualApplicationTutor(Request $request){

        $data = new ManualApplicationTutor ;
        $data->tuition_id = $request->tuition_id;
        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->institution = $request->institution;
        $data->subject = $request->subject;
        $data->district = $request->district;
        $data->location = $request->location;
        $data->mobile = $request->mobile;
        $save = $data->save();

        if($save){
            return back()->with('message','Application successfully added');
        }else{

            return back()->with('message','Application does not added');
        }
    }

    public function manualApplicationTuition(Request $request){
        $data = new ManualApplicationTuition;
        $data->tutor_id = $request->tutor_id;
        $data->name = $request->name;
        $data->class = $request->class;
        $data->subject = $request->subject;
        $data->gender = $request->gender;
        $data->district = $request->district;
        $data->location = $request->location;
        $data->mobile = $request->mobile;
        $save = $data->save();

        if($save){
            return back()->with('message','Application successfully added');
        }else{

            return back()->with('message','Application does not added');
        }
    }

    public function profile($user){
        // dd($id);
        if($user == 'tutor'){
          $profiles = NewTeacher::where('user',$user)->first();
        //   dd($profiles,'1');
          return view('frontend.pages.tutionPages.tuitionAdmin.profile',compact('profiles'));
        }
        else{
            $profiles = NewStudent::where('user',$user)->first();
            // dd($profiles,'2');
            return view('frontend.pages.tutionPages.tuitionAdmin.profile',compact('profiles'));
        }
        // return view('frontend.pages.tutionPages.tuitionAdmin.profile');
    }
}
