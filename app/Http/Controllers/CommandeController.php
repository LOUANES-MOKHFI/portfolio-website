<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CommandeController extends Controller
{
    
    public function commander($category){
    	$commande = Category::active()->where('deleted',0)->where('category',$category)->first();

    	if(!$commande)
    	{ 
 			return view('layouts.error_404');
    	}else
    	{
            return view('user.commande',compact('commande'));
    	}
    }
}
