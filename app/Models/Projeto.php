<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'img_principal',
        'img_secundaria',
        'img_terciaria',
        'data_inicio',
        'data_final',
    ];
}
