<?php

declare(strict_types=1);

namespace App\Models;

final class Course
{
    public function __construct(
        public readonly int $id,
        public readonly string $nome,
        public readonly string $descricao,
        public readonly int $carga_horaria,
        public readonly string $categoria_id,
        public readonly int $criadoEm,
    ) {

    }
    protected array $pertenceAMuitos = [
        'category' => Category::class,
    ];
}