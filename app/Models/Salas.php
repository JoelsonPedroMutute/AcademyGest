<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Salas extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nome',
        'bloco',
        'capacidade',
        'tipo',
        'status',
    ];

    public function disciplinas()
    {
        return $this->hasMany(Disciplinas::class);
    }
}
