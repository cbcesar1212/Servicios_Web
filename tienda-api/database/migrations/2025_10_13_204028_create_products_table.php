<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id(); // ID autoincremental
        $table->string('name'); // Nombre del producto
        $table->text('description')->nullable(); // Descripción opcional
        $table->string('sku')->unique(); // Código único
        $table->unsignedInteger('stock')->default(0); // Stock inicial
        $table->decimal('price', 10, 2); // Precio con dos decimales
        $table->boolean('is_active')->default(true); // Estado activo/inactivo
        $table->softDeletes(); // Borrado lógico
        $table->timestamps(); // created_at y updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
