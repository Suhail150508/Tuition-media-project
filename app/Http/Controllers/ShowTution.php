<?php

namespace App\Http\Controllers;

use alert;
use App\Models\User;
use App\Models\Admin;
use App\Models\Opinion;
use App\Models\NewStudent;
use App\Models\NewTeacher;
use Illuminate\Http\Request;
use App\Models\TeacherCategory;
use App\Models\ApplicationTutor;
use Yajra\DataTables\DataTables;
use App\Models\ApplicationTuition;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Console\View\Components\Alert;

// use DataTables;

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
        $teachers_information->experience = $request->experience;
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
        $teacher_all = NewTeacher::all();
        // $categories = TeacherCategory::all();
        return view('frontend.pages.tutionPages.teacher_details',compact('teachers','teacher_all'));
        // return view('frontend.pages.tutionPages.modarn');
    }
    // public function all(Request $request){
    //     $teachers = NewTeacher::paginate(4);
    //     return view('frontend.pages.tutionPages.eadgah',compact('teachers'));

    //     }

    public function search_tutor(Request $request){
        $search_tutors = NewTeacher::where('district',$request->district)->where('gender',$request->gender)->get();
        return view('frontend.pages.tutionPages.modarn',compact('search_tutors'));
// return $search_tutors;
        }

        public function findTuition(Request $request) {

            $tuitions = NewStudent::where('district',$request->district)->where('gender',$request->gender)->get();
            // dd( $tuitions);
            return view ('frontend.pages.tutionPages.findtuition',compact('tuitions'));
          }
        public function opinion(Request $request){

            $opinions= new Opinion;
            $opinions->name=$request->name;
            $opinions->opinion=$request->opinion;

           if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('imagesss',$fileName);
            $opinions->image=$fileName;
        }
        $opinions->save();
        return back()->with('message','Thanks for your opinions');

        }

public function test($id){
  return view('frontend.pages.tutionPages.test');
}

public function all_students(){
    $students = NewStudent::paginate(4);
    return view('frontend.pages.tutionPages.adword',compact('students'));
}

public function tuition(Request $request)
{
    if ($request->ajax()) {
    //     $tuitions = NewStudent::select(['id', 'name', 'class', 'medium', 'schedule', 'days', 'salary'])->get();
    //     return DataTables::of($tuitions)
    //     ->addColumn('action', function ($tuition) {
    //         return '<a href="' . route('all_tuition', $tuition->id) . '" class="btn btn-primary">View Details</a>';
    //     })
    //         ->rawColumns(['action'])
    //         ->make(true);



    $data = NewStudent::select(['id', 'name', 'class', 'medium', 'schedule', 'days', 'salary','created_at','updated_at'])->get();


        if($request->filled('from_date') && $request->filled('to_date'))
        {
            $data = $data->whereBetween('created_at', [$request->from_date, $request->to_date]);
            return DataTables()->of($data)->addIndexColumn()->make(true);
        }
        else{

            return Datatables()->of($data)->make(true);
        }

        }
        return view('frontend.pages.tutionPages.all_tutors');
    }


    public function searchTuition(Request $request){
        $search = $request->search;
        $students = NewStudent::where(function($query)use($search){
                 $query->where('class','like',"%$search%")
                 ->orWhere('medium','like',"%$search%")
                 ->orWhere('gender','like',"%$search%")
                 ->orWhere('subject','like',"%$search%")
                 ->orWhere('salary','like',"%$search%")
                 ->orWhere('schedule','like',"%$search%")
                 ->orWhere('district','like',"%$search%");
                 })->paginate(6);

        // $students = NewStudent::where('class','LIKE','%'.$request->class.'%');
        return view('frontend.pages.tutionPages.adword',compact('students'));
    }

    public function searchTutors(Request $request){

        $search = $request->search;
        $tutors = NewTeacher::where(function($query)use($search){
            $query->where('name','like',"%$search%")
            ->orWhere('institution','like',"%$search%")
            ->orWhere('subject','like',"%$search%")
            ->orWhere('district','like',"%$search%")
            ->orWhere('gender','like',"%$search%")
            ->orWhere('schedule','like',"%$search%")
            ->orWhere('salary','like',"%$search%")
            ->orWhere('present_address','like',"%$search%");
                 })->paginate(6);

        // $students = NewStudent::where('class','LIKE','%'.$request->class.'%');
        return view('frontend.pages.tutionPages.eadgah',compact('tutors'));

    }

    public function applicationTuition(Request $request){

      $request->validate([
            'tuitions_id'=>'required',
            'name'=>'required',
            'cv'=>'required',

      ]);

      $data = new ApplicationTuition;
      $data->tuitions_id= $request->tuitions_id;
      $data->name= $request->name;
      $data->cv= $request->cv;

      $data->save();

      return back()->with('message','Application added successfully');
    }

    public function applicationTutor(Request $request){

        $request->validate([
            'tutors_id'=>'required',
            'name'=>'required',
            'information'=>'required',

      ]);

      $data = new ApplicationTutor;
      $data->tutors_id= $request->tutors_id;
      $data->name= $request->name;
      $data->information= $request->information;

      $data->save();
      return back()->with('message','Application added successfully');

    }

public function loginUser(Request $request){
    $data = User::where('id',$request->id)->where('name',$request->name)->first();

   if(!$data){
    return redirect()->back()->with('message','At first resister here');
   }else{
    $tuitions =  ApplicationTuition::insert([
        'id' => $data->id,
        'name' => $data->name
     ]);
     return view('frontend.pages.tutionPages.tuitionAdmin.admin_login',compact('tuitions'));
   }
}
public function resisterAdmin(){
    return view('frontend.pages.tutionPages.tuitionAdmin.admin_resister');
}

    // public function loginAdmin(Request $request){
    //    $data = User::where('email',$request->email)->where('password',$request->password)->get();
    //    if(!$data == null){
    //    return Redirect()->to('/admin');
    //    }else{
    //     return Redirect()->to('/resister');
    //    }
    // }

}

