<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Relatorios extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'aluno_id',
        'disciplina_id',
        'turma_id',
        'media_final',
        'porcentual_frequencia',
        'situacao',
        'periodo',
        'observacoes',
    ];

    public function aluno()
    {
        return $this->belongsTo(Alunos::class);
    }
    public function disciplina()
    {
        return $this->belongsTo(Disciplinas::class);
    }
    public function turma()
    {
        return $this->belongsTo(Turmas::class);
    }
}
