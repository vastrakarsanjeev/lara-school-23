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
        Schema::create('master_discount_coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_name');
            $table->date('create_date');
            $table->string('exp_date');
            $table->string('discount_amount');
            $table->string('limit_student');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_discount_coupons');
    }
};
