<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technologies;
use App\Http\Requests\TechnologiesRequest;
use Illuminate\Support\Facades\Auth;
class TechnologiesController extends Controller
{
     public function index(){
    	$technologies = Technologies::paginate(15);
    	return view('admin.technologies.index',compact('technologies'));
    }
    
    
    public function create(){
    	
    	return view('admin.technologies.add');
    }

    public function store(TechnologiesRequest $request,Technologies $technologies){
    // dd(Auth::user()->id);
    	 if(!$request->has('active')){
            $request->request->add(['active' => 0]);
          }
          else{
           $request->request->add(['active' => 1]);

          }
          $technologies -> create([
           'name' => $request->name,
           'type' => $request->type,
           'pourcentage' => $request->pourcentage,
            ]);

          Session()->flash('l\'insertion de technologie a étè faite avec succée');
          return redirect('admin/technologies');

    }

     public function edit($id){
    	$technologies = Technologies::where('id',$id)->active()->first();
    	if($technologies === null){
         return view('admin.layouts.error_404');
    	}else{
          return view('admin.technologies.edit',compact('technologies'));
    	}
    	
    }

     public function update(TechnologiesRequest $request,$id){
          
          $technologies = Technologies::active()->where('id',$id)->first();
          if(!$request->has('active')){
            $request->request->add(['active' => 0]);
          }
          else{
           $request->request->add(['active' => 1]);

          }
           $technologies->update(
            [
              'name' => $request->name,
           'type' => $request->type,
           'pourcentage' => $request->pourcentage,


            ]);
           //$category->save();
           
          Session()->flash('la modification de technologie a étè faite avec succée');
          return redirect('admin/technologies');

    }
    public function destroy($id){
           $technologie = Technologies::find($id);
           $technologie->delete();
           Session()->flash('la Supression de technologie a étè faite avec succée');
          return redirect('admin/technologies');
    }
    public function show(){}

    public function about(){
    	$technologies = Technologies::active()->get();
    	return view('user.about',compact('technologies'));
    }
}
