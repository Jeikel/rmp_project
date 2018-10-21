<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class IndProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'name' => 'required|max:50',
            'mname'=> 'required|max:50',
            'lname'=> 'required|max:50',
            'bphone'=> 'max:10',
            'cphone'=> 'max:10',
            'hometown'=> 'max:20',
            'about'=> 'max:200',
            'bstory'=> 'max:200',
            'ogender'=> 'max:30',
            'howint'=> 'max:200',
        ];
    }
}
