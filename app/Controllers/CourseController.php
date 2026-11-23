<?php


declare(strict_types=1);

namespace App\Controllers;

use Haki\Http\Request;

final class CourseController
{
    public function index(Request $request): array
    {
        $pagina = (int)$request->query('pagina', 1);

        return ['pagina' => $pagina, 'courses' => []];
    }

    public function show(int $id): array
    {
        return ['course' => ['id' => $id]];
    }
}