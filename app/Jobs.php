<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table='jobs';
    protected $primaryKey = 'id';
    protected $fillable = ['ip_id','city'];  
    protected $hidden = ['created_at','updated_at']; 

    public function cities()
    {       
        return $this->hasOne('App\Cities', 'city');
    }
    
}
