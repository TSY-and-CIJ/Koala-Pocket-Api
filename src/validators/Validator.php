<?php
namespace App\Validators;

use App\traits\ResponseTrait;
use Slim\Http\Request;

class Validator
{
    use ResponseTrait;

    protected $params = [];
    protected $response;
    protected $errorMessage = [];

    public function __invoke(Request $request, $response, $next)
    {
        $this->params = $request->getParams();
        $this->response = $response;

        $method = strtolower($request->getMethod());
        if (method_exists($this, $method)) {
            $this->$method($request, $response, $next);
        }

        if ([] !== $this->errorMessage) {
            return $this->unprocessableReturn($this->response, implode("\n", $this->errorMessage));
        }

        return $next($request, $response);
    }

    protected function require($column)
    {
        if (!isset($this->params[$column])) {
            $this->errorMessage[$column . ':require'] = "The Field: $column is required.";
        }
    }
}
