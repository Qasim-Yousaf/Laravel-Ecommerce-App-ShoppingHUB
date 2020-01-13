<?php
 
namespace App\Http\Controllers;
use App\Banner;
use App\Product;    
use App\Category;
use App\Massage;
use Illuminate\Http\Request;
class UserHomeController extends Controller
{
    

    public function index(){
 
    	$Banner=Banner::all();
        $Category=Category::all(); 
        $Products = Product::all()->where('famous',true);   
        $features = Product::all()->where('feature',true);   
 
    	return view('user.app',compact('Banner','Category','Products','features'));
    }


    public function about(){
  
         $Category=Category::all();
        $Banner= Banner::all();
        $Product=Product::all();
        return view('user.about',compact('Category','Banner','Product'));
    }

    public function category($id){
        
        $Category=Category::all();
        $Products = Category::where('id',$id)->with('products')->get();
        $Banner = Banner::all();
         $features = Product::all()->where('feature',true); 
     return view('user.cateogory_with_product',compact('Category','Products','Banner','features'));
    }


    public function singleproduct($id){


             $Category = Category::all();

             $Products =Product::where('id',$id)->get();

            $Banner = Banner::all();

               $features = Product::all()->where('feature',true); 
               return view('user.singleproduct',compact('Category','Products','Banner','features'));

    } 

    public function banner(){

         $Banners=Banner::all();
         $Category = Category::all();
         $Product = Product::all();            
     
        return view('user.layout.header', compact('Banners','Category','Product'));
    }

       public function massage(Request $request)
    {
        
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'massage'=>'required',           
        ]);
        $mass = new Massage;
  
        $mass->name= $request->name;
        $mass->email= $request->email;
        $mass->subject= $request->subject;
        $mass->massage=$request->massage;     
        
        $mass->save();
        
            return redirect(route('about'));

}
}
