<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table='countries';
    protected $primaryKey = 'id';
    protected $fillable = ['iso','name','iso3','phonecode'];
    protected $hidden = ['created_at','updated_at']; 
}