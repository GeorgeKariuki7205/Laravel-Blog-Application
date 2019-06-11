<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
Use App\Role;
class LoadController extends Controller
{
    public function home(){
        $posts = Post::all();
        $value ="String";
       
        return view('welcome', compact('posts','value'));
    }
    public function singleBlog($user_id,$id){
        $blogItem= Post::find($id);
        $user = Post::find($user_id)->user;
        return view('users\singleBlog', compact('blogItem','user'));

        // return $user->name;
    }
}
