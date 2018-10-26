<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table='countries';
    protected $primaryKey = 'id';
    protected $fillable = ['iso','name','phonecode'];
    protected $hidden = ['created_at','updated_at'];

    public function states()
    {
        return $this->hasMany('App\States','country_id'); 
    } 
}