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
        Schema::create('coupon', function (Blueprint $table) {
            $table->integer('coupon_id', true);
            $table->string('coupon_code', 250);
            $table->smallInteger('discount_amount');
            $table->timestamp('expiration_date')->useCurrentOnUpdate()->useCurrent();
            $table->integer('VendorId')->nullable()->index('coupon_vendor_shop_vendor_id_fk');
            $table->tinyInteger('coupon_status')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon');
    }
};
