<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
        ];
    }
    public function messages(): array
{
    return [
        'name.required' => 'Please enter the product name.',
        'price.required' => 'Please enter the product price.',
        'price.numeric' => 'Price must be a number.',
        'quantity.required' => 'Please enter the product quantity.',
        'quantity.integer' => 'Quantity must be a whole number.',
        'category_id.required' => 'Please select a category.',
        'supplier_id.required' => 'Please select a supplier.',
    ];
}
}
