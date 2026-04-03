<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToAccountingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounting', function (Blueprint $table) {
            if (!Schema::hasColumn('accounting', 'is_registration_bonus')) {
                $table->boolean('is_registration_bonus')->after('is_affiliate_commission')->default(false);
            }

            if (!Schema::hasColumn('accounting', 'order_item_id')) {
                $table->integer('order_item_id')->after('creator_id')->unsigned()->nullable();
            }

            if (!Schema::hasColumn('accounting', 'is_cashback')) {
                $table->boolean('is_cashback')->default(false)->after('is_registration_bonus');
            }
        });
    }
}
