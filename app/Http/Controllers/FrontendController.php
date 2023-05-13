<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class FrontendController extends Controller
{
    public function index(){
        $users = User::limit(4)->get();
        $userone = User::orderBy('count_status' , 'DESC')->first();
        return view('frontend.welcome',[
            'users'=>$users,
            'userone'=>$userone,
        ]);
        
        // dd($userone);
    }

    public function profile(){
        
        $pageViews = Auth::user()->count_status ;
        $pageViews++;
        
        
        User::where('id', Auth::id())->update([
            'count_status'=>$pageViews,
        ]);
        
        $user = User::where('id', Auth::id())->first();
        return view('frontend.profile',[
            'user'=>$user,
        ]);
        
        
    }
    
    public function profile_details( Request $request , $slug){
        
        // return $request->count_status;
        
        // $pageViews = $slug->count_status ;
        // $pageViews++;
        
        // $user = User::where('name',  $slug)->get();
        
        // return $user;
        
        // User::where('name',  $slug)->update([
        //     'count_status'=>$pageViews,
        // ]);
        
        $user = User::where('profile_url', $slug)->first();
        return view('frontend.profile',[
            'user'=>$user,
        ]);
        
       
    }
}
