<?php

namespace App\Http\Controllers;

use App\Models\NewStudent;
use App\Models\NewTeacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ShowTution extends Controller
{
    public function show(){
        $tutioni = NewStudent::where('district','dhaka')->get();

        return view('frontend.pages.tutionPages.mirpur',compact('tutioni'));
    }
    public function details_show($id){
        $details = NewStudent::where('id',$id)->get();

        return view('frontend.pages.tutionPages.student_details',compact('details'));
    }
    public function teachers_information(Request $request){
        $teachers_information = new NewTeacher();
        $teachers_information->name = $request->name;
        $teachers_information->email = $request->email;
        $teachers_information->mobile = $request->mobile;
        $teachers_information->full_name = $request->full_name;
        $teachers_information->gender = $request->gender;
        $teachers_information->institution = $request->institution;
        $teachers_information->subject = $request->subject;
        $teachers_information->district = $request->district;
        $teachers_information->present_address = $request->present_address;
        $teachers_information->schedule = $request->schedule;
        $teachers_information->student_level = $request->student_level;
        $teachers_information->prefered_subject = $request->prefered_subject;
        $teachers_information->salary = $request->salary;

        // $teachers_information->image =$request->file('image')->store('teacher');

        // $teachers_information->save();


        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'. $extension;
            $file->move('teacher', $fileName);
            $teachers_information->image = $fileName;
        }
        $teachers_information->save();


        return back()->with('message','আপনাকে ধন্যবাদ !');
    }


    public function teacher_info(){
        return view('frontend.pages.tutionPages.teacher_info');
    }

    public function teacher_details($id){

        $teachers = NewTeacher::find($id);
        return view('frontend.pages.tutionPages.teacher_details',compact('teachers'));
    }


}
