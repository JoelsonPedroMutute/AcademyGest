<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Frequencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'aluno_id',
        'disciplina_id',
        'turma_id',
        'status',
        'data',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class);
    }

    public function turma()
    {
        return $this->belongsTo(Turma::class);
    }
}
