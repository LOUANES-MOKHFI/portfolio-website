<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
     public function index(){
    	$category = Category::where('deleted',0)->paginate(15);
    	return view('admin.category.index',compact('category'));
    }
    
    public function search_category_admin(Request $request){
    	$cat = $request->get('category');
    	$category = Category::where('deleted',0)->where('category','Like','%'.$cat.'%')->paginate(15);
    	return view('admin.category.index',compact('category'));
    }

    public function create(){
    	
    	return view('admin.category.add');
    }

    public function store(CategoryRequest $request,Category $category){
    // dd(Auth::user()->id);
       if(!$request->has('active')){
            $request->request->add(['active' => 0]);
          }
          else{
           $request->request->add(['active' => 1]);

          }
       if($request->hasFile('image_principale'))
       {
        $category->image_principale = $request->file('image_principale');
        $new_name = rand(). '.' . $category->image_principale->getClientOriginalExtension();
        $category->image_principale->move('categories/',$new_name);
        $category->image_principale = $new_name;
        }
          $category -> create([
           'category' => $request->category,
           'prix' => $request->prix,
           'duree' => $request->duree,
           'description' => $request->description,

           'id_user' => Auth::user()->id
            ]);

          Session()->flash('l\'insertion de categorie a étè faite avec succée');
          return redirect('admin/category');

    }

     public function edit($id){
    	$category = Category::where('deleted',0)->where('id',$id)->where('id_user',Auth::user()->id)->first();
    	if($category === null){
         return view('admin.layouts.error_404');
    	}else{
          return view('admin.category.edit',compact('category'));
    	}
    	
    }

     public function update(Request $request,$id){
          
          $category = Category::where('deleted',0)->where('id',$id)->first();
          if(!$request->has('active')){
            $request->request->add(['active' => 0]);
          }
          else{
           $request->request->add(['active' => 1]);

          }
           if($request->hasFile('image_principale'))
       {
        $category->image_principale = $request->file('image_principale');
        $new_name = rand(). '.' . $category->image_principale->getClientOriginalExtension();
        $category->image_principale->move('categories/',$new_name);
        $category->image_principale = $new_name;
        $category->update([
                   'image_principale' => $new_name,
        ]);
        }
           $category->update(
            [
              'category'    => $request->category,
              'prix' => $request->prix,
              'duree' => $request->duree,
              'description' => $request->description,

            ]);
           //$category->save();
           
          Session()->flash('la modification de categorie a étè faite avec succée');
          return redirect('admin/category');

    }
    public function destroy($id){
           $category = Category::find($id);
           $category->deleted = 1;
           $category->save();
           Session()->flash('la Supression de categorie a étè faite avec succée');
          return redirect('admin/category');
    }
    public function show(){}
}
