<?php
namespace App\Validators;

use Slim\Http\Request;
use Slim\Http\Response;

class CategoryValidator extends Validator
{
    public function post (Request $request, Response $response, $next)
    {
        $type = $request->getAttribute('route')->getArguments()['category_type'];
        $this->require('name');

        if ('sub_category' === $type) {
            $this->require('main_category_id');
        }
    }

    public function put (Request $request, Response $response, $next)
    {
        $type = $request->getAttribute('route')->getArguments()['category_type'];
        $this->require('name');

        if ('sub_category' === $type) {
            $this->require('main_category_id');
        }
    }
}
