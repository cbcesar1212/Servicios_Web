<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        // return parent::toArray($request);
        return [
            // ID del producto
            'id' => $this->id,

            // Nombre del producto
            'name' => $this->name,

            // Descripción del producto
            'description' => $this->description,

            // Código SKU del producto
            'sku' => $this->sku,

            // Cantidad en stock
            'stock' => $this->stock,

            // Precio del producto
            'price' => $this->price,

            // Estado de activación
            'is_active' => $this->is_active,

            // Fecha de creación
            'created_at' => $this->created_at,

            // Fecha de última actualización
            'updated_at' => $this->updated_at,
        ];
    }
}
