<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductStoreRequest extends FormRequest
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
            'category_id' => 'required',
            'product_name' => 'required',
            // 'sku' => 'required',
            'origin_price' => 'required',
            'sell_price' => 'required',
            // 'sku' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            // 'quantity' => 'required',
        ];
    }
}
