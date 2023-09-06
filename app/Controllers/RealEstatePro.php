<?php

namespace App\Controllers;

class RealEstatePro extends BaseController
{
    public function index()
    {
        return view('RealEstatePro/index');
    }

    public function leasing()
    {
        return view('RealEstatePro/property-leasing');
    }
}
