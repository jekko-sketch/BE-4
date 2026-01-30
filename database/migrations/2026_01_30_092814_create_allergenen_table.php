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
        Schema::create('allergenen', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allergenen');
    }
    
};
// database/migrations/2026_01_01_000001_create_allergenen_table.php
Schema::create('allergenen', function (Blueprint $table) {
    $table->id();
    $table->string('naam', 100);
    $table->string('omschrijving', 255);

    // Systeemvelden
    $table->boolean('is_actief')->default(true);
    $table->string('opmerking', 250)->nullable();
    $table->timestamps(6);
});
