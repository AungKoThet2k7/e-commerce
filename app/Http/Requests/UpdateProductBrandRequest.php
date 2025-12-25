<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductBrandRequest extends FormRequest
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
                Rule::unique('product_brands', 'name_mm')->ignore($this->route('product_brand')),
            ],
            "name_mm" => [
                'nullable',
                'min:3',
                'max:30',
                Rule::unique('product_brands', 'name_mm')->ignore($this->route('product_brand')),
            ],
            "status" => "required|integer|in:0,1",
            "logo" => "nullable|image|mimes:jpeg,png,jpg|max:5012",
            "logo_alt" => "nullable|min:3|max:30",
        ];
    }
}
