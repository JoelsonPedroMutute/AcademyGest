<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aula extends Model
{
    use HasFactory;
    protected $fillable = [
        'turma_id',
        'disciplina_id',
        'sala_id',
        'docente_id',
        'data',
        'horario_inicio',
        'horario_fim',
    ];
    public function turma()
    {
        return $this->belongsTo(Turma::class);
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class);
    }

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }

    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }
}
