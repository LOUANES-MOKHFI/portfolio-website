<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{ 
	 protected $table = 'gallery';
    protected $fillable = ['image','id_project'];
   
     public function portfolio(){
        return $this->belongsTo('App\Portfolio','id_portfolio','id');
    }

}
