<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
    ];

    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function comments(){
        return $this->hasMany('App\Comment','email','email');
    }

    public static function userListComments(){
        
        $userComments = [];

         Self::all()->each(function($user) use (&$userComments){
            $userComments[] = [
                "name" => $user->name,
                "email" => $user->email,
                "comments" => $user->comments()->get(),
            ];

        });

        return $userComments;
    }
}
