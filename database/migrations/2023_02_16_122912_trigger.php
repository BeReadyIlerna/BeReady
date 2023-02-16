<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Trigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER add_cart AFTER INSERT ON `USERS` FOR EACH ROW
        BEGIN
           INSERT INTO `shoppingcarts` SET user_id = NEW.id, created_at = NEW.created_at, updated_at = NEW.updated_at;
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `add_cart`');
    }
};
