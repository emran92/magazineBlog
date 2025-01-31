<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function categories(){
        $categories = Category::all();
        return view('category.categories',compact('categories'));
    }


    public function create(){
        return view('category.add_category');
    }

    public function store(Request $request){

        //$data = $request->all();
        //echo "<pre>"; print_r($data); die;
        $category = new Category();

        $category -> name = $request->name;
        $category -> slug = $request->slug;


        $category ->save();

        return redirect()->route('categories')->with('flash_message_success','New Category Added');

    }

    public function edit(Request $request, $id=null){

        if($request->isMethod('post')){
            $data = $request->all();

            Category::where(['id'=>$id])->update(['name'=>$data['name'],
                'slug'=>$data['slug']]);
            return redirect('admin/categories')->with('flash_message_success','Category Edited Successfully');
        }
        $category = Category::where(['id'=>$id])->first();
        return view('category.edit_category')->with(compact('category'));
    }

    public function deleteCategory($id=null){
        Category::where(['id'=>$id])->delete();
        return redirect()->back();
    }
}
