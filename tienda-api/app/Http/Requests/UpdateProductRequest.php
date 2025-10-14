<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // El usuario está autorizado para realizar esta solicitud
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
            // El nombre es obligatorio, debe ser texto y máximo 255 caracteres
            'name' => 'required|string|max:255',

            // La descripción es opcional y debe ser texto
            'description' => 'nullable|string',

            // El SKU es obligatorio, debe ser texto, máximo 255 caracteres y único (excepto el actual producto)
            'sku' => 'required|string|max:255|unique:products,sku,' . $this->route('product'),

            // El stock es obligatorio y debe ser numérico
            'stock' => 'required|numeric',

            // El precio es obligatorio y debe ser entero
            'price' => 'required|integer',

            // El estado activo es opcional y debe ser booleano
            'is_active' => 'nullable|boolean',
        ];
    }
}
