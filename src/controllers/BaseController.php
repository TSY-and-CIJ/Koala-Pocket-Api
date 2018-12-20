<?php

namespace App\controllers;

use Slim\Http\Response;

class BaseController
{
    protected function successReturn(Response $res, $data) {
        return $res->withStatus(200)->withJson($this->generateOutput($data));
    }

    protected function generateOutput($data, $status = 200, $message = "")
    {
        return [
            "status" => $status,
            "message" => $message,
            "data" => $data
        ];
    }
}
