<?php

namespace App\Controllers;

class ErrorController extends BaseController
{
    public function show404()
    {
        // Set the status code to 404
        $this->response->setStatusCode(404);

        // Load your custom 404 view
        return view('my_404');
    }
}
