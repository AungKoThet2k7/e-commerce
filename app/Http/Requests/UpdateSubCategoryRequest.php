<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSubCategoryRequest extends FormRequest
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
            "name" => [
                'required',
                'min:3',
                'max:20',
                Rule::unique('sub_categories', 'name')->ignore($this->route('sub_category')),
            ],
            "image" => "nullable|image|mimes:jpeg,png,jpg|max:5012",
            "image_alt" => "required|min:3|max:30",
            "status" => "required|integer|in:0,1",
            "category_id" => 'required|exists:categories,id',
        ];
    }
}
