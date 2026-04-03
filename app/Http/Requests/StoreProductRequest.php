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
            'default_image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:5012'],
            'default_image_alt' => ['nullable', 'string', 'min:3', 'max:30'],
            'sub_category_id' => ['required', 'exists:sub_categories,id'], 
            'brand_id' => ['required', 'exists:product_brands,id'],
            'product_variants' => ['required', 'array'],
            'product_variants.*.stock' => ['required', 'integer', 'min:1'],
            'product_variants.*.price' => ['required', 'numeric', 'min:0.01'],
            'product_variants.*.product_attribute_options' => ['required', 'array'],
            'product_variants.*.product_attribute_options.*' => ['required', Rule::exists('product_attribute_options', 'id')],
        ];
    }

    public function attributes()
    {
        return [
            'sub_category_id' => 'sub category',
            'brand_id' => 'brand',
            'product_variants.*.stock' => 'stock',
            'product_variants.*.price' => 'price',
            'product_variants.*.product_attribute_options' => 'attributes',
            'product_variants.*.product_attribute_options.*' => 'option',
        ];
    }
}
