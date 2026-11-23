<?php

declare(strict_types=1);

use App\Controllers\CourseController;
use App\Controllers\CategoryController;

/** @var Haki\Haki $app */

$app->get('/curso', [CourseController::class, 'all']);
$app->post('/api/cursos', [CourseController::class, 'store']);
$app->get('/api/cursos/{id}', [CourseController::class, 'show']);
$app->put('api/cursos/{id}', [CourseController::class, 'update']);
$app->delete('api/cursos/{id}', [CourseController::class, 'delete']);


$app->post('/api/categorias', [CategoryController::class, 'store']);
$app->get('api/categorias/{id}', [CategoryController::class, 'show']);
$app->put('api/categorias/{id}', [CategoryController::class, 'update']);
$app->delete('api/categorias/{id}', [CategoryController::class, 'delete']);
