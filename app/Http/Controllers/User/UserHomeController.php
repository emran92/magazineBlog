<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Post;
use App\post_tag;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserHomeController extends Controller
{
    //

    public function index(){
        $user = User::find(1);
        $categories = Category::all();
        $posts = post_tag::with('tag')->where('tag_id',1)->get();
        $popularPosts = post_tag::with('tag')->where('tag_id',2)->get();
        $allPosts = Post::where('status',1)->orderBy('updated_at','DESC')->paginate(6);
        $tags = Tag::all();
        return view('partials.index2',compact('categories','posts','allPosts','tags','user','popularPosts'));
    }

    public function tag(Tag $tag){
        $user = User::find(1);
        $categories = Category::all();
        $posts = post_tag::with('tag')->where('tag_id',1)->get();
        $popularPosts = post_tag::with('tag')->where('tag_id',2)->get();
        $tags = Tag::all();
        $allPosts = $tag->posts();
        return view('partials.index2',compact('categories','posts','allPosts','tags','user','popularPosts'));
    }

    public function category(Category $category){
        $user = User::find(1);
        $categories = Category::all();
        $posts = post_tag::with('tag')->where('tag_id',1)->get();
        $popularPosts = post_tag::with('tag')->where('tag_id',2)->get();
        $tags = Tag::all();
        $allPosts = $category->posts();
        return view('partials.index2',compact('categories','posts','allPosts','tags','user','popularPosts'));
    }
}
