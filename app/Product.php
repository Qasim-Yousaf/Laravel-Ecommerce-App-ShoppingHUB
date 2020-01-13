<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable=['name','description','image','brand','price','quantity','product_code','size','color'];


    public function categorys(){
    	return $this->belongsToMany('App\Category','Product_Categorys')->withTimestamps();
    }
 
	public function getRouteKeyName(){

    	return 'name';
    }

}


// return $this->belongstoMany('App\Post','Post_Tags')->orderBy('created_at','DESC')