<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AllSubscribersMailsRequest extends FormRequest
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
            'firstname_subscribers' => 'min:5|max:32',
            'lastname_subscribers' => 'min:5|max:32',
            'email_subscribers' => 'required|min:5|max:32|email',
            
        ];
    }

    /*
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
        //////////////////////////////??????????????????????????????????????????????????????? 
            'email_subscribers' => 'The :attribute value is required :input is not between 5:min - 32:max.',
            
        ];
    }    
}