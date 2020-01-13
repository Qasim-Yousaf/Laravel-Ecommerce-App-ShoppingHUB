<?php

namespace App\Http\Controllers;
use App\Banner;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Banner=Banner::all();
        $Category=Category::all();
        $Product = Product::all();
        return view('home',compact('Banner','Category','Product'));
    }
    
}
