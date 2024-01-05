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
        Schema::create('master_library_rules', function (Blueprint $table) {
            $table->id();
            $table->string('no_book_without_fine');
            $table->string('book_issue_at_time');
            $table->string('let_fine');
            $table->string('no_of_day_for_let_fee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_library_rules');
    }
};
