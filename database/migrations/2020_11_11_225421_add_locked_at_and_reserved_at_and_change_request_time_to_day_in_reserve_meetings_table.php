<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLockedAtAndReservedAtAndChangeRequestTimeToDayInReserveMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reserve_meetings', function (Blueprint $table) {
            if (!Schema::hasColumn('reserve_meetings', 'day')) {
                $table->string('day', 10)->after('meeting_time_id');
            }

            if (!Schema::hasColumn('reserve_meetings', 'locked_at')) {
                $table->integer('locked_at')->nullable();
            }

            if (!Schema::hasColumn('reserve_meetings', 'reserved_at')) {
                $table->integer('reserved_at')->nullable();
            }

            if (Schema::hasColumn('reserve_meetings', 'request_time')) {
                $table->dropColumn('request_time');
            }

            $meetingForeignKeyExists = DB::table('information_schema.TABLE_CONSTRAINTS')
                ->where('CONSTRAINT_SCHEMA', DB::getDatabaseName())
                ->where('TABLE_NAME', 'reserve_meetings')
                ->where('CONSTRAINT_NAME', 'reserve_meetings_meeting_id_foreign')
                ->where('CONSTRAINT_TYPE', 'FOREIGN KEY')
                ->exists();

            if ($meetingForeignKeyExists) {
                DB::statement("ALTER TABLE `reserve_meetings` DROP FOREIGN KEY `reserve_meetings_meeting_id_foreign`;");
            }

            if (Schema::hasColumn('reserve_meetings', 'meeting_id')) {
                DB::statement("ALTER TABLE `reserve_meetings` CHANGE COLUMN `meeting_id` `meeting_id` INTEGER UNSIGNED NULL AFTER `id`");
            }

            DB::statement("ALTER TABLE `reserve_meetings` MODIFY COLUMN  `status`  enum( 'pending', 'open', 'finished') NOT NULL ");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reserve_meetings', function (Blueprint $table) {
            $table->dropColumn('locked_at');
            $table->dropColumn('reserved_at');
            $table->integer('request_time');
            $table->dropColumn('day');
        });
    }
}
