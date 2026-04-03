<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfflineBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('offline_banks')) {
            Schema::create('offline_banks', function (Blueprint $table) {
                $table->increments('id');
                $table->string('logo');
                $table->bigInteger('created_at')->unsigned();
            });
        }

        if (!Schema::hasTable('offline_bank_translations')) {
            Schema::create('offline_bank_translations', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('offline_bank_id')->unsigned();
                $table->string('locale', 191)->index();
                $table->string('title');

                $table->foreign('offline_bank_id')->on('offline_banks')->references('id')->cascadeOnDelete();
            });
        }

        if (!Schema::hasTable('offline_bank_specifications')) {
            Schema::create('offline_bank_specifications', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('offline_bank_id')->unsigned();
                $table->string('value');

                $table->foreign('offline_bank_id')->on('offline_banks')->references('id')->cascadeOnDelete();
            });
        }

        if (!Schema::hasTable('offline_bank_specification_translations')) {
            Schema::create('offline_bank_specification_translations', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('offline_bank_specification_id')->unsigned();
                $table->string('locale', 191)->index();
                $table->string('name');

                $table->foreign('offline_bank_specification_id', 'offline_bank_specification_id')->on('offline_bank_specifications')->references('id')->cascadeOnDelete();
            });
        }

        $offlineBankForeignKeyExists = \Illuminate\Support\Facades\DB::table('information_schema.TABLE_CONSTRAINTS')
            ->where('CONSTRAINT_SCHEMA', \Illuminate\Support\Facades\DB::getDatabaseName())
            ->where('TABLE_NAME', 'offline_payments')
            ->where('CONSTRAINT_NAME', 'offline_payments_offline_bank_id_foreign')
            ->where('CONSTRAINT_TYPE', 'FOREIGN KEY')
            ->exists();

        Schema::table('offline_payments',function (Blueprint $table) use ($offlineBankForeignKeyExists) {
            if (Schema::hasColumn('offline_payments', 'bank')) {
                \Illuminate\Support\Facades\DB::statement("ALTER TABLE `offline_payments` DROP COLUMN `bank`");
            }

            if (!Schema::hasColumn('offline_payments', 'offline_bank_id')) {
                $table->integer('offline_bank_id')->unsigned()->nullable()->after('amount');
            }

            if (!$offlineBankForeignKeyExists && Schema::hasColumn('offline_payments', 'offline_bank_id')) {
                $table->foreign('offline_bank_id')->on('offline_banks')->references('id')->nullOnDelete();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offline_banks_credits');
        Schema::dropIfExists('offline_bank_translations');
        Schema::dropIfExists('offline_bank_specifications');
        Schema::dropIfExists('offline_bank_specification_translations');
    }
}
