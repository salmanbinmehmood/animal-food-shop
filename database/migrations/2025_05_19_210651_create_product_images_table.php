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
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->nullable();
            $table->string('img_path', 255)->nullable();
            $table->string('is_active', 255)->nullable();
            $table->string('is_deleted', 255)->nullable();
            $table->timestamps();
            // ir needs to migration
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};
