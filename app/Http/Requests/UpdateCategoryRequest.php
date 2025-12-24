<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
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
            "name_en" => [
                'required',
                'min:3',
                'max:30',
                Rule::unique('categories', 'name_en')->ignore($this->route('category')),
            ],
            "name_mm" => [
                'nullable',
                'min:3',
                'max:30',
                Rule::unique('categories', 'name_mm')->ignore($this->route('category')),
            ],
            "image" => "nullable|image|mimes:jpeg,png,jpg|max:5012",
            "image_alt" => "nullable|min:3|max:30",
            "status" => "required|integer|in:0,1",
        ];
    }
}
