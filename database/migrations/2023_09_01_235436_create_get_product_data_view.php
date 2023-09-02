<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `get_product_data` AS select distinct `multimarket`.`product`.`product_id` AS `product_id`,`multimarket`.`product`.`product_name` AS `product_name`,`multimarket`.`product`.`product_slug` AS `product_slug`,`multimarket`.`product`.`product_code` AS `product_code`,`multimarket`.`product`.`product_quantity` AS `product_quantity`,`multimarket`.`product`.`product_tags` AS `product_tags`,`multimarket`.`product`.`product_price` AS `product_price`,`multimarket`.`product`.`product_short_description` AS `product_short_description`,`multimarket`.`product`.`product_long_description` AS `product_long_description`,`multimarket`.`product`.`product_thumbnail` AS `product_thumbnail`,`multimarket`.`product`.`product_status` AS `product_status`,`multimarket`.`product`.`sub_category_id` AS `sub_category_id`,`multimarket`.`product`.`brand_id` AS `brand_id`,`multimarket`.`product`.`vendor_id` AS `vendor_id`,`multimarket`.`product`.`product_colors` AS `product_colors`,`po`.`offer_id` AS `offer_id`,`po`.`offer_product_id` AS `offer_product_id`,`po`.`hot_deal` AS `hot_deal`,`po`.`featured_product` AS `featured_product`,`po`.`special_offer` AS `special_offer`,`po`.`special_deal` AS `special_deal` from (`multimarket`.`product` join `multimarket`.`product_offers` `po` on(`multimarket`.`product`.`product_id` = `po`.`offer_product_id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `get_product_data`");
    }
};
