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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string("NombreTarea");
        });
        Schema::table('tareas', function (Blueprint $table) {
            $table->foreignId("comentarios_id")->constrained("comentarios");
            $table->foreignId("proyectos_id")->constrained("proyectos");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
