<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'projects';
    protected $fillable = ['project_name','lien','tech_use','duree','image_principale','description','id_category','active','deleted'];

     public function scopeActive($query){
        return $query->where('active',1);
    }

    public function getActive(){
    return $this->active == 1 ? 'active' : 'désactive'; 
     }



     public function category(){
        return $this->belongsTo('App\Category','id_category','id');
    }

    public function gallery(){
        return $this->hasMany('App\Portfolio','id_portfolio','id');
    }
}
