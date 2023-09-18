<?php

namespace App\Controllers;

use App\Models\Benifits;

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

    public function IndustryRealEstate()
    {
        return view('Industry/realestate');
    }

    public function IndustryConstruction()
    {
        return view('Industry/construction');
    }

    public function IndustryRetail()
    {
        return view('Industry/retail');
    }

    public function IndustryFinancial()
    {

        $benefits = array(
            new Benifits('b1', 's', 'Enhanced financial visibility'),
            new Benifits('b1', 's', 'Streamlined financial processes'),
            new Benifits('b1', 's', 'Real-time insights '),
            new Benifits('b1', 's', 'Improved financial management'),
            new Benifits('b1', 's', 'Cost reduction'),
            new Benifits('b1', 's', 'Better collaboration'),
            new Benifits('b1', 's', 'Improved customer service'),
            new Benifits('b1', 's', 'Efficient decision-making'),
            new Benifits('b1', 's', 'Time-saving through process automation'),
            new Benifits('b1', 's', 'Security & Compliance'),

        );

        $data['benefits'] = $benefits;

        return view('Industry/financial', $data);
    }
}
