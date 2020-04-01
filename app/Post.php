<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model 
{

    protected $table = 'Posts';
    public $timestamps = true;
    protected $fillable = array('title', 'slug', 'content');

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function user(){
        return $this->belongsTo('App\User')->orderBy('created_at','desc');
    }

}