<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Disciplinas extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nome',
        'descricao',
    ];

    public function curso()
    {
        return $this->belongsTo(Cursos::class);
    }

    public function turmas()
    {
        return $this->belongsToMany(Turmas::class);
    }
}
