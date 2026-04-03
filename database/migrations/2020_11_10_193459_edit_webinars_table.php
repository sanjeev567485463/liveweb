<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditWebinarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('webinars', function (Blueprint $table) {
            if (Schema::hasColumn('webinars', 'start_time') || Schema::hasColumn('webinars', 'end_time')) {
                $dropColumns = [];

                if (Schema::hasColumn('webinars', 'start_time')) {
                    $dropColumns[] = 'DROP COLUMN `start_time`';
                }

                if (Schema::hasColumn('webinars', 'end_time')) {
                    $dropColumns[] = 'DROP COLUMN `end_time`';
                }

                DB::statement('ALTER TABLE `webinars` ' . implode(',', $dropColumns));
            }

            if (!Schema::hasColumn('webinars', 'duration')) {
                $table->integer('duration')->after('start_date')->unsigned();
            }

            if (!Schema::hasColumn('webinars', 'downloadable')) {
                $table->boolean('downloadable')->after('support')->default(false);
            }
        });
    }
}
