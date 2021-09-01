<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPost;

class UserPostController extends Controller
{
    public function index()
    {
        // $posts = UserPost::paginate(5); 
        //this is the easiest way for implementing pagination 
        // but it will need navigation buttons

        $posts = UserPost::get(['id', 'title', 'body']);
        return $posts;
    }

    public function show(UserPost $userPost)
    {
        return $userPost;
    }
}