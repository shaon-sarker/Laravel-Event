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
        Schema::create('creative_panels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('creativepanel_name');
            $table->integer('phone_no');
            $table->longText('address');
            $table->string('panel_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creative_panels');
    }
};
