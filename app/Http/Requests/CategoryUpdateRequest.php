<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CategoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
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
            // 'category_name' => 'required',
            // 'icon' => 'required',
            // 'description' => 'required'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'category_name.required' => 'Tên danh mục bắt buộc nhập!',
            'icon.required' => 'Icon bắt buộc nhập!',
            'description.required' => 'Mô tả bắt buộc nhập!',
        ];
    }
}
