<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BackendController extends Controller
{
    function name_update(Request $request){

        if($request->name && $request->profile_photo){
           
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
}
