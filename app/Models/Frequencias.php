<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Frequencias extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'aluno_id',
        'disciplina_id',
        'data',
        'estado',
    ];
    public function aluno()
    {
        return $this->belongsTo(Alunos::class);
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplinas::class);
    }
}
