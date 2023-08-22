<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'product_name' => ['required', 'string', 'max:255'],
            'product_img' => ['image'],
            'product_category' => ['required', 'numeric'],
            'product_code' => ['required','max:10'],
            'product_price' => ['required', 'numeric'],
            'product_stock' => ['required', 'numeric'],
            'product_quantity' => ['required', 'numeric'],
            'long_description' => ['nullable', 'string', 'max:500'],
            'short_description' => ['nullable', 'string', 'max:300'],
            'aditional_info' => ['nullable', 'string', 'max:255'],
            'is_active' => 'nullable'
        ];
    }
}
