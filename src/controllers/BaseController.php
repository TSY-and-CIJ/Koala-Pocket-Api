<?php

namespace App\controllers;

use App\traits\ResponseTrait;
use Slim\Http\Request;
use Slim\Http\Response;

class BaseController
{
    use ResponseTrait;

    public function __invoke(Request $request, Response $response, array $args)
    {
        $method = $request->getMethod();
        return $this->$method($request, $response, $args);
    }
}
