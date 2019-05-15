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

    public function create(Request $request, Response $response)
    {
        $request = $request->getParams();
        if (!isset($request['name'])) {
            return $this->unprocessableReturn($response, "缺少 name 欄位.");
        }

        try {
            Shop::create([
                'name' => $request['name']
            ]);
        } catch (\Exception $e) {
            $this->serverErrorReturn($response, $e->getMessage());
        }

        return $this->successReturn($response, $request);
    }
}
