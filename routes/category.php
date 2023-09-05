<?php

use App\Http\Controllers\CategoryController;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Category Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
    ->controller(CategoryController::class)->group(function () {
        Route::get('categories', 'showCategories')->name('category');
        Route::get("add_category", function () {
            return view("backend.category.category_add");
        })->name('category-add');
        Route::post('create_category', 'categoryCreate')->name('category-create');
        Route::get('remove_category/{id}', 'categoryRemove')->name('category-remove')->whereNumber('id');
        Route::post('update_category', 'categoryUpdate')->name('category-update');
    });
