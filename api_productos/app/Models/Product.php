<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Campos que se pueden rellenar masivamente
    protected $fillable = [
        'name',
        'description',
        'sku',
        'stock',
        'price',
        'is_active',
    ];
}
