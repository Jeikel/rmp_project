<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndProfile extends Model
{
    protected $table = 'ind_profile';
    protected $guarded = [];

    public function user()
    {       
        return $this->hasOne('App\User', 'id');
    }
}
