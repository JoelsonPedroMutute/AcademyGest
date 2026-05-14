<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Matriculas extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'aluno_id',
        'curso_id',
        'turma_id',
        'ano_letivo',
        'semestre',
        'data_matricula',
        'status',
    ];
    public function aluno()
    {
        return $this->belongsTo(Alunos::class);
    }
    public function curso()
    {
        return $this->belongsTo(Cursos::class);
    }
    public function turma()
    {
        return $this->belongsTo(Turmas::class);
    }
}
