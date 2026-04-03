<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToPaymentChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_channels', function (Blueprint $table) {
            if (!Schema::hasColumn('payment_channels', 'currencies')) {
                $afterColumn = Schema::hasColumn('payment_channels', 'credentials') ? 'credentials' : 'image';
                $table->text('currencies')->nullable()->after($afterColumn);
            }
        });
    }
}
