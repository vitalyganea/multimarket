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
        DB::statement("CREATE VIEW `get_vendor_data` AS select `multimarket`.`users`.`id` AS `id`,`multimarket`.`users`.`photo` AS `photo`,`multimarket`.`users`.`name` AS `name`,`multimarket`.`users`.`email` AS `email`,`multimarket`.`users`.`username` AS `username`,`multimarket`.`vendor_shop`.`shop_name` AS `shop_name`,`multimarket`.`users`.`created_at` AS `created_at`,`multimarket`.`vendor_shop`.`shop_description` AS `shop_description`,`multimarket`.`users`.`phone_number` AS `phone_number`,`multimarket`.`users`.`address` AS `address`,`multimarket`.`vendor_shop`.`vendor_id` AS `vendor_id` from (`multimarket`.`users` join `multimarket`.`vendor_shop` on(`multimarket`.`users`.`id` = `multimarket`.`vendor_shop`.`user_id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `get_vendor_data`");
    }
};
