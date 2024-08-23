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
        Schema::create('chapter_user', function (Blueprint $table) {
            $table->primary(["user_id", "chapter_id"]);
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("chapter_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapter_user');
    }
};
