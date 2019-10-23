<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Post;
use App\post_tag;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPostController extends Controller
{
    //

    public function post(Post $post){
        $user = User::find(1);
        $categories = Category::all();
        $posts = post_tag::with('tag')->where('tag_id',1)->get();
        $popularPosts = post_tag::with('tag')->where('tag_id',2)->get();
        $allPosts = Post::all();
        $tags = Tag::all();
        return view('partials.post',compact('post','categories','posts','tags','allPosts','user','popularPosts'));
    }
}
