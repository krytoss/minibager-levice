<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required|max: 191',
            'email' => 'required|email|max: 191',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'E-mail musí byť vyplnený',
            'email.email' => 'E-mail musí byť v správnom tvare',
            'name.required' => 'Meno musí byť vyplnené',
            'message.required' => 'Správa musí byť vyplnená'
        ];
    }
}
