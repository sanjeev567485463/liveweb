<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $bundleForeignKeyExists = DB::table('information_schema.TABLE_CONSTRAINTS')
            ->where('CONSTRAINT_SCHEMA', DB::getDatabaseName())
            ->where('TABLE_NAME', 'certificates')
            ->where('CONSTRAINT_NAME', 'certificates_bundle_id_foreign')
            ->where('CONSTRAINT_TYPE', 'FOREIGN KEY')
            ->exists();

        Schema::table('certificates', function (Blueprint $table) use ($bundleForeignKeyExists) {
            DB::statement("ALTER TABLE `certificates` MODIFY COLUMN `type` enum('quiz', 'course', 'bundle') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL AFTER `user_grade`");

            // Add Bundle To certificates_templates
            if (Schema::hasColumn('certificates_templates', 'type')) {
                DB::statement("ALTER TABLE `certificates_templates` MODIFY COLUMN `type` enum('quiz', 'course', 'bundle') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL AFTER `image`");
            } else {
                DB::statement("ALTER TABLE `certificates_templates` ADD COLUMN `type` enum('quiz', 'course', 'bundle') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL AFTER `image`");
            }

            if (!Schema::hasColumn('certificates', 'bundle_id')) {
                $table->integer('bundle_id')->unsigned()->nullable()->after('webinar_id');
            }

            if (!$bundleForeignKeyExists && Schema::hasColumn('certificates', 'bundle_id')) {
                $table->foreign('bundle_id')->on('bundles')->references('id')->cascadeOnDelete();
            }
        });
    }

};
