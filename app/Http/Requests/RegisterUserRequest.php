<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users,email',
            'password' => [
                'required',
                'confirmed',
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Họ tên là bắt buộc',
            'phone.required' => 'Số điện thoại là bắt buộc',
            'email.required' => 'Địa chỉ email là bắt buộc',
            'email.unique' => 'Địa chỉ email đã tồn tại',
            'password.required' => 'Mật khẩu là bắt buộc',
            'password.confirmed' => 'Mật khẩu không khớp',
        ];
    }
}
