<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        

        return [
            "name" => ["required", "min:3"],
            "email" => ["required", "min:5", Rule::unique("users", "email")],
            "description" => ["required", "min:3"],
            "exp" => ["required"],
            "phone" => ["required"]
        ];
    }
}