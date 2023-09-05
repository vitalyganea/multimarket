<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Brand Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->controller(BrandController::class)->group(function (){

    Route::get('vendors', 'showVendors')->name('vendor-list');
        Route::get('brands', 'showBrands')->name('brand');
        Route::get("add_brand", function(){
            return view("backend.brand.brand_add");
        })->name('brand-add');
        Route::post('create_brand', 'brandCreate')->name('brand-create');
        Route::get('remove_brand/{id}', 'brandRemove')->name('brand-remove')->whereNumber('id');
        Route::post('update_brand', 'brandUpdate')->name('brand-update');
    });
