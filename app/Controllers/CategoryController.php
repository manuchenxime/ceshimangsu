<?php

declare(strict_types=1);

namespace App\Controllers;

use Haki\Http\Request;

final class CategoryController
{
    public function all(Request $request): array
    {
        $pagina = (int) $request->query('pagina', 1);

        return [
            'pagina' => $pagina,
            'categorias' => []
        ];
    }
    public function store(Request $request): array
    {
        return [
            'mensagem' => 'Categoria criada com sucesso'
        ];
    }
    public function show(int $id): array
    {
        return [
            'categoria' => [
                'id' => $id
            ]
        ];
    }

    public function update(int $id, Request $request): array
    {
        return [
            'mensagem' => 'categoria atualizada',
            'id' => $id
        ];
    }

    public function delete(int $id): array
    {
        return [
            'mensagem' => 'categirua apagada com sucesso',
            'id' => $id
        ];
    }
}
