<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\ActivityLogController;

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['jwt.auth'])->group(function () {

    Route::get('/me', [AuthController::class, 'me']);
    Route::get('/refresh', [AuthController::class, 'refresh']);
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/users', [UserController::class, 'getUsers']);
    Route::get('/users/{id}', [UserController::class, 'getUserById']);
    Route::post('/users', [UserController::class, 'createUser']);
    Route::put('/users/{id}', [UserController::class, 'updateUser']);
    Route::delete('/users/{id}', [UserController::class, 'deleteUser']);

    Route::get('/categories', [CategoryController::class, 'getCategories']);
    Route::get('/categories/{id}', [CategoryController::class, 'getCategoryById']);
    Route::post('/categories', [CategoryController::class, 'createCategory']);
    Route::put('/categories/{id}', [CategoryController::class, 'updateCategory']);
    Route::delete('/categories/{id}', [CategoryController::class, 'deleteCategory']);

    Route::get('/products', [ProductController::class, 'getProducts']);
    Route::get('/products/{id}', [ProductController::class, 'getProductById']);
    Route::post('/products', [ProductController::class, 'createProduct']);
    Route::put('/products/{id}', [ProductController::class, 'updateProduct']);
    Route::delete('/products/{id}', [ProductController::class, 'deleteProduct']);

    Route::get('/orders', [OrderController::class, 'getOrder']);
    Route::get('/orders/{id}', [OrderController::class, 'getOrderById']);
    Route::post('/orders', [OrderController::class, 'createOrder']);
    Route::put('/orders/{id}', [OrderController::class, 'updateOrder']);
    Route::delete('/orders/{id}', [OrderController::class, 'deleteOrder']);

    Route::get('/transactions', [TransactionController::class, 'getTransactions']);
    Route::get('/transactions/{id}', [TransactionController::class, 'getTransactionById']);
    Route::post('/transactions', [TransactionController::class, 'createTransaction']);
    Route::put('/transactions/{id}', [TransactionController::class, 'updateTransaction']);
    Route::delete('/transactions/{id}', [TransactionController::class, 'deleteTransaction']);

    Route::get('/activity-logs', [ActivityLogController::class, 'index']);
    });
