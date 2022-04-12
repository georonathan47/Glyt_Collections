<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }

    public function add(){
        return view('admin.add');
    }

    public function insertc(Request $request){
        $category = new Category();
           if($request ->hasFile('image')){
               $file = $request->file('image');
               $ext = $file->getClientOriginalExtension();
               $filename = time().'.'.$ext;
               $file->move('assets/upload/category',$filename);
               $category->image = $filename;
           }

           $category->name = $request->input('name');
           $category->slug = $request->input('slug');
           $category->description = $request->input('description');
           $category->status = $request->input('status') == TRUE ? '1':'0';
           $category->popular = $request ->input('popular') == TRUE ? '1':'0';
           $category->meta_title =$request ->input('meta_title');
           $category->meta_keywords =$request->input('meta_keywords');
           $category->meta_description = $request->input('meta_description');
           $category->save();
           return redirect('/category-list')->with('status','Category added Successfully');         
    }

    public function list(){
        $category = Category::all();
        return view('admin.categories',compact('category'));
    }

    public function edit($id){
        $category = Category::find($id);
       return view('admin.edit',compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        if($request->hasFile('image')){
            $path = 'assets/upload/category/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/upload/category',$filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1':'0';
        $category->popular = $request ->input('popular') == TRUE ? '1':'0';
        $category->meta_title =$request ->input('meta_title');
        $category->meta_keywords =$request->input('meta_keywords');
        $category->meta_description = $request->input('meta_description');
        $category->update();
        return redirect('/category-list')->with('status','category updated successfully');
    }

    public function delete ($id){
         $category = Category::find($id);
         if($category->image){
             $path= 'assets/upload/category'. $category->image;
             if(File::exists($path)){
                 File::delete($path);
             }
             $category->delete();
             return redirect('/category-list')->with ('status', 'Category deleted successfully');
         }
    }

   
}
