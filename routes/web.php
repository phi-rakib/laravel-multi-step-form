<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(ProductController::class)->group(function(){
    Route::get('products', 'index')->name('products.index');

    Route::get('products/create-step-one', 'createStepOne')->name('products.create.step.one');
    Route::post('products/create-step-one-post', 'postCreateStepOne')->name('products.create.step.one.post');

    Route::get('products/create-step-two', 'createStepTwo')->name('products.create.step.two');
    Route::post('products/create-step-two-post', 'postCreateStepTwo')->name('products.create.step.two.post');

    Route::get('products/create-step-three', 'createStepThree')->name('products.create.step.three');
    Route::post('products/create-step-three-post', 'postCreateStepThree')->name('products.create.step.three.post');
});

