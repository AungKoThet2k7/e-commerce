<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
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
            'name_en' => ['required', 'string', 'min:3', 'max:50'],
            'name_mm' => ['nullable', 'string', 'min:3', 'max:50'],
            'variants' => ['required', 'array'],
            'variants.*.stock' => ['required', 'integer', 'min:1'],
            'variants.*.price' => ['required', 'numeric', 'min:0.01'],
            'variants.*.attributeOptions' => ['required', 'array'],
            'variants.*.attributeOptions.*' => ['required', Rule::exists('product_attribute_options', 'id')],
        ];
    }
}
