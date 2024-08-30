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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('line_of_business');
            $table->string('types_of_project');
            $table->string('region');
            $table->text('description');
            $table->text('meta_tage')->nullable();
            $table->string('image');
            $table->integer('enabledVideo')->default('0');
            $table->integer('enabledTimleline')->default('0');
            $table->string('timeline_name');
            $table->text('timeline_desciption');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
