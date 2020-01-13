<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Banner;
use App\Massage;
use Image;

class BannerController extends Controller
{




    public function showmassage(){
         $Massage = Massage::all();
        return view('admin.Massage.showmassage',compact('Massage'));
    }


    public function header(){
        $Banner= Banner::all();
        return view('user.layout.header', compact('Banner'));        
    }


    public function show(){

    	$Banner= Banner::all();
    	return view('admin.banner.bannershow', compact('Banner'));
    }


    public function create(){
    	return view('admin.banner.create');
    }

    

    public function store(Request $request){
    	$this->validate($request,[
    		'image'=>'required',
            'title'=>'required',
            'subtitle'=>'required'
    	]);

        $banner = new Banner;

        if ($request->hasFile('image')) {

        $image =  $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('img/'.$filename);
        Image::make($image)->save($location);//make a object of image 


        $banner->image= $filename;
        }

    	
    	
        $banner->Title= $request->title;
        $banner->subTitle = $request->subtitle;
    	$banner->save();

    	return redirect(route('banner'));
    }

    

    public function destroy($id){

        Banner::where('id',$id)->delete();

        return redirect()->back();
        //->back('success','Record Deleted Sucessfuly');
    }

    public function edit($id){

        // return $id;
        // $Banner = Banner::where('id',$id)->first();return $Banner;
        $Banner = Banner::where('id',$id)->first();
        return view('admin.banner.edit',compact('Banner'));
    }

    public function update(Request $request,$id){
            
            $this->validate($request,[
            'image'=>'required'
        ]);
            if ($request->hasFile('image')) {


         $imageName =   $request->image->store('public');


        }

        $banner =Banner::find($id);
        $banner->image=  $imageName;
        $banner->save();

        return redirect(route('banner'));
    
    }
        
}
