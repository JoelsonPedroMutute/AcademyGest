<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Docentes extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'data_nascimento',
        'especialidade',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function disciplinas()
    {
        return $this->hasMany(Disciplinas::class);
    }
}
