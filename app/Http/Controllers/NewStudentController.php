<?php

namespace App\Http\Controllers;

use App\Models\NewStudent;
use Illuminate\Http\Request;

class NewStudentController extends Controller
{
public function all_tutor(){
return view('frontend.pages.tutionPages.all_tutors');

}
}
