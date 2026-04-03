<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToSupportConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('support_conversations', function (Blueprint $table) {
            $existingConstraints = DB::table('information_schema.TABLE_CONSTRAINTS')
                ->where('CONSTRAINT_SCHEMA', DB::getDatabaseName())
                ->where('TABLE_NAME', 'support_conversations')
                ->where('CONSTRAINT_TYPE', 'FOREIGN KEY')
                ->pluck('CONSTRAINT_NAME')
                ->toArray();

            if (!in_array('support_conversations_support_id_foreign', $existingConstraints)) {
                $table->foreign('support_id')->on('supports')->references('id')->onDelete('cascade');
            }

            if (!in_array('support_conversations_sender_id_foreign', $existingConstraints)) {
                $table->foreign('sender_id')->on('users')->references('id')->onDelete('cascade');
            }
        });
    }
}
