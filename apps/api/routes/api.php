<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;


/*
Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'store']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::put('categories/{id}', [CategoryController::class, 'update']);
Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
*/

Route::group([
    'prefix' => 'categories',
], function () {
    Route::get('', [CategoryController::class, 'index']);
    Route::post('', [CategoryController::class, 'store']);

    /*
    Route::get('/{id}', [CategoryController::class, 'show']);
    Route::put('/{id}', [CategoryController::class, 'update']);
    Route::delete('/{id}', [CategoryController::class, 'destroy']);
    */

    Route::group([
        'prefix' => '/{category}',
    ], function () {
        Route::get('', [CategoryController::class, 'show']);
        Route::put('', [CategoryController::class, 'update']);
        Route::delete('', [CategoryController::class, 'destroy']);
    });
});

Route::group([
    'prefix' => 'products',
], function () {
    Route::get('', [ProductController::class, 'index']);
    Route::post('', [ProductController::class, 'store']);

    Route::group([
        'prefix' => '/{product}',
    ], function () {
        Route::get('', [ProductController::class, 'show']);
        Route::put('', [ProductController::class, 'update']);
        Route::delete('', [ProductController::class, 'destroy']);
    });
});

Route::group([
    'prefix' => 'customers',
], function () {
    Route::get('', [CustomerController::class, 'index']);
    Route::post('', [CustomerController::class, 'store']);

    Route::group([
        'prefix' => '/{customer}',
    ], function () {
        Route::get('', [CustomerController::class, 'show']);
        Route::put('', [CustomerController::class, 'update']);
        Route::delete('', [CustomerController::class, 'destroy']);
    });
});

Route::group([
    'prefix' => 'orders',
], function () {
    Route::get('', [OrderController::class, 'index']);
    Route::post('', [OrderController::class, 'store']);

    Route::group([
        'prefix' => '/{order}',
    ], function () {
        Route::get('', [OrderController::class, 'show']);
        Route::put('', [OrderController::class, 'update']);
        Route::delete('', [OrderController::class, 'destroy']);
    });
});
