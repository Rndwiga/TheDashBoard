<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'gender', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

      public function userProfile()
      {
        //each user has a single profile
          return $this->hasOne('App\UserProfile');
      }
      public function post()
      {
        //a user can have many/multiple posts
        return $this->hasMany('App\Post', 'author_id');
      }
      public function comment()
      {
        //a user can have may comments
        return $this->hasMany('App\Comment', 'from_user');
      }
      public function can_post()
      {
        //setting role that can create posts
        $role = $this->role;
        if($role == 'author' || $role == 'admin')
          {
            return true;
          } else {
            return false;
          }
      }
      public function is_admin()
      {
        //checking if the user is an admin
        $role = $this->role;
        if($role == 'admin')
          {
            return true;
          }else {
            return false;
          }
      }
}
