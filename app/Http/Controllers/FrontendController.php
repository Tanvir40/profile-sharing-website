<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class FrontendController extends Controller
{
    public function index(){
        $users = User::all();
        $userone = User::first();
        return view('frontend.welcome',[
            'users'=>$users,
            'userone'=>$userone,
        ]);
    }

    public function profile(){
        $user = User::where('id', Auth::id())->first();
        return view('frontend.profile',[
            'user'=>$user,
        ]);
    }
    
    public function profile_details($slug){
        //return $slug;
        $user = User::where('profile_url', $slug)->first();
        return view('frontend.profile',[
            'user'=>$user,
        ]);
    }
}
