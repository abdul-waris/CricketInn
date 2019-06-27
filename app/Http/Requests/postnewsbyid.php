<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postnewsbyid extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
     {
         return [
                 'fixtures'=>'required|string|max:255',
                 'newss'=>'required|string|max:255',
                 'dess'=>'required|string|max:255',
                // 'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
         ];
     }
 
     public function messages()
     {
         return[
             'fixtures.required' => 'Enter the fixture name',
             'newss.required' =>  'Enter the reason of Post',
             'dess.required' => 'Enter the description of post',
             //'image.required' => 'Image is required'
         ];
     }
}
