<?php

namespace App\Http\Requests\Backend\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ChangeInfoRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:admins,email,'.$this->id,
            'phone' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return [
        'name.required' => 'Tên không được để trống',
        'email.required' => 'Email không được để trống',
        'phone.required' => 'Số điện thoại không được để trống',
        'email.unique' => 'Số điện thoại không được để trống',
            ];
    }
}
