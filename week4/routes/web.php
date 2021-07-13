<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/product', [ProductController::class, 'list'])
->name('product-list');

route::get('/product/{product}', [ProductController::class, 'view'])
->name('product-view');



route::get('/category', [CategoryController::class, 'list'])
->name('category-list');

route::get('/category/{category}', [CategoryController::class, 'view'])
->name('category-view');