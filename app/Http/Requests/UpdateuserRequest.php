<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateuserRequest extends FormRequest
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
            "name" => "required|min:3|max:30",
            "email" => [
                "required",
                "email",
                Rule::unique("users", "email")->ignore($this->route('user')),
            ],
            "password" => "nullable|min:8|max:20",
            "image" => "nullable|image|mimes:jpeg,png,jpg|max:5012",
            "image_alt" => "nullable|min:3|max:30",
            "role" => "required|exists:roles,name",
        ];
    }
}
