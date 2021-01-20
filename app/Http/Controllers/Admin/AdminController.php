<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product ;
use App\Models\Category ;
use App\Models\Admin ;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProductRequest;

class AdminController extends Controller

{




  
   

    //Begin Categoris Methods
    public function create_category()
    {  //array
         $categories = Category::get();
        return view('admin.create_category', compact('categories')) ;
    }

     public function save_category(Request $request)
     {
        $validator= Validator::make($request->all(),
         [
            'name' => 'required|unique:categories,name'
         ],
         [
           'name.required' => 'category Name field is required',
           'name.unique' => 'category Name is taken.',

         ]);

        if($validator -> fails()){
           return redirect()->back()->withErrors($validator)
                  ->withInput($request->all());
              }
              Category::create([
                'name'=> $request->name ,
            ]);


        return redirect()->back()->with('success','category created successfuly');
     }

     public function delete_category($id)
     {
        $cats = Category::find($id);
        // $cats->books()->delete();   //books (method of relation)
        $cats->delete();
        return redirect()->back()->with('deleted','category deleted successfuly');




     }

   
     public function show_cat_books($id)
     {
       $cats = Category::find($id);
       $books =  $cats->books ;
       return view('admin.show_cats_books',compact('books'));
     }


     public function edit_category($id)
    {
       $category = Category::find($id);
       $array = array('category' => $category);
       return view('admin.edit_category',$array);

    }

    public function update_category($id, Request $request){

        $category = Category::where('id',$id)->update(['name'=> $request->name]);


      /*  $category->name = $request->name ;
        $category->save(); */

        return redirect()->back()->with('updated' , 'Category Updated successfuly');

}






}
