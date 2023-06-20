<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "product_code" => "required",
            "buying_rice" => "required|numeric",
            "selling_price" => "required|numeric",
            "total_stock" => "required|numeric",
            "available_color" => "required",
            "available_size" => "required",
            "client_id" => "required",
            "category_id" => "required",
        ];
    }
}
