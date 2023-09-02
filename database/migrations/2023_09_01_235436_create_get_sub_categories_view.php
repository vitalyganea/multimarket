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
        DB::statement("CREATE VIEW `get_sub_categories` AS select `sub`.`sub_category_id` AS `sub_category_id`,`sub`.`sub_category_name` AS `sub_category_name`,`sub`.`sub_category_slug` AS `sub_category_slug`,`sub`.`sub_category_image` AS `sub_category_image`,`sub`.`category_id` AS `selected_category_id`,`sub`.`created_at` AS `created_at`,`multimarket`.`category`.`category_name` AS `category_name` from (`multimarket`.`sub_category` `sub` join `multimarket`.`category` on(`sub`.`category_id` = `multimarket`.`category`.`category_id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `get_sub_categories`");
    }
};
