<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('full_name', 128);
            $table->string('email')->unique();
            $table->string('password', 64);
            $table->string('handphone', 16);
            $table->string('referral', 255)->nullable();
            $table->boolean('is_verified')->default(false);
            $table->string('provinsi_id')->index();
            $table->foreign('provinsi_id')->references('id')->on('provinsi');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
