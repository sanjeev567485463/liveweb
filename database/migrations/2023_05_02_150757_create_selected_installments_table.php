<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSelectedInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('selected_installments')) {
            Schema::create('selected_installments', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->integer('installment_id')->unsigned();
                $table->integer('installment_order_id')->unsigned();
                $table->bigInteger('start_date')->unsigned()->nullable();
                $table->bigInteger('end_date')->unsigned()->nullable();
                $table->float('upfront', 15, 2)->nullable();
                $table->enum('upfront_type', ['fixed_amount', 'percent'])->nullable();
                $table->bigInteger('created_at')->unsigned();

                $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
                $table->foreign('installment_id')->on('installments')->references('id')->cascadeOnDelete();
                $table->foreign('installment_order_id')->on('installment_orders')->references('id')->cascadeOnDelete();
            });
        }

        if (!Schema::hasTable('selected_installment_steps')) {
            Schema::create('selected_installment_steps', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('selected_installment_id')->unsigned();
                $table->integer('installment_step_id')->unsigned();
                $table->integer('deadline')->unsigned()->nullable();
                $table->float('amount', 15, 2)->nullable();
                $table->enum('amount_type', ['fixed_amount', 'percent'])->nullable();

                $table->foreign('selected_installment_id')->on('selected_installments')->references('id')->cascadeOnDelete();
                $table->foreign('installment_step_id')->on('installment_steps')->references('id')->cascadeOnDelete();
            });
        }

        $stepForeignKeyExists = DB::table('information_schema.TABLE_CONSTRAINTS')
            ->where('CONSTRAINT_SCHEMA', DB::getDatabaseName())
            ->where('TABLE_NAME', 'installment_order_payments')
            ->where('CONSTRAINT_NAME', 'installment_order_payments_step_id_foreign')
            ->where('CONSTRAINT_TYPE', 'FOREIGN KEY')
            ->exists();

        $selectedStepForeignKeyExists = DB::table('information_schema.TABLE_CONSTRAINTS')
            ->where('CONSTRAINT_SCHEMA', DB::getDatabaseName())
            ->where('TABLE_NAME', 'installment_order_payments')
            ->where('CONSTRAINT_NAME', 'installment_order_payments_selected_installment_step_id_foreign')
            ->where('CONSTRAINT_TYPE', 'FOREIGN KEY')
            ->exists();

        Schema::table('installment_order_payments', function (Blueprint $table) use ($stepForeignKeyExists, $selectedStepForeignKeyExists) {
            if ($stepForeignKeyExists) {
                DB::statement("ALTER TABLE `installment_order_payments` DROP FOREIGN KEY `installment_order_payments_step_id_foreign`");
            }

            if (Schema::hasColumn('installment_order_payments', 'step_id')) {
                DB::statement("ALTER TABLE `installment_order_payments` DROP COLUMN `step_id`");
            }

            if (!Schema::hasColumn('installment_order_payments', 'selected_installment_step_id')) {
                $table->integer('selected_installment_step_id')->unsigned()->nullable()->after('type');
            }

            if (!$selectedStepForeignKeyExists && Schema::hasColumn('installment_order_payments', 'selected_installment_step_id')) {
                $table->foreign('selected_installment_step_id')->on('selected_installment_steps')->references('id')->cascadeOnDelete();
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
        Schema::dropIfExists('selected_installments');
        Schema::dropIfExists('selected_installment_steps');
    }
}
