<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Turma extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'curso_id',
        'ano_letivo',
        'semestre',
        'capacidade',
        'turno',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class);
    }

    public function aulas()
    {
        return $this->hasMany(Aula::class);
    }
}
