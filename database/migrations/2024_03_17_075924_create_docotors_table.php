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
        Schema::create('docotors', function (Blueprint $table) {
            $table->id();
            $table->integer('shop_id');
            $table->integer('specialist_id');
            $table->string('docotor_name');
            $table->string('qualification');
            $table->string('resent_work');
            $table->longText('description');
            $table->string('day');
            $table->string('string_time');
            $table->string('end_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docotors');
    }
};
