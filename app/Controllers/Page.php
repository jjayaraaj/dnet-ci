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

    public function Investment()
    {
        return view('Investment/index');
    }

    public function AxOnePay()
    {
        return view('AxOnePay/index');
    }

    public function TreasuryManagement()
    {
        return view('TreasuryManagement/index');
    }

    public function Annata()
    {
        return view('Annata/index');
    }

    public function PropGoto()
    {
        return view('PropGoto/index');
    }
}
