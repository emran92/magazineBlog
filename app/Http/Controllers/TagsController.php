<?php

namespace App\Http\Controllers;


use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function tags(){
        $tags = Tag::all();
        return view('tag.tags',compact('tags'));
    }


    public function create(){
        return view('tag.add_tag');
    }

    public function store(Request $request){

        //$data = $request->all();
        //echo "<pre>"; print_r($data); die;


        $tag = new Tag();

        $tag -> name = $request->name;
        $tag -> slug = $request->slug;


        $tag ->save();

        return redirect()->back();
    }

    public function edit(Request $request, $id=null){

        if($request->isMethod('post')){
            $data = $request->all();

            Tag::where(['id'=>$id])->update(['name'=>$data['name'],
                'slug'=>$data['slug']]);
            return redirect('/tags')->with('flash_message_success','Tag Edited Successfully');
        }
        $tag = Tag::where(['id'=>$id])->first();
        return view('tag.edit_tag')->with(compact('tag'));
    }

    public function deleteTag($id=null){
        Tag::where(['id'=>$id])->delete();
        return redirect()->back();
    }
}
