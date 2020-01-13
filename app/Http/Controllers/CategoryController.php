<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
    public function index(){

     

        // return view('admin.category.categoryshow', compact('Category'));


    }

    public function show(){

        $Category = Category::all();

    	return view('admin.category.categoryshow',compact('Category'));
    }

    public function create(){
    	return view('admin.category.create');
    }

    public function store(Request $request){

        $this->validate($request,[
        'name'=>'required',

        ]);

        $category = new Category;
        $category->name= $request->name;
        $category->save();

        
        return redirect(route('category'))  ;

    }

    public function destroy($id){

        Category::where('id',$id)->delete();

        return redirect()->back();
        
        //->back('success','Record Deleted Sucessfuly');
    }

    public function edit($id){

        $Category= Category::where('id',$id)->first();

        return view('admin.category.edit',compact('Category'));
    }

    public function update(Request $request,$id){

         $this->validate($request,[
        'name'=>'required',

        ]);

        $category =Category::find($id);
        $category->name= $request->name;
        $category->save();

        
        return redirect(route('category'))  ;

    }

}