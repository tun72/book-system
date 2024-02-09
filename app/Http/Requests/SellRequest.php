<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Fluent;

class SellRequest extends FormRequest
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
            "user_id" => "required",
            "phoneNumber" => "required",
            "state" => "required",
            "zip" => "required",
            "payment" => "required",
            "address" => "required",
            "ggcoin" => 'required|integer|max:' . auth()->user()->ggcoin,
            "city" => "required"
        ];
    }
}
