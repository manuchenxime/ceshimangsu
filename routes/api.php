<?php

declare(strict_types=1);

use App\Controllers\CourseController;

/** @var Haki\Haki $app */

$app->get('/produtos', [CourseController::class, 'index']);
$app->get('/produtos/{id}', [CourseController::class, 'show']);