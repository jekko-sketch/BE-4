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
        Schema::create('contacten', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacten');
    }
};
Schema::create('contacten', function (Blueprint $table) {
    $table->id();
    $table->string('straat', 150);
    $table->string('huisnummer', 10);
    $table->string('postcode', 10);
    $table->string('stad', 100);

    $table->boolean('is_actief')->default(true);
    $table->string('opmerking', 250)->nullable();
    $table->timestamps(6);
});
