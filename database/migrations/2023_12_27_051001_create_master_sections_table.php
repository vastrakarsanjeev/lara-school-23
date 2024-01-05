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
        Schema::create('master_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('master_class_id');
            $table->string('class');
            $table->string('type');
            $table->string('section');
            $table->string('limit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_sections');
    }
};
