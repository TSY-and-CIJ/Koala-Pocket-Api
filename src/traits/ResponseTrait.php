<?php
namespace App\traits;

use Slim\Http\Response;

trait ResponseTrait
{
    public function unprocessableReturn(Response $res, $message)
    {
        return $res->withStatus(422)->withJson($this->generateOutput([], 422, $message));
    }

    public function notFoundReturn(Response $res, $message)
    {
        return $res->withStatus(404)->withJson($this->generateOutput([], 404, $message));
    }

    public function successReturn(Response $res, $data)
    {
        return $res->withStatus(200)->withJson($this->generateOutput($data));
    }

    public function serverErrorReturn(Response $res, $message)
    {
        return $res->withStatus(500)->withJson($this->generateOutput([], 500, $message));
    }

    public function generateOutput($data, $status = 200, $message = "")
    {
        return [
            "status" => $status,
            "message" => $message,
            "data" => $data
        ];
    }
}
