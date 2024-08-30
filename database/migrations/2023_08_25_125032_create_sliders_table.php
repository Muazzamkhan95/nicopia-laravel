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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('image');
            $table->string('heading1');
            $table->integer('slider_type')->default(0);
            $table->text('video_url')->nullable();
            $table->string('url_name')->nullable();
            $table->string('url')->nullable();
            $table->string('url_name1')->nullable();
            $table->string('url1')->nullable();
            $table->string('order')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
