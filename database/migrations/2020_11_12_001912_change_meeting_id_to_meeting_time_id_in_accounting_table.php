<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeMeetingIdToMeetingTimeIdInAccountingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounting', function (Blueprint $table) {
            if (Schema::hasColumn('accounting', 'meeting_id')) {
                $foreignKeyExists = DB::table('information_schema.TABLE_CONSTRAINTS')
                    ->where('CONSTRAINT_SCHEMA', DB::getDatabaseName())
                    ->where('TABLE_NAME', 'accounting')
                    ->where('CONSTRAINT_NAME', 'accounting_meeting_id_foreign')
                    ->where('CONSTRAINT_TYPE', 'FOREIGN KEY')
                    ->exists();

                if ($foreignKeyExists) {
                    DB::statement("ALTER TABLE `accounting` DROP FOREIGN KEY `accounting_meeting_id_foreign`;");
                }

                DB::statement("ALTER TABLE `accounting` CHANGE COLUMN `meeting_id` `meeting_time_id` INTEGER UNSIGNED NULL");
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
        Schema::table('accounting', function (Blueprint $table) {
            //
        });
    }
}
