<?php

use App\Controllers\CategoryController;
use App\Controllers\ShopController;
use App\Validators\CategoryValidator;
use App\Validators\ShopValidator;
use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/shops', ShopController::class);
$app->group('/shop', function () use ($app) {
    $app->post('', ShopController::class);
    $app->group('/{id:[0-9]+}', function () use ($app) {
        $app->map(['PUT', 'DELETE'], '', ShopController::class);
    });
})->add(ShopValidator::class);

$app->get('/categories', CategoryController::class . ':getAll');

$app->group('/category/{category_type:main_category|sub_category}', function () use ($app) {
    $app->post('', CategoryController::class);
    $app->group('/{id:[0-9]+}', function () use ($app) {
        $app->map(['PUT', 'DELETE'], '', CategoryController::class);
    });
})->add(CategoryValidator::class);
