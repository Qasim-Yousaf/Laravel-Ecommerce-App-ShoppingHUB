<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Image;
class ProductController extends Controller
{
	public function index(){

		/* this function is used for API calling */
		$Product= Product::all();
		return $Product;
	}


	public function show(){

		$Product= Product::all();
//dd($Product);
		return view('admin.product.productshow', compact('Product'));
	}

	
	public function create(){

		$Category=Category::all();
		return view('admin.product.create',compact('Category'));
	}


	public function store(Request $request){
	
		$this->validate($request,[
			'name'=>'required',
			'description'=>'required',
			'image'=>'required',
			'brand'=>'required',
			'price'=>'required',
			'quantity'=>'required',
			'color'=>'required',
			'size'=>'required',
			'product_code'=>'required',
			
		]);

		$product= new Product;
		

        if ($request->hasFile('image')) {

        $image =  $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('img/'.$filename);
        Image::make($image)->resize(600,500)->save($location);//make a object of image 


        $product->image= $filename;
        }

		$product->name= $request->name;
		$product->brand= $request->brand;
		$product->quantity= $request->quantity;		
		$product->description= $request->description;
		$product->famous = $request->famous;
		$product->feature = $request->feature;
		$product->product_code = $request->product_code;
		$product->size = $request->size;
		$product->color = $request->color;
		$product->price= $request->price;
		$product->save();
		
		$product->categorys()->sync($request->categorys);


		return redirect(route('product'));

	}

	public function destroy($id){
		
		Product::where('id',$id)->delete();

		return redirect()->back();
	}

	public function edit($id){
		$Category=Category::all();

		$Product = Product::with('categorys')->where('id',$id)->first();


//dd($Product);

		return view('admin.product.edit',compact('Product','Category'));
	}

	public function update(Request $request,$id){

		$this->validate($request,[
			'name'=>'required',
			'description'=>'required',
			
			'price'=>'required',
			'brand'=>'required',
			'quantity'=>'required',
			'color'=>'required',
			'size'=>'required',
			'product_code'=>'required',
			
			
		]);

		$product=Product::find($id);

		if ($request->hasFile('image')) {

        $image =  $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('img/'.$filename);
        Image::make($image)->save($location);//make a object of image 


        $product->image= $filename;
        }
		$product->name= $request->name;
		$product->brand= $request->brand;
		$product->quantity= $request->quantity;		
		$product->description= $request->description;
		$product->famous = $request->famous;
		$product->price= $request->price;
		$product->product_code = $request->product_code;
		$product->size = $request->size;
		$product->color = $request->color;
		$product->categorys()->sync($request->categorys);
		$product->save();


		return redirect(route('product'));
	}

}
