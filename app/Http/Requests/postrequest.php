<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postrequest extends FormRequest
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
    public function rules()
    {
        return [
                'fixture'=>'required|string|max:255',
                'news'=>'required|string|max:255',
                'des'=>'required|string|max:255',
               // 'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ];
    }

    public function messages()
    {
        return[
            'fixture.required' => 'Enter the fixture name',
            'news.required' =>  'Enter the reason of Post',
            'des.required' => 'Enter the description of post',
            //'image.required' => 'Image is required'
        ];
    }
}
