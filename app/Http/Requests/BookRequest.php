<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    private $isupdate = false;
    public function __construct()
    {
        $this->isupdate = Str::contains(url()->current(), "create");
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            "title" => ["required", "max:20"],
            "slug" => ["required", "max:50"],
            "genres" => ["required"],
            "ggcoin" => ["required", "max:5000"],
            "publish" => ["required"],
            "body" => ["required", "max:500"],
            "image" => [$this->isupdate ? "required" : "", "image"],
            "discount" => [""],
            "status" => [$this->isupdate ? "required" : ""],
            "caption" => ["required"]

        ];
    }
}
