<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name_en" => "required|unique:categories,name_en|min:3|max:30",
            "name_mm" => "nullable|unique:categories,name_mm|min:3|max:30",
            "image" => "required|image|mimes:jpeg,png,jpg|max:5012",
            "image_alt" => "required|min:3|max:30",
            "status" => "required|integer|in:0,1",
        ];
    }
}
