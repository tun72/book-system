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
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->unsignedBigInteger("chapter");
        
            $table->string("slug");
            $table->longText("story");
            $table->unsignedBigInteger("book_id");

            $table->boolean("is_free");
            $table->longText("intro");
            $table->boolean("is_finish")->default(0);

          

            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
