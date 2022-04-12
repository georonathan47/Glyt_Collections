<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

     public function shop(){
        return view('frontend.shop-details');
    }

     public function blog(){
        return view('frontend.blog');
    }

     public function contact(){
        return view('frontend.contact');
    }

     public function beads(){
        return view('frontend.beads');
    }

     public function bags(){
        return view('frontend.bags');
    }

     public function footwear(){
        return view('frontend.footwear');
    }

     public function clothing(){
        return view('frontend.clothing');
    }
}
