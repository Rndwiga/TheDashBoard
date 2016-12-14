<?php
/*
* This service provider will be used for auto generating data used in the whole application
* Its registered in the Config\app.php provider array
* Output: model data
*/
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\User;

class tyondoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      // Using Closure based composers...
      View::composer('layouts.admin', function ($view) {
        $user = User::find(Auth::user()->id);
          $view->with('user', $user);
        /*  $user = User::with(['userProfile'])->find(Auth::user()->id);
          $isProfileSet = $user->userProfile; //check if profile table is set if not load defaults
            if($isProfileSet == NULL)
            {
                $user = User::find(Auth::user()->id); //fetching basic user info
                $user->userProfile = (object)array('profile_picture' => asset('data/profile/avatar-2.png ')); //setting default user profile
                $view->with('user', $user);
            }else {
                //return view('home')->with('user', $user);
                $view->with('user', $user);
            }
          */
      });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
