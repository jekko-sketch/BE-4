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
        Schema::create('product_per_leverancier', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_per_leverancier');
    }
};
Schema::create('product_per_leverancier', function (Blueprint $table) {
    $table->id();
    $table->foreignId('leverancier_id')->constrained('leveranciers');
    $table->foreignId('product_id')->constrained('producten');
    $table->date('datum_levering');
    $table->integer('aantal');
    $table->date('datum_eerst_volgende_levering')->nullable();

    $table->boolean('is_actief')->default(true);
    $table->string('opmerking', 250)->nullable();
    $table->timestamps(6);
});
