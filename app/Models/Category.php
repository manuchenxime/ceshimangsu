<?php

namespace App\Models;

use Elo\Modelo;

class Category extends Modelo
{
    protected array $temUm = [
        'cursos' => Course::class,
    ];

}

