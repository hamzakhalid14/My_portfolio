<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom de la compétence
            $table->string('type'); // Type (framework, langage de programmation, logiciel, etc.)
            $table->integer('level'); // Niveau de compétence (0-100)
            $table->string('image_url')->nullable(); // URL de l'image associée
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('skills');
    }
}

