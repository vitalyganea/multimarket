<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('product_id', true);
            $table->string('product_name', 250);
            $table->string('product_code', 250)->nullable();
            $table->string('product_tags', 250);
            $table->string('product_colors', 250);
            $table->text('product_short_description');
            $table->text('product_long_description')->nullable();
            $table->string('product_slug', 250);
            $table->double('product_price');
            $table->string('product_thumbnail', 250);
            $table->char('product_status', 1)->default('');
            $table->integer('sub_category_id')->index('product_sub_category_sub_category_id_fk');
            $table->integer('brand_id')->index('product_brand_brand_id_fk');
            $table->integer('vendor_id')->index('product_product__fk');
            $table->integer('product_quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
