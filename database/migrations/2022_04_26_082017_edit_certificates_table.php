<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class EditCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $webinarForeignKeyExists = DB::table('information_schema.TABLE_CONSTRAINTS')
            ->where('CONSTRAINT_SCHEMA', DB::getDatabaseName())
            ->where('TABLE_NAME', 'certificates')
            ->where('CONSTRAINT_NAME', 'certificates_webinar_id_foreign')
            ->where('CONSTRAINT_TYPE', 'FOREIGN KEY')
            ->exists();

        Schema::table('certificates', function (Blueprint $table) use ($webinarForeignKeyExists) {
            if (Schema::hasColumn('certificates', 'file')) {
                DB::statement("ALTER TABLE `certificates`
                        DROP COLUMN `file`");
            }

            DB::statement("ALTER TABLE `certificates`
                                MODIFY COLUMN `quiz_id` int(0) UNSIGNED NULL AFTER `id`,
                                MODIFY COLUMN `quiz_result_id` int(0) UNSIGNED NULL AFTER `quiz_id`");

            if (!Schema::hasColumn('certificates', 'type')) {
                $table->enum('type', ['quiz', 'course'])->after('user_grade');
            }

            if (!Schema::hasColumn('certificates', 'webinar_id')) {
                $table->integer('webinar_id')->unsigned()->after('student_id')->nullable();
            }

            if (!$webinarForeignKeyExists && Schema::hasColumn('certificates', 'webinar_id')) {
                $table->foreign('webinar_id')->on('webinars')->references('id')->cascadeOnDelete();
            }
        });
    }
}
