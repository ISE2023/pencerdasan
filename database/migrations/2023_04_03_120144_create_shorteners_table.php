<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shorteners', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('short_url', 100);
            $table->string('long_url', 255);
            $table->boolean('is_customized')->default(false);
            $table->integer('visitor');
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shortener');
    }
};
