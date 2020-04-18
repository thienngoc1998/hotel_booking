<?php

namespace App\Http\Requests\Backend\Service;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
            'name' => 'required|unique:services,name, '.$this->id,
            'content' => 'required',
            'price' => 'required',
            'open_time' => 'required',
            'close_time' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên dịch vụ là bắt buộc nhập',
            'name.unique' => 'Tên dịch vụ đã tồn tại',
            'content.required' => 'Nội dung là bắt buộc ',
            'price.required' => 'Giá tiền là bắt buộc nhập',
        ];
    }
}
