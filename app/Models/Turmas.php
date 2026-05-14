<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{

    protected $fillable = [
        'nome',
        'curso_id',
        'turno',
        'ano_letivo',
        'semestre',
        'capacidade',
    ];

    public function curso()
    {
        return $this->belongsTo(Cursos::class);
    }

    public function sala()
    {
        return $this->belongsTo(Salas::class);
    }
}
