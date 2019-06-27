<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class playerregister extends FormRequest
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
            //'team_name'=>'required|string|max:255',
            // 'captainname'=>'required|string|max:255|alpha_dash',
             'cnic'=>'required|string|max:15|alpha_dash',
             'sampleinlineradio'=>'required',
             'playerrole'=>'required',
            // 'playerstatus[]'=>'required',
             //'player'=>'required|string|max:255|alpha_dash'
 
  
          

        ];
    }

    public function messages()
    {
        return[
            'team_name.required' => 'Enter the Team name',
            'captaion.required' =>  'Enter the Captain name',
            'cnic.required' => 'Enter the Cnic number',
            'sampleinlineradio.required' => 'Select one',
            'playerrole.required'=>'Select one Role of player',
           
        ];
    }
}
