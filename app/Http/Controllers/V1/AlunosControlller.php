<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Alunos;

class AlunosControlller extends Controller
{
    public function index()
    {
        return Alunos::all();
    }
}
