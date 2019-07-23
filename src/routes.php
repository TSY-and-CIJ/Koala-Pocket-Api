<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Controllers\ShopController;
use App\Validators\ShopValidator;

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
