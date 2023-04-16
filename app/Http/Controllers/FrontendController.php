<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.welcome');
    }

    public function profile(){
        $user = User::where('id', Auth::id())->first();
        return view('frontend.profile',[
            'user'=>$user,
        ]);
    }
}
