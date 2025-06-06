<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/blog', [IndexController::class, 'blog'])->name('blog');
Route::get('/blog-detail/{id}', [IndexController::class, 'blogDetail'])->name('blog.detail');
Route::get('/login', [IndexController::class, 'login'])->name('login');
Route::post('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/product', [IndexController::class, 'product'])->name('product');
Route::get('/product-category', [IndexController::class, 'productCategory'])->name('product.category');
Route::get('/product-detail/{id}', [IndexController::class, 'productDetail'])->name('product.detail');
Route::get('/gallery', [IndexController::class, 'gallery'])->name('gallery');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::post('/submit-contact', [IndexController::class, 'submitContact'])->name('submit-contact');
Route::get('/product/category/{id}', [IndexController::class, 'showByCategory'])->name('products.byCategory');
Route::get('/product/ajax/{id}', [IndexController::class, 'productAjax']);
Route::get('/cart', [IndexController::class, 'cart'])->name('cart');


