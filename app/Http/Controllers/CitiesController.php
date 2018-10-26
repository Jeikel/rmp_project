<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cities;

class CitiesController extends Controller
{
	public function index()
    {
        return Cities::all();
    }     

    public function show($id)
    {
        return Cities::find($id);
    } 

    public function state($id)
    {
        return Cities::where('state_id','=',$id)->get();
    }   
}