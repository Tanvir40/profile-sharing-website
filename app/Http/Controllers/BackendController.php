<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller


{

    function banner_update(Request $request){
        $uploaded_file = $request->banner;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = substr(md5(time()), 0, 10).'.'.$extension;
        $uploaded_file->move("banner", $file_name);

        User::where('id', $request->id)->update([
            'banner'=>$file_name,
        ]);
        return back();
    }

    function name_update(Request $request){

        if($request->name && $request->profile_photo){
            
             $request->validate([
                'profile_photo'=>'required | image | max:3072 | mimes:jpeg,png,jpg,gif',
            ]);
           
            $uploaded_file = $request->profile_photo;
            $extension = $uploaded_file->getClientOriginalExtension();
            $file_name = substr(md5(time()), 0, 10).'.'.$extension;
            $uploaded_file->move("profile", $file_name);

            User::where('id', $request->id)->update([
                'name'=>$request->name,
                'profile_photo'=>$file_name,
            ]);
            return back();

        }elseif($request->name ){
            User::where('id', $request->id)->update([
                'name'=>$request->name,
            ]);
            return back();
        }
        else{
            
            $request->validate([
                'profile_photo'=>'required | image | max:3072 | mimes:jpeg,png,jpg,gif',
            ]);
            
            $uploaded_file = $request->profile_photo;
            $extension = $uploaded_file->getClientOriginalExtension();
            $file_name = substr(md5(time()), 0, 10).'.'.$extension;
            $uploaded_file->move("profile", $file_name);

            User::where('id', $request->id)->update([
                'profile_photo'=>$file_name,
            ]);
            return back();
        }
    }

    function desp_update(Request $request){
        User::where('id', $request->id)->update([
            'profile_desp'=>$request->profile_desp,
        ]);
        return back();
    }

    function photo_update(Request $request){
        if($request->photo_one && $request->photo_two){
            
            $request->validate([
                'photo_one'=>'required | image | max:3072 | mimes:jpeg,png,jpg,gif',
            ]);
            
            $request->validate([
                'photo_two'=>'required | image | max:3072 | mimes:jpeg,png,jpg,gif',
            ]);
           
            $uploaded_file = $request->photo_one;
            $extension = $uploaded_file->getClientOriginalExtension();
            $file_name = substr(md5(time()), 0, 10).'.'.$extension;
            $uploaded_file->move("photo", $file_name);

            $uploaded_files = $request->photo_two;
            $extensions = $uploaded_files->getClientOriginalExtension();
            $file_names = substr(md5(time()), 0, 10).'.'.$extension;
            $uploaded_files->move("photo", $file_names);

            User::where('id', $request->id)->update([
                'photo_one'=>$file_name,
                'photo_two'=>$file_names,
            ]);
            return back();

        }elseif($request->photo_one){
            
            $request->validate([
                'photo_one'=>'required | image | max:3072 | mimes:jpeg,png,jpg,gif',
            ]);

            $uploaded_file = $request->photo_one;
            $extension = $uploaded_file->getClientOriginalExtension();
            $file_name = substr(md5(time()), 0, 10).'.'.$extension;
            $uploaded_file->move("photo", $file_name);

            User::where('id', $request->id)->update([
                'photo_one'=>$file_name,
            ]);
            return back();
        }
        else{
            
            $request->validate([
                'photo_two'=>'required | image | max:3072 | mimes:jpeg,png,jpg,gif',
            ]);
            
            $uploaded_file = $request->photo_two;
            $extension = $uploaded_file->getClientOriginalExtension();
            $file_name = substr(md5(time()), 0, 10).'.'.$extension;
            $uploaded_file->move("photo", $file_name);

            User::where('id', $request->id)->update([
                'photo_two'=>$file_name,
            ]);
            return back();
        }
    }

    function video_update(Request $request){
        if($request->video_one && $request->video_two){
            User::where('id', $request->id)->update([
                'video_one'=>$request->video_one,
                'video_two'=>$request->video_two,
            ]);
            return back();
        }elseif($request->video_one){
            User::where('id', $request->id)->update([
                'video_one'=>$request->video_one,
            ]);
            return back();
        }else{
            User::where('id', $request->id)->update([
                'video_two'=>$request->video_two,
            ]);
            return back();
        }
    }

    function profile_update(Request $request){


    //    return $request->all();
    //    die();
        // $request->validate([
        //     'old_password'=>'required',
        //     'password'=>'required',
        //     'confirmpassword'=>'required',
        //     'password'=>Password::min(8)
        //                      ->letters()
        //                      ->mixedCase()
        //                      ->numbers()
        //                      ->symbols(),
        //      'password'=>'confirmed',
        // ]);
 
        if(Hash::check($request->old_password , Auth::user()->password)){
            if(Hash::check($request->password , Auth::user()->password)){
                return back()->with('massage', 'You already using this password!');
            }
            else{
                User::find($request->id)->update([
                    'password'=>bcrypt($request->password),
                    'updated_at'=>carbon::now(),
                ]);
                return back()->with('massage', 'Password updated Succesfully!');
            }
            return back()->with('massage', 'Old Password Dosent match');
        } 
        return back()->with('massage', 'SomeThing Wrong');
    }

    function social_update(Request $request){
        User::where('id', $request->id)->update([
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'linkedin'=>$request->linkedin,
            'instragram'=>$request->instragram,
            'tumblr'=>$request->tumblr,
            'quora'=>$request->quora,
            'reddit'=>$request->reddit,
            'youtube'=>$request->youtube,
            'whatsapp'=>$request->whatsapp,
            'telegram'=>$request->telegram,
        ]);
        return back();
    }

    function profile_url_update(Request $request){
        User::where('id', $request->id)->update([
            'profile_url'=>$request->profile_url,
        ]);
        return back();
    }
    
   
}
