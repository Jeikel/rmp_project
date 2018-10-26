<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $table='states';
    protected $primaryKey = 'id';
    protected $fillable = ['shortname','name','country_id'];  
    protected $hidden = ['created_at','updated_at'];  
    
    public function cities()
    {
        return $this->hasMany('App\Cities','state_id'); 
    }   
	public function country()
    {
        return $this->belongsTo('App\Countries'); 
    }       
}
