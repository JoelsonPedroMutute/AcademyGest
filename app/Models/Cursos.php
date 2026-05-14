<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Cursos extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nome',
        'descricao',
        'duracao'
    ];

    public function disciplinas()
    {
        return $this->hasMany(Disciplinas::class);
    }
}
