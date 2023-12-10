<?php

namespace App\Http\Controllers;

use App\Models\NewStudent;
use App\Models\NewTeacher;
use Illuminate\Http\Request;

class TuitionHomeController extends Controller
{
    public function index(){
        $teachers=NewTeacher::paginate(9);
        $students=NewStudent::all();

             return view('frontend.pages.tutionPages.shapla',compact('teachers','students'));
    //    return view('welcome',compact('categories','subcategories','brands','units','sizes','colors','products','topProducts','teachers'));

        }
}
