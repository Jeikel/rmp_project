<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JobsRequest;
use App\Jobs;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return Jobs::all();
    }    
    
    public function store(JobsRequest $request)
    {
        $data = new Jobs;
        $data->user_id = auth()->id();
        $data->title = $request->title;
        $data->company = $request->company;
        $data->city = $request->city;
        $data->date_fr = $request->date_fr;
        $data->date_to = $request->date_to;
        $data->current = $request->current;
        $data->timeline = $request->timeline;
        $data->description = $request->description;
        $data->save();
        return $data;
    }

    public function update(Request $request)
    {
        $data = Jobs::find($request->id);
        $data->title = $request->title;
        $data->company = $request->company;
        $data->city = $request->city;
        $data->date_fr = $request->date_fr;
        $data->date_to = $request->date_to;
        $data->current = $request->current;
        $data->timeline = $request->timeline;
        $data->description = $request->description;
        $data->save();
    }

    public function destroy($id)
    {
        $data = Jobs::find($id);
        $data->delete();
    }

    public function getJobs()
    {
        $user = auth()->id();
        $data = Jobs::select('jobs.*',
                             'cities.name as city_name',
                             'states.name as state_name',
                             'countries.iso as iso')->
                      join("cities","jobs.city","=","cities.id")->
                      join("states","cities.state_id","=","states.id")->
                      join("countries","states.country_id","=","countries.id")->
                      where('user_id','=',$user)->
                      orderby('date_fr')->get();
        return $data;
    }
   
}
