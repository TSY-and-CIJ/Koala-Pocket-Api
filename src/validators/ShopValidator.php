<?php
namespace App\Validators;

use Slim\Http\Request;
use Slim\Http\Response;

class ShopValidator extends Validator
{
    protected function post(Request $request, Response $response, $next)
    {
        $this->require('name');
    }

    protected function put(Request $request, Response $response, $next)
    {
        $this->require('name');
    }
}
