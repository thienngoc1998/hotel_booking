<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
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
            'name' =>'required|unique:articles,title',
            'desc' =>'required',
            'content_article' =>'required',
            'avatar'=>'required|mimes:jpg,png,jpeg,gif|max:10000',
        ];
    }

    public function messages()
    {
        return [
          'name.required' =>  'Tiêu đề bài viết là bắt buộc ',
          'name.unique' =>  'Tiêu đề bài viết đã tồn tại',
          'desc.required' =>  'Mô tả bài viết là bắt buộc ',
          'content_article.required' =>  'Thông tin bài viết là bắt buộc ',
          'avatar.required' =>  ' Ảnh bài viết là bắt buộc ',
        ];
    }
}
