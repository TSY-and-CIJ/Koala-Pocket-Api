<?php
namespace App\Controllers;

use App\Models\Shop;
use Slim\Http\Request;
use Slim\Http\Response;

class ShopController
{
    public function get(Request $request, Response $response)
    {
        $shops = Shop::query()->select(['id', 'name'])->get()->toArray();
        return $response->withStatus(200)->withJson($shops);
    }
}
