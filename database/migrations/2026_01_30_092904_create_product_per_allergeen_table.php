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
        Schema::create('product_per_allergeen', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_per_allergeen');
    }
};
Schema::create('product_per_allergeen', function (Blueprint $table) {
    $table->id();
    $table->foreignId('product_id')->constrained('producten');
    $table->foreignId('allergeen_id')->constrained('allergenen');

    $table->boolean('is_actief')->default(true);
    $table->string('opmerking', 250)->nullable();
    $table->timestamps(6);
});
