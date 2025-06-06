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
        Schema::create('our_stories', function (Blueprint $table) {
            $table->id();
            $table->string('vid_path', 255)->nullable();
            $table->string('story', 255)->nullable();
            $table->string('is_active', 255)->nullable();
            $table->string('is_deleted', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_stories');
    }
};
