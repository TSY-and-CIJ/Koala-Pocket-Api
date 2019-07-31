<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Slim\Http\Request;
use Slim\Http\Response;

class CategoryController extends BaseController
{
    public function getAll(Request $request, Response $response, $args)
    {
        $categories = Category::with('subCategories')
            ->select(['id', 'name'])
            ->get()
            ->toArray();

        return $this->successReturn($response, $categories);
    }

    public function post(Request $request, Response $response, array $args)
    {
        try {
            $request = $request->getParams();

            $data = [
                'name' => $request['name'],
                'icon_id' => $request['icon_id'] ?? null,
            ];

            switch ($args['category_type']) {
                case 'main_category':
                    $model = Category::class;
                    break;
                case 'sub_category':
                    $model = SubCategory::class;
                    $data['main_category_id'] = $request['main_category_id'];
                    break;
            }

            $category = $model::create($data);
        } catch (\Exception $e) {
            $this->serverErrorReturn($response, $e->getMessage());
        }

        return $this->successReturn($response, $category->toArray());
    }

    public function put(Request $request, Response $response, array $args)
    {
        try {
            $request = $request->getParams();

            $data = [
                'name' => $request['name'],
                'icon_id' => $request['icon_id'] ?? null,
            ];

            switch ($args['category_type']) {
                case 'main_category':
                    $model = Category::class;
                    break;
                case 'sub_category':
                    $model = SubCategory::class;
                    $data['main_category_id'] = $request['main_category_id'];
                    break;
            }

            $category = $model::find($args['id']);

            if (!$category) {
                throw new \Exception("The category is not found. (category_id: {$args['id']})");
            }

            $category->update($data);
        } catch (\Exception $e) {
            $this->serverErrorReturn($response, $e->getMessage());
        }

        return $this->successReturn($response, $category->toArray());
    }

    public function delete(Request $request, Response $response, array $args)
    {
        try {
            if ('main_category' === $args['category_type']) {
                $model = Category::class;
            }

            if ('sub_category' === $args['category_type']) {
                $model = SubCategory::class;
            }

            $category = $model::find($args['id']);

            if (!$category) {
                throw new \Exception("The category is not found. (category_id: {$args['id']})");
            }

            $model::destroy((int) $args['id']);
        } catch (\Exception $e) {
            return $this->serverErrorReturn($response, $e->getMessage());
        }

        return $this->successReturn($response, $request);
    }
}
