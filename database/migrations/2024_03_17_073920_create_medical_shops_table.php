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
        Schema::create('medical_shops', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->string('frist_name');
            $table->string('last_name');
            $table->string('email_id');
            $table->string('phone_no');
            $table->string('password');
            $table->string('password_text');
            $table->string('state');
            $table->string('distick');
            $table->string('pincode');
            $table->longText('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_shops');
    }
};
