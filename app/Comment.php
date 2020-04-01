<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Comment extends Model 
{

    protected $table = 'Comments';
    public $timestamps = true;
    protected $fillable = array('post_id', 'name', 'email', 'website', 'comment');
   
    protected $touches = ['post'];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public static function guestComments(){
        
        $user_email = Arr::flatten(User::select('email')->get()->toArray());

        return self::all()->whereNotIn('email', ($user_email) );
    }

    
}