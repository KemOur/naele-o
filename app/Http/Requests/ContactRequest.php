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
            //
            'firstname' => "required",
            'lastname' => "required",
            'email' => "required|email",
            'subject' => "required",
            'message' => "required",
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => "Vous avez oublié votre nom",
            'lastname.required' => "vous avez oublié votre prénom",
            'email.required' => "vous avez oublié votre email",
            'subject.required' => "Quel est votre sujet ?",
            'message.required' => "Pourquoi nous contactez-vous ?",
        ];
    }
}
