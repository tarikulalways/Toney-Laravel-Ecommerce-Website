<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialUpdateRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'designation' => ['required', 'string'],
            'description' => ['required', 'string'],
            'client_img' => ['nullable', 'unique:testimonials,client_img'],
            'is_active' => 'nullable'
        ];
    }
}
