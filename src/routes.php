<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Controllers\ShopController;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});
$app->get('/shops', ShopController::class . ':get');
$app->post('/shop', ShopController::class . ':create');
$app->put('/shop/{id}', ShopController::class . ':update');
$app->delete('/shop/{id}', ShopController::class . ':delete');
