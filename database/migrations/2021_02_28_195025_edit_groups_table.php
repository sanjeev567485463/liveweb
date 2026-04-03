<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('groups', function (Blueprint $table) {
            if (Schema::hasColumn('groups', 'percent')) {
                DB::statement("ALTER TABLE `groups` DROP COLUMN `percent`");
            }

            if (!Schema::hasColumn('groups', 'discount')) {
                $table->integer('discount')->nullable()->after('name');
            }

            if (!Schema::hasColumn('groups', 'commission')) {
                $table->integer('commission')->nullable()->after('discount');
            }

            if (!Schema::hasColumn('groups', 'status')) {
                $table->enum('status', ['active', 'inactive'])->default('inactive')->after('commission');
            }
        });
    }
}
