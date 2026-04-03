<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class EditPayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $userSelectedBankForeignKeyExists = DB::table('information_schema.TABLE_CONSTRAINTS')
            ->where('CONSTRAINT_SCHEMA', DB::getDatabaseName())
            ->where('TABLE_NAME', 'payouts')
            ->where('CONSTRAINT_NAME', 'payout_user_selected_bank_id')
            ->where('CONSTRAINT_TYPE', 'FOREIGN KEY')
            ->exists();

        Schema::table('payouts', function (Blueprint $table) use ($userSelectedBankForeignKeyExists) {
            $dropColumns = [];

            if (Schema::hasColumn('payouts', 'account_name')) {
                $dropColumns[] = 'DROP COLUMN `account_name`';
            }

            if (Schema::hasColumn('payouts', 'account_number')) {
                $dropColumns[] = 'DROP COLUMN `account_number`';
            }

            if (Schema::hasColumn('payouts', 'account_bank_name')) {
                $dropColumns[] = 'DROP COLUMN `account_bank_name`';
            }

            if (!empty($dropColumns)) {
                DB::statement("ALTER TABLE `payouts` " . implode(',', $dropColumns));
            }

            if (!Schema::hasColumn('payouts', 'user_selected_bank_id')) {
                $table->integer('user_selected_bank_id')->unsigned()->after('user_id')->nullable();
            }

            if (!$userSelectedBankForeignKeyExists && Schema::hasColumn('payouts', 'user_selected_bank_id')) {
                $table->foreign('user_selected_bank_id', 'payout_user_selected_bank_id')->on('user_selected_banks')->references('id')->cascadeOnDelete();
            }
        });
    }
}
