<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('purchase_code')) {
            Schema::create('purchase_code', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('code')->nullable();
                $table->string('product_type')->default('main');
                $table->string('license_type', 50)->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_code');
    }
};
