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
        Schema::table('product', function (Blueprint $table) {
            $table->foreign(['sub_category_id'], 'product_sub_category_sub_category_id_fk')->references(['sub_category_id'])->on('sub_category')->onUpdate('CASCADE');
            $table->foreign(['vendor_id'], 'product_product__fk')->references(['vendor_id'])->on('vendor_shop')->onUpdate('CASCADE');
            $table->foreign(['brand_id'], 'product_brand_brand_id_fk')->references(['brand_id'])->on('brand')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign('product_sub_category_sub_category_id_fk');
            $table->dropForeign('product_product__fk');
            $table->dropForeign('product_brand_brand_id_fk');
        });
    }
};
