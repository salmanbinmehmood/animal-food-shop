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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 100)->nullable();
            $table->string('lname', 100)->nullable();
            $table->string('company_name', 255)->nullable();
            $table->text('message')->nullable();
            $table->string('subject', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('email', 100)->unique();
            $table->string('is_active')->nullable();
            $table->string('is_deleted')->nullable();
            // $table->dateTime('created_at');
            // $table->dateTime('updated_at');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
