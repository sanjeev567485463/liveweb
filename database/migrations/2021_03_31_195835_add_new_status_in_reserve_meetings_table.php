<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;

class AddNewStatusInReserveMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $saleForeignKeyExists = DB::table('information_schema.TABLE_CONSTRAINTS')
            ->where('CONSTRAINT_SCHEMA', DB::getDatabaseName())
            ->where('TABLE_NAME', 'reserve_meetings')
            ->where('CONSTRAINT_NAME', 'reserve_meetings_sale_id_foreign')
            ->where('CONSTRAINT_TYPE', 'FOREIGN KEY')
            ->exists();

        Schema::table('reserve_meetings', function (Blueprint $table) use ($saleForeignKeyExists) {
            DB::statement("ALTER TABLE `reserve_meetings` MODIFY COLUMN `status` enum('pending','open','finished','canceled') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL AFTER `password`");

            if (!Schema::hasColumn('reserve_meetings', 'meeting_id')) {
                $table->integer('meeting_id')->unsigned()->after('id')->nullable();
            }

            if (!Schema::hasColumn('reserve_meetings', 'sale_id')) {
                $table->integer('sale_id')->unsigned()->after('meeting_id')->nullable();
            }

            if (!Schema::hasColumn('reserve_meetings', 'date')) {
                $table->integer('date')->unsigned()->after('day');
            }

            DB::statement("UPDATE `reserve_meetings` `rm` INNER JOIN `meeting_times` `mt` ON `mt`.`id` = `rm`.`meeting_time_id` SET `rm`.`meeting_id` = `mt`.`meeting_id` WHERE `rm`.`meeting_id` IS NULL");

            if (!$saleForeignKeyExists && Schema::hasColumn('reserve_meetings', 'sale_id')) {
                $table->foreign('sale_id')->on('sales')->references('id')->onDelete('cascade');
            }
        });
    }
}
