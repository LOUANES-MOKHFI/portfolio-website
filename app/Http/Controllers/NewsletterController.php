<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsletterRequest;
use App\Newsletter;

class NewsletterController extends Controller
{
   
 public function checksubscribe(Request $request){
    if($request->ajax()){
    	$data = $request->all();
    	  //print_r($data);
    	$subscribeCount = Newsletter::where('email',$data['email'])->count();
    	if($subscribeCount>0){
    		echo "exist";
    	}
    }
   }
public function addsubscribe(Request $request){
    if($request->ajax()){
    	$data = $request->all();
    	  //print_r($data);
    	$subscribeCount = Newsletter::where('email',$data['email'])->count();
    	if($subscribeCount>0){
    		echo "exist";
    	}else{
    		$newsletter = new Newsletter;
    		$newsletter->email = $data['email'];
    		$newsletter->status = 1;
    		$newsletter->save();
    		echo "Enregistre";
    	}
    }
   }

   public function view(){
     $newsletters = Newsletter::paginate(15);
     return view('admin.newsletter.index',compact('newsletters'));
   }
}

