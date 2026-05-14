<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Disciplina extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descricao',
        'carga_horaria',
        'curso_id',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function turmas()
    {
        return $this->belongsToMany(Turma::class);
    }

    public function aulas()
    {
        return $this->hasMany(Aula::class);
    }
}
