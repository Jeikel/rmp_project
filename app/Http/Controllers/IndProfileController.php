<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IndProfileRequest;
use App\IndProfile;
use App\User;

class IndProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $user = auth()->id();
        $data = IndProfile::join("users","ind_profile.user_id","=","users.id")
        ->where('user_id','=',$user)
        ->get();
        return $data;
    }

    public function store(Request $request) {
        $data = new IndProfile();
        $data->user_id = auth()->id();
        $data->name = $request->name;
        $data->age = $request->age;
        $data->profession = $request->profession;
        $data->save ();
        return $data;
    }  

    public function update(IndProfileRequest $request)
    {
        $data = IndProfile::find($request->id);
        $data->bphone = $request->bphone;
        $data->cphone = $request->cphone;
        $data->hometown = $request->hometown;
        $data->about = $request->about;
        $data->bstory = $request->bstory;
        $data->birthday = $request->birthday;
        $data->gender = $request->gender;
        $data->ogender = $request->ogender;
        $data->howint = $request->howint;
        $data->save();

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->mname = $request->mname;
        $user->lname = $request->lname;
        $user->save();
    }
}
