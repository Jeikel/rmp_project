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

    public function update(IndProfileRequest $request)
    {
        $data = IndProfile::find($request->id);
        $data->bp_code = $request->bp_code;
        $data->bphone = $request->bphone;
        $data->cp_code = $request->cp_code;
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

    public function Image(Request $request){
      
        $this->validate($request, [
            'image' => 'required'
        ]);

        $user = auth()->id();
    
        if($request->get('image'))
        {
            $image = $request->get('image');
            $name = $user.'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            \Image::make($request->get('image'))->save(public_path('images/avatar/').$name);
        }

        $image = IndProfile::find($user);
        $image->image_name = $name;
        $image->save();

        return response()->json(['success' => 'You have successfully uploaded an image'], 200);
    }
}
