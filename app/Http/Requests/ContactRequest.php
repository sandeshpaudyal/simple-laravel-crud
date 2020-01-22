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
            'name'=>'required|max:100',
            'email'=>'required|email',
            'phone'=>'required',

        ];
    }

    public function attributes()
    {
        return [
            'name'=>'first name',

        ];
    }

    public  function messages()
    {
        return [
            'name.required'=>'Name is requied',
            'email.required'=>'Email is required',

        ];
    }


}

