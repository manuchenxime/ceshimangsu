<?php

namespace App\Models;

use Elo\Modelo;

class Course extends Modelo
{
    protected array $pertenceAMuitos = [
        'categorias' => Category::class,
    ];
}

