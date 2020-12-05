<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Http\Requests\ServicesRequest;
use App\Category;
use App\Portfolio;

class ServicesController extends Controller
{
	public function index(){
    	$services = Services::active()->paginate(15);
    	return view('admin.services.index',compact('services'));
    }
    
     public function create(){
    	return view('admin.services.add');
    }

    public function store(ServicesRequest $request,Services $service){
    // dd(Auth::user()->id);

    	//add service
    	 if(!$request->has('active')){
            $request->request->add(['active' => 0]);
          }
          else{
           $request->request->add(['active' => 1]);

          }
          if($request->hasFile('icone'))
       {
        $service->icone = $request->file('icone');
        $new_name = rand(). '.' . $service->icone->getClientOriginalExtension();
        $service->icone->move('icone/',$new_name);
        $service->icone = $new_name;
        }
          $service -> create([
           'name' => $request->name,
           'icone' => $new_name,
		       'description'  => $request->description,
            ]);
        
        Session()->flash('success','l\'insertion de service a étè faite avec succée');
        return redirect('admin/services');

    }

     public function edit($id){

    	$service = Services::where('id',$id)->active()->first();

    	if($service === null){
         return view('admin.layouts.error_404');
    	}else{
          return view('admin.services.edit',compact('service',));
    	}
    	
    }

     public function update(ServicesRequest $request,$id){
          
          $service = Services::where('id',$id)->first();

         if(!$request->has('active')){
            $request->request->add(['active' => 0]);
          }
          else{
           $request->request->add(['active' => 1]);

          }

          if($request->hasFile('icone'))
       {
        $service->icone = $request->file('icone');
        $new_name = rand(). '.' . $service->icone->getClientOriginalExtension();
        $service->icone->move('icone/',$new_name);
        $service->icone = $new_name;
        $service->update([
                   'icone' => $new_name,
        ]);
        }
          $service -> update([
           'name' => $request->name,
           'description'  => $request->description,
            ]);
        

          Session()->flash('success','la modification de service a étè faite avec succée');
          return redirect('admin/services');

    }

    public function destroy($id){
           $service = Services::find($id);
           $service->delete();
          // $service->save();
           
           Session()->flash('success','la Supression de service a étè faite avec succée');
          return redirect('admin/services');
    }
    public function show($id)
    {
    	   $service = Services::where('id',$id)->active()->first();
           
          if($service === null){
         return view('admin.layouts.error_404');
    	}else{
          return view('admin.services.show',compact('service'));
    	}
    }

    public function services(){
    	$services = Services::active()->get();
              $projects = Portfolio::where('deleted',0)->active()->paginate(15);

      $categories = Category::where('deleted',0)->active()->get();
    	return view('user.services',compact('services','categories','projects'));
    }
}
