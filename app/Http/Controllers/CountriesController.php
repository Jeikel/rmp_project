<?php

namespace App\Http\Controllers;
use App\Countries;

use Illuminate\Http\Request;

class CountriesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }    

    public function index()
    {
        return Countries::all();
    } 
}
