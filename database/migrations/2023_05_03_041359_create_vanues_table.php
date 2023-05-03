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
        Schema::create('vanues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('vanue_name');
            $table->longText('address');
            $table->string('location');
            $table->string('vanue_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vanues');
    }
};
