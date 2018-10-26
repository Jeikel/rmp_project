<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table='cities';
    protected $primaryKey = 'id';
    protected $fillable = ['name','state_id'];  
    protected $hidden = ['created_at','updated_at']; 

    public function states()
    {
        return $this->belongsTo('States'); 
    } 
}