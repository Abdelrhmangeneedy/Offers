<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Frontend\FrontController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


    Route::get('/home', [FrontController::class, 'index']);

    Route::get('/', [FrontController::class, 'index']);
    Route::get('/View-category/{category}', [FrontController::class, 'viewcategory']);
    Route::get('/All-Shops', [FrontController::class, 'shops']);
    Route::get('/View-shop/{name}', [FrontController::class, 'viewshop']);
    Route::get('/All-Offers', [FrontController::class, 'offers']);
    Route::get('/Contact', [FrontController::class, 'contact']);


Route::middleware('admin')->group(function(){

    Route::get('/Dashboard', [DashboardController::class, 'index']);
    Route::get('/Categories', [CategoryController::class, 'index']);
    Route::post('insert-category', [CategoryController::class, 'store']);
    Route::put('update-category/{id}', [CategoryController::class, 'update']);
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

    Route::get('/Shops', [ShopController::class, 'index']);
    Route::post('insert-shop', [ShopController::class, 'store']);
    Route::put('update-shop/{id}', [ShopController::class, 'update']);
    Route::get('delete-shop/{id}', [ShopController::class, 'destroy']);

    Route::get('/Offers', [OfferController::class, 'index']);
    Route::post('insert-offer', [OfferController::class, 'store']);
    Route::put('update-offer/{id}', [OfferController::class, 'update']);
    Route::get('delete-offer/{id}', [OfferController::class, 'destroy']);

    });
Auth::routes();
