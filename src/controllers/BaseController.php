<?php

namespace App\controllers;

use Slim\Http\Response;

class BaseController
{
    protected function unprocessableReturn(Response $res, $message)
    {
        return $res->withStatus(422)->withJson($this->generateOutput([], 422, $message));
    }

    protected function successReturn(Response $res, $data)
    {
        return $res->withStatus(200)->withJson($this->generateOutput($data));
    }

    protected function serverErrorReturn(Response $res, $message)
    {
        return $res->withStatus(500)->withJson($this->generateOutput([], 500, $message));
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
