<?php
namespace App\Controllers;

use App\Models\Shop;
use Slim\Http\Request;
use Slim\Http\Response;

class ShopController extends BaseController
{
    public function get(Request $request, Response $response)
    {
        $shops = Shop::query()->select(['id', 'name'])->get()->toArray();
        return $this->successReturn($response, $shops);
    }
}
