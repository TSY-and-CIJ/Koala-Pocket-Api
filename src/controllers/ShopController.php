<?php
namespace App\Controllers;

use App\Models\Shop;
use Slim\Http\Request;
use Slim\Http\Response;

class ShopController extends BaseController
{
    public function get(Request $request, Response $response, array $args)
    {
        $shops = Shop::query()->select(['id', 'name'])->get()->toArray();
        return $this->successReturn($response, $shops);
    }

    public function post(Request $request, Response $response, array $args)
    {
        $request = $request->getParams();
        try {
            Shop::create([
                'name' => $request['name']
            ]);
        } catch (\Exception $e) {
            $this->serverErrorReturn($response, $e->getMessage());
        }

        return $this->successReturn($response, $request);
    }

    public function put(Request $request, Response $response, array $args)
    {
        $request = $request->getParams();
        try {
            $shop = Shop::find($args['id']);
            if (!$shop) {
                throw new \Exception("The shop is not found. (shop_id: {$args['id']})");
            }

            $shop->update(['name' => $request['name']]);
        } catch (\Exception $e) {
            return $this->serverErrorReturn($response, $e->getMessage());
        }

        return $this->successReturn($response, $shop->toArray());
    }

    public function delete(Request $request, Response $response, array $args)
    {
        try {
            $shop = Shop::find($args['id']);
            if (!$shop) {
                throw new \Exception("The shop is not found. (shop_id: {$args['id']})");
            }

            Shop::destroy((int) $args['id']);
        } catch (\Exception $e) {
            return $this->serverErrorReturn($response, $e->getMessage());
        }

        return $this->successReturn($response, $request);
    }
}
