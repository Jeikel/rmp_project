<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class IndProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
   
    public function rules(Request $request)
    {
        return [
            'name' => 'required|max:50',
            'mname'=> 'required|max:50',
            'lname'=> 'required|max:50',
            'bphone'=> 'max:14',
            'cphone'=> 'max:14',
            'hometown'=> 'max:20',
            'about'=> 'max:200',
            'bstory'=> 'max:200',
            'ogender'=> 'max:30',
            'howint'=> 'max:200',
        ];
    }
}
