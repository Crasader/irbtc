<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdatePasswordRequest extends Request
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
            'password' => array('required', 'confirmed', 'min:8', 'regex:/^\S*(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/'),
        ];
    }
}