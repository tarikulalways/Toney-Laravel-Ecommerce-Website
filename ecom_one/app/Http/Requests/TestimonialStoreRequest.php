<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50'],
            'designation' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:225'],
            'client_img' => ['nullable', 'mimes:jpg,jpeg,png', 'image'],
            'is_active' => 'nullable'
        ];
    }
}
