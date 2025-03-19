<?php

namespace App\controllers;

class ErrorController
{
    public function show404()
    {
        http_response_code(404);
        echo "Page Not Found";
    }
}