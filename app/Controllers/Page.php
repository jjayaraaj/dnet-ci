<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function BidManagement()
    {
        return view('BidManagement/index');
    }


    public function ContractManagement()
    {
        return view('ContractManagement/index');
    }
}
