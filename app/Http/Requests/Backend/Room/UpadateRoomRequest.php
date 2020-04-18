<?php

namespace App\Http\Requests\Backend\Room;

use Illuminate\Foundation\Http\FormRequest;

class UpadateRoomRequest extends FormRequest
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
            'name' => 'required|unique:rooms,name,'.$this->id,
            'amount_bed' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên phòng bắt buộc nhập',
            'name.unique'=>'Tên phòng đã tồn tại',
            'amount_bed.required'=>'Số lượng phòng ngủ là bắt buộc nhập',
            'description.required'=>'Mô tả phòng là bắt buộc',
        ];
    }
}
