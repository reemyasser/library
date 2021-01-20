<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
            'email'=>'required',
            'username'=>'required',
            'userpass'=>'required'
            //
        ];
    }
    public function messages()
    {
        return [
            //
            'name'=>'please enter your name',
            'email'=>'please enter your email',
            'username'=>'please enter your User Name',
            'userpass'=>'please enter your password'
        ];
    }
}
