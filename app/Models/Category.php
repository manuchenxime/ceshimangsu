<?php

namespace App\Models;

use Elo\Modelo;

class Usuario extends Modelo
{
    protected array $temUm = [
        'courses' => Course::class,
    ];

}

