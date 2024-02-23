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
        Schema::create('author_profiles', function (Blueprint $table) {
            $table->primary(["id", "name"]);
            $table->string("name");
            $table->unsignedBigInteger("id");
            $table->unsignedBigInteger("user_id");
            $table->boolean("isVerified")->default(false);
            $table->longText("about");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('author_profiles');
    }
};
