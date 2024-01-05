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
        Schema::create('master_salary_cals', function (Blueprint $table) {
            $table->id();
            $table->string('da');
            $table->string('hra');
            $table->string('ta');
            $table->string('tds');
            $table->string('pf');
            $table->string('basic_gp_pf');
            $table->string('esi');
            $table->string('esi_pool_fund');
            $table->string('epf_pool_fund');
            $table->string('max_epf');
            $table->string('salary_partition');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_salary_cals');
    }
};
