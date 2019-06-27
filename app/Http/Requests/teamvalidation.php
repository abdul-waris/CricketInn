<?php
/**
 * Created by PhpStorm.
 * User: MUHAMMAD HAJIQ
 * Date: 18-Oct-17
 * Time: 10:53 AM
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class teamvalidation extends FormRequest
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
            "teamname" =>  "required|string|max:255",
            "secondteam" => "required|string|max:255",
            "address" => "required|string|max:255|alpha_dash",
            "city" => "required|string|max:255|alpha_dash",
            "cnic" => "required|string|min:15|alpha_dash",
            "matchdatestart" => "required",
            "matchdateend" => "required"
        ];
    }

    public function messages()
    {
        return[
            'teamname.required' => 'Enter Your Team Name',
            'secondteam.required' =>  'Enter Second Team Name',
            'address.required' => 'Enter Your Address',
            'city.required' => 'Enter your city',
            'cnic.required' => 'Enter your ID Number',
            'matchdatestart.required' => 'Please Select date',
            'matchdateend.required' => 'please Select date'
        ];
    }
}
