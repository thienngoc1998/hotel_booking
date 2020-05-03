<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassUserRequest extends FormRequest
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
            'password-old' => 'required',
            'password' => [
                'required',
                'confirmed',
            ]
        ];
    }

    public function messages()
    {
        return [
            'password-old.required' => 'Mật khẩu cũ là bắt buộc',
            'password.required' => 'Mật khẩu là bắt buộc',
            'password.confirmed' => 'Mật khẩu không khớp',
        ];
    }
}
