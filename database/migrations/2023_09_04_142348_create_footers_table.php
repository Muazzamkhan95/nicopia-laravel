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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('about');
            $table->string('menu_heading')->nullable();
            $table->string('contact_heading')->nullable();
            $table->string('contact_description')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->unsignedBigInteger('menu_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
