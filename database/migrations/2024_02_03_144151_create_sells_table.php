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
        Schema::create('sells', function (Blueprint $table) {
            $table->id();
            $table->string("phoneNumber");
            $table->string("payment");
            $table->integer("ggcoin");
            $table->string("city");
            $table->string("state");
            $table->string("zip");
            $table->string("address");
            $table->unsignedInteger("user_id");
            $table->bigInteger("quantity");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sells');
    }
};
