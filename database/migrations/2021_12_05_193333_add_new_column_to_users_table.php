<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddNewColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('users', 'country_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->integer('country_id')->unsigned()->nullable()->after('address');
            });
        }

        if (!Schema::hasColumn('users', 'province_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->integer('province_id')->unsigned()->nullable()->after('country_id');
            });
        }

        if (!Schema::hasColumn('users', 'city_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->integer('city_id')->unsigned()->nullable()->after('province_id');
            });
        }

        if (!Schema::hasColumn('users', 'district_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->integer('district_id')->unsigned()->nullable()->after('city_id');
            });
        }

        if (!Schema::hasColumn('users', 'location')) {
            Schema::table('users', function (Blueprint $table) {
                $table->point('location')->nullable()->after('district_id');
            });
        }

        if (!Schema::hasColumn('users', 'level_of_training')) {
            DB::statement("ALTER TABLE `users` ADD COLUMN `level_of_training` bit(3) NULL AFTER `location`");
        }

        if (!Schema::hasColumn('users', 'meeting_type')) {
            Schema::table('users', function (Blueprint $table) {
                $table->enum('meeting_type', ['all', 'in_person', 'online'])->default('all')->after('level_of_training');
            });
        }

        if (!Schema::hasColumn('users', 'group_meeting')) {
            Schema::table('users', function (Blueprint $table) {
                $table->boolean('group_meeting')->default(false)->after('meeting_type');
            });
        }
    }
}
