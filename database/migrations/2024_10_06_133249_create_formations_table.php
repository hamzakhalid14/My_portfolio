<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Nom de la formation
            $table->string('institution'); // Établissement
            $table->date('start_date'); // Date de début
            $table->date('end_date')->nullable(); // Date de fin (null si toujours en cours)
            $table->text('description')->nullable(); // Description de la formation
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
