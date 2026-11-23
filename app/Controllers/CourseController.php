<?php

declare(strict_types=1);

namespace App\Controllers;

use Haki\Http\Request;

final class CourseController
{
    public function all(Request $request): array
    {
        $pagina = (int) $request->query('pagina', 1);

        return [
            'pagina' => $pagina,
            'cursos' => []
        ];
    }

    public function store(Request $request): array
    {
        return [
            'mensagem' => 'curso cadastrado com sucesso'
        ];
    }
    public function show(int $id): array
    {
        return [
            'curso' => [
                'id' => $id
            ]
        ];
    }
    public function update(int $id, Request $request): array
    {
        return [
            'mensagem' => 'curso atualizado ',
            'id' => $id
        ];
    }
    public function delete(int $id): array
    {
        return [
            'mensagem' => 'curso apagado com sucesso',
            'id' => $id
        ];
    }
}
