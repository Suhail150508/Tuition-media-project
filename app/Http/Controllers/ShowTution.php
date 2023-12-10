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
use App\Notifications\NewNotification;
use Illuminate\Contracts\Session\Session;
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

    public function teacherInfo (){
        return view('frontend.pages.tutionPages.teacher_info');
    }
    // public function teacherStoreInfo(Request $request){
    //     $teachers_information = new NewTeacher();
    //     $teachers_information->name = $request->name;
    //     $teachers_information->email = $request->email;
    //     $teachers_information->user = 'tutor';
    //     $teachers_information->password = $request->password;
    //     $teachers_information->mobile = $request->mobile;
    //     $teachers_information->experience = $request->experience;
    //     $teachers_information->gender = $request->gender;
    //     $teachers_information->institution = $request->institution;
    //     $teachers_information->subject = $request->subject;
    //     $teachers_information->district = $request->district;
    //     $teachers_information->present_address = $request->present_address;
    //     $teachers_information->schedule = $request->schedule;
    //     $teachers_information->student_level = $request->student_level;
    //     $teachers_information->prefered_subject = $request->prefered_subject;
    //     $teachers_information->salary = $request->salary;

    //     // $teachers_information->image =$request->file('image')->store('teacher');
    //     // $teachers_information->save();

    //     if($request->hasFile('image'))
    //     {
    //         $file=$request->file('image');
    //         $extension = $file->getClientOriginalExtension();
    //         $fileName = time().'.'. $extension;
    //         $file->move('teacher', $fileName);
    //         $teachers_information->image = $fileName;
    //     }
    //     $teachers_information->save();

    //     // $email = NewTeacher::where('mobile',$request->mobile)->first();
    //     // $email->notify(new NewNotification());

    //     $users = NewTeacher::where('created_at', '>=', now()->subDay())->get();

    //     foreach($users as $user){
    //         $user->notify(new NewNotification());
    //     }
    //     return redirect()->to('/login-tutor')->with('message','আপনাকে ধন্যবাদ !');
    // }


    public function teacherStoreInfo(Request $request)
{
    $teachers_information = new NewTeacher();
    $teachers_information->name = $request->name;
    $teachers_information->email = $request->email;
    $teachers_information->user = 'tutor';
    $teachers_information->password = $request->password;
    $teachers_information->mobile = $request->mobile;
    $teachers_information->experience = $request->experience;
    $teachers_information->gender = $request->gender;
    $teachers_information->institution = $request->institution;
    $teachers_information->subject = $request->subject;
    $teachers_information->district = $request->district;
    $teachers_information->present_address = $request->present_address;
    $teachers_information->schedule = $request->schedule;
    $teachers_information->student_level = $request->student_level;
    $teachers_information->prefered_subject = $request->prefered_subject;
    $teachers_information->salary = $request->salary;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $file->move('teacher', $fileName);
        $teachers_information->image = $fileName;
    }

    $teachers_information->save();

    // Sending notification to the newly created teacher
    $teachers_information->notify(new NewNotification($teachers_information));

    return redirect()->to('/login-tutor')->with('message', 'আপনাকে ধন্যবাদ !');
}


    public function teacher_details($id){

        $teachers = NewTeacher::find($id);
        $teacher_all = NewTeacher::all();
        $user = User::find('1');
        // $categories = TeacherCategory::all();
        return view('frontend.pages.tutionPages.teacher_details',compact('teachers','teacher_all','user'));
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
                 ->orWhere('district','like',"%$search%")
                 ->orWhere('local_address','like',"%$search%");
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
                 })->paginate(9);

        // $students = NewStudent::where('class','LIKE','%'.$request->class.'%');
        return view('frontend.pages.tutionPages.eadgah',compact('tutors'));

    }

    public function applicationTuition($id){

        $user = Session()->get('user');
        if($user){
            $user = NewTeacher::where('user',$user)->first();
            // dd($name);
            if($user->user == 'tutor'){
                ApplicationTuition::insert([
                    'tuitions_id'=>$id,
                    'name' => $user->name,
                    'cv' =>'Finding tuition'
                    ]);
                return redirect()->back()->with('message','Application successfully added');
            }else{
                return redirect()->to('/login-tutor')->with('message','You do not have registration' );
            }
            }else{

                return redirect()->to('/login-tutor')->with('message','You do not have registration' );
            }

    }

    public function applicationTutor($id){
        $user = Session()->get('user');
        $user = NewStudent::where('user',$user)->first();
        // dd($user->name );
        if($user->user =='tuition'){
            ApplicationTutor::insert([
                'tutors_id'=>$id,
                'name' =>$user->name,
                'information' =>'Finding tutors'
                ]);
            return redirect()->back()->with('message','Application successfully added');
        }else{
          return redirect()->to('/login-tuition')->with('message','You do not have registration' );
        }


    //     $request->validate([
    //         'tutors_id'=>'required',
    //         'name'=>'required',
    //         'information'=>'required',

    //   ]);

    //   $data = new ApplicationTutor;
    //   $data->tutors_id= $request->tutors_id;
    //   $data->name= $request->name;
    //   $data->information= $request->information;

    //   $data->save();
    //   return back()->with('message','Application added successfully');

    }

public function loginTutor(){
return view('frontend.pages.tutionPages.tuitionAdmin.login_tutor');
}
public function loginTuition(){
return view('frontend.pages.tutionPages.tuitionAdmin.login_tuition');
}

public function loginStoreTutor(Request $request)
{
    $request->validate([
        'email' => 'required|string',
        'password' => 'required|string',
        'g-recaptcha-response' => 'required|captcha'
    ], [
        'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
        'g-recaptcha-response.captcha' => 'Captcha error! Try again later .',
    ]);

    $userT = NewTeacher::where('email', $request->email)->where('password', $request->password)->first();
    $userS = NewStudent::where('email', $request->email)->where('password', $request->password)->first();

    if ($userS && $userS->user === 'tuition') {
        // dd('ok s');
        Session()->put('id', $userS->id);
        Session()->put('user', $userS->user);
        return redirect()->to('/')->with('message', 'Successfully Tutor logged in');
    } elseif ($userT && $userT->user === 'tutor') {
        // dd('ok t');
        Session()->put('id', $userT->id);
        Session()->put('user', $userT->user);
        return redirect()->to('/')->with('message', 'Successfully Tuition logged in');
    } else {
        // if ($userT && $userT->user === 'tutor') {
        //     return redirect()->to('/teacher_info')->with('message', 'You do not have registered');
        // }
        // if ($userS && $userS->user === 'tuition') {
        //     return redirect()->to('/places1')->with('message', 'You do not have registered');
        // }
        return back()->with('message', 'Do not match password, please register');

    }
}


// public function loginStoreTutor(Request $request){

//     $request->validate([
//         'email' => 'required|string',
//         'password' => 'required|string',
//         'g-recaptcha-response' => 'required|captcha'

//         // 'g-recaptcha-response' => [
//         //     'required' => 'Please verify that you are not a robot.',
//         //     'captcha' => 'Captcha error! try again later or contact site admin.',
//         // ],
//     ]);
//     // dd($request->email);
//     $userT = NewTeacher::where('email',$request->email)->where('password',$request->password)->first();
//     $userS = NewStudent::where('email',$request->email)->where('password',$request->password)->first();

//     if($userS->user === 'tuition'){
//          dd('ok t');
//         Session()->put('id',$userS->id);
//         Session()->put('user',$userS->user);
//         return redirect()->to('/')->with('message','successfully Tutor loged in');
//     }
//     elseif($userT->user === 'tutor'){
//         dd('ok s');
//         Session()->put('id',$userT->id);
//         Session()->put('user',$userT->user);
//         return redirect()->to('/')->with('message','successfully Tuition loged in');
//     }
//     else{
//         if($userT->user === 'tutor'){
//         return redirect()->to('/teacher_info')->with('message','You do not have registered' );
//     }
//     if($userS->user === 'tuition'){
//             return redirect()->to('/places1')->with('message','You do not have resistered' );
//         }
//     }
// //    $user = NewTeacher::where('email',$request->email)->where('password',$request->password)->first();
// // if($user){
//         //     Session()->put('tutor_id',$user->id);
//         //     Session()->put('user',$user->user);
//     //     return redirect()->to('/')->with('message','successfully loged in');
//     // }else{
//     //   return redirect()->to('/teacher_info')->with('message','You do not have registered' );
//     // }

// //     $data = ApplicationTutor::where('tutors_id',$request->id)->first();
// //    if(!$data){
// //         ApplicationTutor::insert([
// //             'tutors_id'=>$request->id,
// //             'name' => 'tuition',
// //             'information' =>'new tuition'
// //             ]);
// //         return redirect()->back()->with('message','Application successfully added');
// //    }else{
// //     ApplicationTutor::insert([
// //         'tutors_id'=>$request->id,
// //         'name' => 'old tuition',
// //         'information' =>'old tuition'
// //         ]);
// //     return redirect()->back()->with('message','Application added successfully');
//     //  return view('frontend.pages.tutionPages.tuitionAdmin.admin_login',compact('tuitions'));

// }

public function resisterUser(){
    return view('frontend.pages.tutionPages.tuitionAdmin.admin_resister');
}
public function resisterStoreUser(Request $request){

    $request->validate([
    'name' => 'required|min:3|max:50',
    'email'=> 'email',
    'password'=> 'required|min:6',
    'mobile'=> 'max:13',

    ]);

    $data = new User;
    $data->naem = $request->naem;
    $data->email = $request->email;
    $data->password = bcrypt($request->password);
    $data->mobile = $request->mobile;
    $data->save();

    return redirect()->to('/user-login')->with('message','Successfully resistered');
}

    // public function loginAdmin(Request $request){
    //    $data = User::where('email',$request->email)->where('password',$request->password)->get();
    //    if(!$data == null){
    //    return Redirect()->to('/admin');
    //    }else{
    //     return Redirect()->to('/resister');
    //    }
    // }

    public function logOut(){
        Session()->flush();
        return Redirect::to('/')->with('message','Loged Out');
    }
}

