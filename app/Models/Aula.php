<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    protected $table = "aula";
    protected $fillable = [
        'nmAula', 'nmProfessor', 'quantAlunos', 'data'
    ];

}
