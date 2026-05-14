<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aluno extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'data_nascimento',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    public function frequencias()
    {
        return $this->hasMany(Frequencia::class);
    }
}
