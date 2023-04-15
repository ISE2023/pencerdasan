<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('verifications', function (Blueprint $table) {
            $table->uuid('user_id')->primary();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('verification_type_id');
            $table->foreign('verification_type_id')->references('id')->on('verification_types');
            $table->string('token', 255)->unique();
            $table->timestamp('expired_at')->useCurrent()->useCurrentOnUpdate()->addDay();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::unprepared('ALTER TABLE `verifications` DROP PRIMARY KEY, ADD PRIMARY KEY (  `user_id` ,  `verification_type_id` )');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifications');
    }
};
