<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductBrandRequest extends FormRequest
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
            "name" => "required|unique:product_brands,name|min:3|max:20",
            "status" => "required|integer|in:0,1",
            "logo" => "required|image|mimes:jpeg,png,jpg|max:5012",
            "logo_alt" => "required|min:3|max:30",
        ];
    }
}
