<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontendController extends Controller
{
    //
    public function index(){
        $featured_products = Product::where('trending','1')->take(15)->get();
        $popular_category = Category::where('popular','1')->take(15)->get();
        return view('frontend.index',compact('featured_products','popular_category'));
    }

    public function category(){
        $category = Category::where('status','0')->take(15)->get();
        return view('frontend/category',compact('category'));
    }

    public function cateproduct($slug){
       if(Category::where('slug', $slug)->exists()){
        $category = Category::where('slug', $slug)->first(); 
        $products = Product::where('cate_id', $category->id)->where('status','0')->get();
        return view('frontend.cateproducts',compact('category','products'));
       }
       else{
           return redirect('frontend.category')->with('status','Category selected does not exist');
       }
    }

    public function prodetails($cate_slug , $pro_slug){
        if(Category::where('slug', $cate_slug)->exists()){
           if(Product::where('slug', $pro_slug)->exists()){
               $products = Product::where('slug', $pro_slug)->first();
               return view('frontend.productsdetails', compact('products'));
           }
           else{
               return redirect ('frontend.category')->with('status','Product selected doesnt exist');
           }
        }
           else{
            return redirect ('frontend.category')->with('status','Broken link');
        }

    }

    public function shop(){
        return view ('frontend.shop-details');
    }
 public function blog(){
        return view ('frontend.blog');
    }

public function contact(){
        return view ('frontend.contact');
    }


public function beads(){
        return view ('frontend.beads');
    }

  public function bags(){
        return view ('frontend.bags');
    }  

  public function footwear(){
        return view ('frontend.footwear');
    }

  public function clothing(){
        return view ('frontend.clothing');
    }        
}

