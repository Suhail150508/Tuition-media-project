<?php

namespace App\Http\Controllers;

use App\Models\NewStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Places1 extends Controller
{
    //
public function places1(){

    return view('frontend.pages.place1');
}
public function store(Request $request){
   $places1 = new NewStudent();
   $places1->name = $request->name ;
   $places1->class = $request->class;
   $places1->subject = $request->subject;
   $places1->medium = $request->medium;
   $places1->gender = $request->gender;
   $places1->schedule = $request->schedule;
   $places1->days = $request->days;
   $places1->student_number= $request->student_number;
   $places1->salary = $request->salary;
   $places1->district = $request->district;
   $places1->local_address = $request->local_address;
   $places1->mobile = $request->mobile;


   $places1->save();
   return back()->with('message','Success! ধন্যবাদ ');

}


public function student_details($id){
$students = NewStudent::find($id);

$dhaka = NewStudent::where('district','Dhaka')->get();
$dinajpur = NewStudent::where('district','Dinajpur')->get();
$pabna = NewStudent::where('district','Pabna')->get();
$rangpur = NewStudent::where('district','Rangpur')->get();

return view('frontend.pages.tutionPages.student_details',compact('students','dhaka','dinajpur','pabna','rangpur'));
}

public function student_all(){

    // $students = NewStudent::all();

    return view('frontend.pages.tutionPages.student_all',);
}


public function places2(){
$dhaka = NewStudent::where('district','Dhaka')->get();
$dinajpur = NewStudent::where('district','Dinajpur')->get();
$pabna = NewStudent::where('district','Pabna')->get();
$rangpur = NewStudent::where('district','Rangpur')->get();
    return view('frontend.pages.tutionPages.student_details',compact('dhaka','dinajpur','pabna','rangpur'));
}
public function location(Redirect $redirect, $location){
$location = NewStudent::where('location',$location)->get();
    return view('frontend.pages.tutionPages.student_all',compact('location'));
}

}
