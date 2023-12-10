<?php

namespace App\Http\Controllers;

use App\Models\NewStudent;
use App\Models\NewTeacher;
use App\Models\User;
use Illuminate\Http\Request;
// use Barryvdh\DomPDF\PDF;

use Barryvdh\DomPDF\Facade\Pdf;
// use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function lang_change(Request $request){
        // dd($request->lang);
        App::setLocale($request->lang);
        Session()->put('lang_code',$request->lang);
        return redirect()->back();
    }

    public function downloadPDFTeacherInfo($id)
    {
        // Fetch user data from the database
        $teacher = NewTeacher::findOrFail($id);

        // Generate PDF using DomPDF
        $pdf = Pdf::loadView('pdf.teacher_info', compact('teacher'));
        // dd($pdf);

        // Set headers for download
        return $pdf->download('teacher_info.pdf');
    }
    public function downloadPDFStudentInfo($id)
    {
        // dd($id);
        // Fetch user data from the database
        $student = NewStudent::findOrFail($id);

        // Generate PDF using DomPDF
        $pdf = Pdf::loadView('pdf.student_info', compact('student'));

        // Set headers for download
        return $pdf->download('student_info.pdf');
    }


}
