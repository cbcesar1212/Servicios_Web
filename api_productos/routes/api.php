<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí registras las rutas de la API para tu aplicación.
| Estas rutas son cargadas por el RouteServiceProvider dentro de un grupo
| que contiene el middleware "api".
|
*/

Route::apiResource('products', ProductController::class);
