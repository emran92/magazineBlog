<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    //
    public function posts(){
        $posts = Post::all();
        return view('posts.posts',compact('posts'));
    }

    public function view($id){
        $tags = Tag::all();
        $categories = Category::all();
        $posts = Post::with('tags','categories')->where(['id'=>$id])->first();
        return view('posts.view',compact('posts','tags','categories'));
    }


    public function create(){
        $tags = Tag::all();
        $categories = Category::all();
        return view('posts.add_post',compact('tags','categories'));
    }

    public function store(Request $request){

        //$data = $request->all();
        //echo "<pre>"; print_r($data); die;
        $post = new Post();

        $post -> title = $request->title;
        $post -> body = $request->body;
        $post -> slug = $request->slug;
        $post -> subtitle = $request->subtitle;
        $post -> status = $request->status;
        if($request->hasFile('image')){
            $image       = $request->file('image');
            $filename    = $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(600, 450);
            $image_resize->save(public_path('images/' .$filename));

            $post->image = $filename;
        }
        $post ->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect()->back();
    }

    public function edit(Request $request, $id){

            if($request->isMethod('post')){
                $data = $request->all();
                //echo "<pre>"; print_r($data); die;
                $post = Post::find($id);
                if($request->hasFile('image')){
                    $image       = $request->file('image');
                    $filename    = $image->getClientOriginalName();

                    $image_resize = Image::make($image->getRealPath());
                    $image_resize->resize(600, 450);
                    $image_resize->save(public_path('images/' .$filename));

                    $post->image = $filename;
                }
                else if(!empty($data['current_image'])){
                    $filename = $data['current_image'];
                }else{
                    $filename = '';
                }
                if(empty($request['status'])){
                    $status='0';
                }else{
                    $status='1';
                }


                $post -> title = $request->title;
                $post -> body = $request->body;
                $post -> slug = $request->slug;
                $post -> subtitle = $request->subtitle;
                $post -> status = $request->status;
                $post ->update();
                $post->tags()->sync($request->tags);
                $post->categories()->sync($request->categories);
                return redirect('admin/posts')->with('flash_message_success','Post Edited Successfully');
            }
            $tags = Tag::all();
            $categories = Category::all();
            $posts = Post::with('tags','categories')->where(['id'=>$id])->first();
            return view('posts.edit_post')->with(compact('posts','tags','categories'));
    }

    public function deletePostImage($id = null){
        Post::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success','Post image has been deleted Successfully!');
    }

    public function deletePost($id=null){
        Post::where(['id'=>$id])->delete();
        return redirect()->back();
    }

}
