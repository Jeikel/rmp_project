<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobsRequest extends FormRequest
{    
    public function authorize()
    {
        return true;
    }
  
    public function rules()
    {
        return [
            'title' => 'required|max:30',
            'company'=> 'required|max:30',
            'city'=> 'required',
            'date_fr'=> 'required',
            'current'=> 'required',
            'timeline'=> 'max:300',
            'description'=> 'max:300',
        ];
    }
}
