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

            $table->foreignId('disciplina_id')->constrained()->onDelete('cascade');

            $table->string('nome')->index();
            $table->date('ano_letivo')->nullable();

            $table->string('semestre')->nullable();
            $table->unsignedSmallInteger('capacidade')->nullable();

            $table->enum('turno', [
                'diurno',
                'vespertino',
                'noturno'
            ])->nullable();
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
