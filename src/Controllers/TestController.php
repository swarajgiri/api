<?php

namespace API\Controllers;

use Symfony\Component\HttpFoundation\Request;
use League\Route\Http\JsonResponse as Response;

class TestController
{
    public function get(Request $request)
    {
        return new Response\Ok([
            'hello' => 'world'
        ]);
    }
}
