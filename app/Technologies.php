<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technologies extends Model
{
    	protected $table = 'competances';
    protected $fillable = ['name','type','pourcentage','active'];

     public function scopeActive($query){
        return $query->where('active',1);
    }

    public function getActive(){
    return $this->active == 1 ? 'active' : 'désactive';
        
     }
}
