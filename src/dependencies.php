<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// 404 error handler
$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        $response = new \Slim\Http\Response(404);
        return $response->write(json_encode([
            "status" => 404,
            "message" => 'The api not found.',
            "data" => []
        ]));
    };
};

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Service factory for the ORM
$container['db'] = function () use ($capsule) {
    return $capsule;
};
