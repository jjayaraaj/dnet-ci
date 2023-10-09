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
            new Benifits('b1', 's', 'Enhanced financial visibility', 'enhanced-financial'),
            new Benifits('b1', 's', 'Streamlined financial processes', 'streamlined-financial'),
            new Benifits('b1', 's', 'Real-time insights ', 'real-time-insights'),
            new Benifits('b1', 's', 'Improved financial management', 'improved-financial'),
            new Benifits('b1', 's', 'Cost reduction', 'cost-reduction'),
            new Benifits('b1', 's', 'Better collaboration', 'better-collaboration'),
            new Benifits('b1', 's', 'Improved customer service', 'improved-customer-service'),
            new Benifits('b1', 's', 'Efficient decision-making', 'efficient-decision'),
            new Benifits('b1', 's', 'Time-saving through process automation', 'time-saving'),
            new Benifits('b1', 's', 'Security & Compliance', 'security-compliance'),

        );

        $data['benefits'] = $benefits;

        return view('Industry/financial', $data);
    }


    public function ServiceImplementation()
    {


        $benefits = array(
            new Benifits('b1', 'RealEstatePro', 'Leading Property Management solution', 'realestate-pro'),
            new Benifits('b1', 'Contract Management', 'Project Sub-contractor tasks monitoring', 'contract-management'),
            new Benifits('b1', 'Bid Management', 'Facilitating Bid Contracts & execution', 'bid-management'),
            new Benifits('b1', 'Investment Portfolio Management', 'Effective control of Investment Portfolios', 'investment-portfolio-management'),
            new Benifits('b1', 'Treasury Managemen', 'Optimize and track loan management', 'treasury-management'),
            new Benifits('b1', 'AXOnePay', 'Cutting-edge Payroll Solutions', 'axone-pay'),

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
    public function Contact()
    {
        return view('Contact/index');
    }

    public function My404()
    {
        return view('my_404');
    }
}
