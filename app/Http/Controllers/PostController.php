<?php

namespace App\Http\Controllers;

use App\Post;
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


    public function create(){
        return view('posts.add_post');
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
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->save($location);

            $post->image = $filename;
        }

        $post ->save();

        return redirect()->back();
    }

    public function edit(Request $request, $id=null){

            if($request->isMethod('post')){
                $data = $request->all();
                //echo "<pre>"; print_r($data); die;
                $post = new Post();
                if($request->hasFile('image')){
                    $image = $request->file('image');
                    $filename = time() . '.' . $image->getClientOriginalExtension();
                    $location = public_path('images/'.$filename);
                    Image::make($image)->save($location);

                    $post->image = $filename;
                }
                else if(!empty($data['current_image'])){
                    $filename = $data['current_image'];
                }else{
                    $filename = '';
                }

                Post::where(['id'=>$id])->update(['title'=>$data['title'],
                    'body'=>$data['body'],'subtitle'=>$data['subtitle'],
                    'slug'=>$data['slug'],'status'=>$data['status'],'image'=>$filename]);
                return redirect('/posts')->with('flash_message_success','Post Edited Successfully');
            }
            $posts = Post::where(['id'=>$id])->first();
            return view('posts.edit_post')->with(compact('posts'));
    }

    public function deletePostImage($id = null){
        Post::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success','Post image has been deleted Successfully!');
    }

}
