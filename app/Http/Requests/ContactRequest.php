<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'=>'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ];
    }

    public function messages(){
      //Custom Error Messages
      return [
        'name.required' => 'Please Tell us your Name',
        'email.required' => 'Please Enter your E-Mail Address',
        'subject.required' => 'Please Enter the subject of your Message',
        'message.required' => 'Please Enter your message'
      ];
    }
}
