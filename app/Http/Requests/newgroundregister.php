<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newgroundregister extends FormRequest
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
            'groundname'=>'required|string',
            'ownername'=>'required|string|alpha_dash',
            'cnic'=>'required|string|min:15|max:15|alpha_dash',
            'state'=>'required|string|alpha_dash',
            'city'=>'required|string|alpha_dash',
            'province'=>'required|string|alpha_dash',
            'address'=>'required|string',
            'groundrate'=>'required|string|numeric',
            'electricityrate'=>'required|string|numeric',

        ];
    }

    public function messages()
    {
        return[
            'groundname.required' => 'Enter the Ground name',
            'ownername.required' =>  'Enter the Owner name',
            'cnic.required' => 'Enter the Cnic number',
            'city.required' => 'Enter the City Name',
            'state.required' => 'Enter the State Name',
            'province.required' => 'Enter the Province Name',
            'address.required' => 'Enter Your Address',
            'groundrate.required' => 'Enter the Ground Rate',
            'electricityrate.required' => 'Enter the Electric City Rate',
                  
        ];
    }
    
}

