<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['test'] = '';
        return view('Home/index', $data);
    }
}
