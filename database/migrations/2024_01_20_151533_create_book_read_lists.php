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
        Schema::create('book_read_list', function (Blueprint $table) {
            $table->primary(["book_id", "read_list_id"]);
            $table->unsignedBigInteger("book_id");
            $table->unsignedBigInteger("read_list_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_read_lists');
    }
};
