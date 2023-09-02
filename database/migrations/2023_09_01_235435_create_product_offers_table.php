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
        Schema::create('product_offers', function (Blueprint $table) {
            $table->integer('offer_id', true);
            $table->tinyInteger('hot_deal')->nullable()->default(0);
            $table->tinyInteger('featured_product')->nullable()->default(0);
            $table->tinyInteger('special_offer')->nullable()->default(0);
            $table->tinyInteger('special_deal')->nullable()->default(0);
            $table->integer('offer_product_id')->nullable()->index('product_offers_product_product_id_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_offers');
    }
};
