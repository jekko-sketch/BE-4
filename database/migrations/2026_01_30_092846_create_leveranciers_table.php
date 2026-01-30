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
        Schema::create('leveranciers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leveranciers');
    }
};
Schema::create('leveranciers', function (Blueprint $table) {
    $table->id();
    $table->string('naam', 150);
    $table->string('contact_persoon', 150);
    $table->string('leverancier_nummer', 50);
    $table->string('mobiel', 20);
    $table->foreignId('contact_id')->nullable()->constrained('contacten');

    $table->boolean('is_actief')->default(true);
    $table->string('opmerking', 250)->nullable();
    $table->timestamps(6);
});
