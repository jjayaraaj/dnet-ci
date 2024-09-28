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

    public function sale()
    {
        return view('RealEstatePro/property-sale');
    }

    public function dubai()
    {
        return view('RealEstatePro/dubai');
    }
}
