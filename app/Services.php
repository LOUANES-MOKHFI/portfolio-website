<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
   
    protected $table = 'services';
    protected $fillable = ['name','icone','description','active'];

     public function scopeActive($query){
        return $query->where('active',1);
    }

    public function getActive(){
    return $this->active == 1 ? 'active' : 'désactive'; 
     }

}
