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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string("about");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("recipient_id");
            $table->boolean("is_seen")->default(0);
            $table->unsignedBigInteger("book_id")->default(0);
            $table->unsignedBigInteger("chapter_id")->default(0);
            $table->unsignedBigInteger("comment_id")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
