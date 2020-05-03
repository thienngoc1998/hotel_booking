<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
            'name' =>'required|unique:articles,title,'.$this->id,
            'desc' =>'required',
            'content_article' =>'required',
            'avatar'=>'mimes:jpg,png,jpeg,gif|max:10000',
        ];
    }

    public function messages()
    {
        return [
            'title.required' =>  'Tiêu đề bài viết là bắt buộc ',
            'title.unique' =>  'Tiêu đề bài viết là bắt buộc ',
            'desc.required' =>  'Mô tả bài viết là bắt buộc ',
            'content_article.required' =>  'Thông tin bài viết là bắt buộc ',
        ];
    }
}
