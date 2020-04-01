<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;

class HomeController extends Controller
{
    
    public function index($slug = null )
    {
        switch($slug){
            case 'user-post-comments':
                $page = ['title' => 'User Post Comments', 'name'=> 'user_post_comments', 'data_list' => User::userListComments() ];
                break;
            case 'guest-comments':
                $page = ['title' => 'Guest Comments', 'name'=> 'guest_comments','data_list' => Comment::guestComments()  ];
                break;
            default:
                $page = ['title' => 'Post', 'name'=> 'posts', 'data_list' => Post::orderBy('created_at','desc')->get()  ];

        }

        $data = [
            'page' => $page,
        ];

        return view('home', $data);
    }
}
