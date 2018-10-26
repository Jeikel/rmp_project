<?php

namespace App\Http\Controllers;
use App\States;

use Illuminate\Http\Request;

class StatesController extends Controller
{
    public function index()
    {
        return States::all();
    }

    public function show($id)
    {
        return States::find($id);
    }  

    public function country($id)
    {
        return States::where('country_id','=',$id)->get();
    }    
}
