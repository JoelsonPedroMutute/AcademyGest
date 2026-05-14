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
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('curso_id')->constrained()->onDelete('cascade');

            $table->string('nome');
            $table->string('turno')->nullable();

            $table->string('ano_letivo');
            $table->string('semestre')->nullable();

            $table->unsignedSmallInteger('capacidade')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};
