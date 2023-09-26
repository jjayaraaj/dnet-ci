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


    public function ServiceImplementation()
    {


        $benefits = array(
            new Benifits('b1', 'RealEstatePro', 'Leading Property Management solution'),
            new Benifits('b1', 'Contract Management', 'Project Sub-contractor tasks monitoring'),
            new Benifits('b1', 'Bid Management', 'Facilitating Bid Contracts & execution'),
            new Benifits('b1', 'Investment Portfolio Management', 'Effective control of Investment Portfolios'),
            new Benifits('b1', 'Treasury Managemen', 'Optimize and track loan management'),
            new Benifits('b1', 'AXOnePay', 'Cutting-edge Payroll Solutions'),

        );




        $data['benefits'] = $benefits;
        return view('Service/implementation', $data);
    }


    public function ServiceSupport()
    {


        $benefits = array();




        $data['benefits'] = $benefits;
        return view('Service/support', $data);
    }


    public function ServiceUpgrade()
    {


        $benefits = array();




        $data['benefits'] = $benefits;
        return view('Service/upgrade', $data);
    }

    public function About()
    {
        return view('About/index');
    }

    public function Partner()
    {
        return view('Partner/index');
    }
}
