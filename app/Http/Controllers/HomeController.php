<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserProfile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with(['userProfile'])->find(Auth::user()->id);
          $isProfileSet = $user->userProfile; //check if profile table is set if not load defaults
            if($isProfileSet == NULL)
            {
                $user = User::find(Auth::user()->id); //fetching basic user info
                $user->userProfile = (object)array('profile_picture' => asset('data/profile/avatar-2.png ')); //setting default user profile
                return view('home')->with('user', $user);
            }else {
                return view('home')->with('user', $user);
            }

    }
}
