<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('inventory', [InventoryController::class, 'getInventory']);
Route::post('inventory', [InventoryController::class, 'storeInventory']);

Route::delete('inventory/{id}', [InventoryController::class, 'destroyInventory']);

// Route::update('inventory/{id}', [InventoryController::class, 'updateInventory']); gagal

