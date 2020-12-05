<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Http\Requests\PortfolioRequest;
use App\Gallery;
use App\Http\Requests\GalleryRequest;
use App\Category;
use Illuminate\Support\Facades\Auth;
use DB;
class PortfolioController extends Controller
{
     public function index(){
    	$projects = Portfolio::where('deleted',0)->active()->paginate(15);
    	return view('admin.projects.index',compact('projects'));
    }
    
    public function search_project_admin(Request $request){
    	$project = $request->get('site_name');
    	$projects = Portfolio::where('deleted',0)->where('site_name','Like','%'.$project.'%')->paginate(15);
    	return view('admin.projects.index',compact('projects'));
    }

    public function create(){
    	$categories = Category::where('deleted',0)->active()->get();
    	return view('admin.projects.add',compact('categories'));
    }

    public function store(PortfolioRequest $request,Portfolio $project,GalleryRequest $request_g,Gallery $image){
    // dd(Auth::user()->id);

    	//add project
    	 if(!$request->has('active')){
            $request->request->add(['active' => 0]);
          }
          else{
           $request->request->add(['active' => 1]);

          }
          if($request->hasFile('image_principale'))
       {
        $project->image_principale = $request->file('image_principale');
        $new_name = rand(). '.' . $project->image_principale->getClientOriginalExtension();
        $project->image_principale->move('image_principale/',$new_name);
        $project->image_principale = $new_name;
        }
          $project -> create([
           'project_name' => $request->project_name,
           'image_principale' => $new_name,
           'lien' => $request->lien,
           'tech_use' => $request->tech_use,
           'duree'  => $request->duree,
		       'description'  => $request->description,
           'id_category'  => $request->id_category,
            ]);
        
$lastprojectt = Portfolio::orderBy('id', 'desc')->take(1)->first();

          //add gallery to project
        $images = $request_g->image;
        foreach ($images as $image) {
        $new_name = rand(). '.' . $image->getClientOriginalExtension();
        $image->move('gallery/',$new_name);
        //$image->image = $new_name;

        $gallerie = new Gallery;
        $gallerie->id_project = $lastprojectt->id;
        $gallerie->image = 'gallery/'.$new_name;
        $gallerie->save();

        }

        Session()->flash('success','l\'insertion de projet a étè faite avec succée');
        return redirect('admin/projects');

    }

     public function edit($id){
            $categories = Category::where('deleted',0)->active()->get();

    	$project = Portfolio::where('deleted',0)->where('id',$id)->active()->first();
            $images = Gallery::where('id_project',$id)->get();

    	if($project === null){
         return view('admin.layouts.error_404');
    	}else{
          return view('admin.projects.edit',compact('project','categories','images'));
    	}
    	
    }

     public function update(PortfolioRequest $request,$id,GalleryRequest $request_g,Gallery $image){
          
          $project = Portfolio::where('deleted',0)->where('id',$id)->first();
         if(!$request->has('active')){
            $request->request->add(['active' => 0]);
          }
          else{
           $request->request->add(['active' => 1]);

          }
          if($request->hasFile('image_principale'))
       {
        $project->image_principale = $request->file('image_principale');
        $new_name = rand(). '.' . $project->image_principale->getClientOriginalExtension();
        $project->image_principale->move('image_principale/',$new_name);
        $project->image_principale = $new_name;
        $project->update([
                   'image_principale' => $new_name,
        ]);
        }
          $project -> update([
           'project_name' => $request->project_name,
           'lien' => $request->lien,
           'tech_use' => $request->tech_use,
           'duree'  => $request->duree,
           'description'  => $request->description,
           'id_category'  => $request->id_category,
            ]);
        

          //update gallery to project

           $gallerie = Gallery::where('id_project',$project->id)->first();
           $images = $request_g->image;
            if($images !== null)
        {
            if($gallerie !==null){
        
       
                  foreach ($images as $image)
                  {
                  $new_name = rand(). '.' . $image->getClientOriginalExtension();
                  $image->move('gallery/',$new_name);
                   
                      $gallerie->id_project = $id;
                      $gallerie->image = 'gallery/'.$new_name;
                      $gallerie->save();
                  }         

        
            }
           else{
                    foreach ($images as $image)
                  {
                  $new_name = rand(). '.' . $image->getClientOriginalExtension();
                  $image->move('gallery/',$new_name);
                          //$image->image = $new_name;

                          $gallerie = new Gallery;
                          $gallerie->id_project = $id;
                          $gallerie->image = 'gallery/'.$new_name;
                          $gallerie->save();

                    }
                }

        
      }
          Session()->flash('success','la modification de projet a étè faite avec succée');
          return redirect('admin/projects');

    }

    public function destroy($id){
           $project = Portfolio::find($id);
           $project->deleted = 1;
           $project->save();
           $gallery = Gallery::where('id_project',$id)->get();
           foreach ($gallery as $image) {
             $image->delete();
           }
           Session()->flash('success','la Supression de projet a étè faite avec succée');
          return redirect('admin/projects');
    }
    public function show($id)
    {
    	   $project = Portfolio::where('id',$id)->active()->first();
          $images = Gallery::where('id_project',$id)->get();

          if($project === null){
         return view('admin.layouts.error_404');
    	}else{
          return view('admin.projects.show',compact('project','images'));
    	}
    }



//user

    public function portfolio()
    {
        $projects = Portfolio::where('deleted',0)->active()->paginate(15);
        $categories = Category::where('deleted',0)->active()->get();

        return view('user.portfolio',compact('projects','categories'));
    }
}
