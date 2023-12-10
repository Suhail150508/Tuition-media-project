<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\NewStudent;
use App\Models\NewTeacher;
use Illuminate\Http\Request;
use App\Notifications\NewNotification;


class NotificationController extends Controller
{
    public function notification(Request $request){
        // $users = User::all();
        // foreach ($users as $user)
        // $user->notify(new NewNotification('suhail', 'husain'));
        // $users = NewTeacher::where('created_at', '>=', now()->subDay())->get();
        // $users->notify(new NewNotification($users));
return 'hjkhkj';
      }

      public function changePassword(){
        return view('change_password');
      }
      public function changePasswordStore(Request $request){
        // dd($request);

        $userT = NewTeacher::where('password', $request->old_password)->first();
        $userS = NewStudent::where('password', $request->old_password)->first();

        if ($request->new_password && $userS && $userS->user === 'tuition') {

            $newPassword = bcrypt($request->new_password);
            $userS->update([
                'password' => $newPassword,
            ]);
            Session()->flush();
            return redirect()->to('/')->with('message', 'Successfully Password changed');
          }elseif($request->new_password && $userT && $userT->user === 'tutor'){
            $newPassword = bcrypt($request->new_password);
            $userT->update([
              'password' => $newPassword
            ]);
            Session()->flush();
            return redirect()->to('/')->with('message', 'Successfully Password changed');
          }elseif($request->old_password == null && $request->new_password == null){
            $userS->update([
              'password' => $request->old_password,
            ]);
            $userT->update([
              'password' => $request->old_password,
            ]);
            return redirect()->to('/')->with('message', ' Password does not changed');
          }
          return redirect()->to('/')->with('message', ' Password does not changed');
        }

}
