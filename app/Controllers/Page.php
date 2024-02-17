<?php

namespace App\Controllers;

use App\Models\Benifits;
use CodeIgniter\API\ResponseTrait;


class Page extends BaseController
{
  use ResponseTrait;

  protected $session;


  function __construct()
  {

    $this->session = \Config\Services::session();
    $this->session->start();
  }

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
  public function PrivacyPolicy()
  {
    return view('privacy-policy');
  }



  public function downloadBrochure()
  {




    $this->request->getPost();

    $honey = $this->request->getVar('commonHoney');

    if (!empty($honey)) {

      // print_r($honey);
      return false;
    }

    $downloadDoc = "";

    switch ($this->request->getVar('solution')) {
      case "Contract-Management":
        $downloadDoc = "Contract-Management";
        break;
      case "Property-Management":
        $downloadDoc = "RealEstatePro";
        break;
      case "Bid-Management":
        $downloadDoc = "Bid-Management";
        break;
      case "Treasury-Management":
        $downloadDoc = "Treasury-Management";
        break;
      case "Investment-Portfolio-Management":
        $downloadDoc = "Investment-Portfolio-Management";
        break;
      case "AXOnePay":
        $downloadDoc = "AXOnePay";
        break;
      default:
        echo "Your favorite color is neither red, blue, nor green!";
    }

    $downloadFile = base_url() . '/pdf/' . $downloadDoc . '.pdf';


    $to = $this->request->getVar('commonFormEmail');
    $subject = $this->request->getVar('solution');
    // $message = $this->request->getVar('commonDownloadFlag');

    $email = \Config\Services::email();
    $email->setTo($to);
    $email->setFrom('enquiry@dnetsoft.com', 'Brochure');
    $email->setBCC('enquiry@dnetsoft.com');

    $email->setSubject($subject);




    $emailTemplate = '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Template</title>
</head>

<body style="margin: 0; padding: 0;">

  <!-- Header Section -->
  <header style="background-color: #f2f2f2; padding: 20px;">
    <img src="https://dnetsoft.com/wp-content/themes/dnetsoft/images/dnet-logo.svg" alt="Logo" style="display: block; max-width: 100%;">
  </header>

  <!-- Body Section -->
  <section style="padding: 40px;">
  <h1 style="margin-top: 0;">Hi Customer,</h1>

  <p style="padding-top:10px">
  We sincerely appreciate your interest in our company and your recent download of our brochure.
We are delighted to provide you with valuable insights into our products and services.
Please click the link below to access the brochure: </p>
<p>
<a href="' . $downloadFile . '" target="_blank">[Download the Brochure]</a>
</p>
<p style="padding-top:10px">The brochure is a quick and convenient resource that provides in-depth insights into our solutions,
covering key features, benefits, and much more. We trust it will be an excellent resource in helping
you understand the value we can provide.</p>
<p style="padding-top:10px">If you have any questions, require further assistance, or wish to discuss your specific needs in more
detail, please feel free to reach out. Our dedicated team is always here to support you and provide
the information you seek.</p>
We look forward to the opportunity to serve your needs and answer any questions you may have.</p>


  <h1 style="margin-top: 10px;">Submitted Details</h1>
  <table>
    <tr>
      <th>Name</th>
      <th>Entered Details</th>
    </tr>
    <tr>
      <td>Name</td>
      <td>' .  $this->request->getVar('commonFormName') . '</td>
    </tr>
    <tr>
      <td>Email ID</td>
      <td>' .  $this->request->getVar('commonFormEmail') . '</td>
    </tr>
    <tr>
      <td>Company Name</td>
      <td>' .  $this->request->getVar('commonFormCompany') . '</td>
    </tr>
    <tr>
      <td>Phone</td>
      <td>' . $this->request->getVar('commonDownloadFlag') . ' ' . $this->request->getVar('commonFormPhone4') . '</td>
    </tr>
    <tr>
      <td>Dynamic Netsoft Technologies Brochure</td>
      <td><a href="#"></a>' . $this->request->getVar('solution') . ' </a></td>
    </tr>
   
  </table>

 
    <br><br>
    <p>
    Regards,
    Dynamics Netsoft Team
    
    <br><br>
    For more information, please contact us at: enquiry@dnetsoft.com
      
       
    </p>
    
  </section>

  <!-- Footer Section -->
  <footer style="background-color: #f2f2f2; padding: 20px; text-align: center;">
    <p style="margin: 0;">
      &copy; 2023 Dynamic Netsoft Technologies. All rights reserved.
    </p>
  </footer>

</body>

</html>
';

    $email->setMessage($emailTemplate);
    if ($email->send()) {
      //echo 'Email successfully sent';

      $this->session->set('downloadFile', $downloadFile);

      echo session()->get('downloadFile');
      return redirect()->to(base_url() . '/brochure-thankyou');
    } else {
      $data = $email->printDebugger(['headers']);

      //return redirect()->route('/thankyou');


      return redirect()->to(base_url() . '/not-found');

      //echo $this->session->get("downloadFile");

      //print_r($data);
    }

    // return redirect()->to(base_url() . '/thankyou');
  }

  public function TestDown()
  {
    echo "ts";

    return false;
  }

  public function IndividualDownload()
  {


    $this->request->getPost();




    $honey = $this->request->getVar('broHoney');

    if (!empty($honey)) {
      // print_r($honey);
      return false;
    }
    $downloadDoc = "";

    switch ($this->request->getVar('broDoc')) {
      case "contract-management-software-dynamics-365":
        $downloadDoc = "Contract-Management";
        break;
      case "property-management-software-dynamics-365":
        $downloadDoc = "RealEstatePro";
        break;
      case "dynamics-365-bid-management-software":
        $downloadDoc = "Bid-Management";
        break;
      case "treasury-management-software-dynamics":
        $downloadDoc = "Treasury-Management";
        break;
      case "investment-portfolio-management-software-dynamics":
        $downloadDoc = "Investment-Portfolio-Management";
        break;
      case "dynamics-365-HR-payroll":
        $downloadDoc = "AXOnePay";
        break;
      case "microsoft-dynamics-365-for-real-estate":
        $downloadDoc = "Real-Estate-Management";
        break;
      case "microsoft-dynamics-365-construction-erp":
        $downloadDoc = "Construction-Management";
        break;
      default:
        echo "Something went wrong";
    }

    $downloadFile = base_url() . '/pdf/' . $downloadDoc . '.pdf';


    $to = $this->request->getVar('broEmail');
    $subject = 'Download Request for ' . $downloadDoc;
    // $message = $this->request->getVar('commonDownloadFlag');

    $email = \Config\Services::email();
    $email->setTo($to);
    $email->setFrom('enquiry@dnetsoft.com', 'Brochure');
    $email->setBCC('enquiry@dnetsoft.com');
    $email->setSubject($subject);




    $emailTemplate = '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Template</title>
</head>

<body style="margin: 0; padding: 0;">

  <!-- Header Section -->
  <header style="background-color: #f2f2f2; padding: 20px;">
    <img src="https://dnetsoft.com/images/dnet-logo.svg" alt="Logo" style="display: block; max-width: 100%;">
  </header>

  <!-- Body Section -->
  <section style="padding: 40px;">
  <h1 style="margin-top: 0;">Hi Customer,</h1>

  <p style="padding-top:10px">
  We sincerely appreciate your interest in our company and your recent download of our brochure.
We are delighted to provide you with valuable insights into our products and services.
Please click the link below to access the brochure: </p>
<p>
<a href="' . $downloadFile . '" target="_blank">[Download the Brochure]</a>
</p>
<p style="padding-top:10px">The brochure is a quick and convenient resource that provides in-depth insights into our solutions,
covering key features, benefits, and much more. We trust it will be an excellent resource in helping
you understand the value we can provide.</p>
<p style="padding-top:10px">If you have any questions, require further assistance, or wish to discuss your specific needs in more
detail, please feel free to reach out. Our dedicated team is always here to support you and provide
the information you seek.</p>
We look forward to the opportunity to serve your needs and answer any questions you may have.</p>


  <h1 style="margin-top: 10px;">Submitted Details</h1>
  <table>
    <tr>
      <th>Name</th>
      <th>Entered Details</th>
    </tr>
    <tr>
      <td>Name</td>
      <td>' .  $this->request->getVar('broName') . '</td>
    </tr>
    <tr>
      <td>Email ID</td>
      <td>' .  $this->request->getVar('broEmail') . '</td>
    </tr>
    <tr>
      <td>Company Name</td>
      <td>' .  $this->request->getVar('broCompany') . '</td>
    </tr>
    <tr>
      <td>Phone</td>
      <td>' . $this->request->getVar('broDownloadFlag') . ' ' . $this->request->getVar('phone2') . '</td>
    </tr>
    <tr>
      <td>Dynamic Netsoft Technologies Brochure</td>
      <td><a href="#"></a>' . $this->request->getVar('broDoc') . ' </a></td>
    </tr>
   
  </table>

 
    <br><br>
    <p>
    Regards,
    Dynamics Netsoft Team
    
    <br><br>
    For more information, please contact us at: enquiry@dnetsoft.com
      
       
    </p>
    
  </section>

  <!-- Footer Section -->
  <footer style="background-color: #f2f2f2; padding: 20px; text-align: center;">
    <p style="margin: 0;">
      &copy; 2023 Dynamic Netsoft Technologies. All rights reserved.
    </p>
  </footer>

</body>

</html>
';

    $email->setMessage($emailTemplate);



    if ($email->send()) {
      echo 'Email successfully sent';

      $this->session->set('downloadFile', $downloadFile);
      // echo session()->get('downloadFile');
      return redirect()->to(base_url() . '/brochure-thankyou');
    } else {
      // $data = $email->printDebugger(['headers']);
      // $this->session->set('downloadFile', $downloadFile);


      // echo $this->session->get('downloadFile');

      //echo session()->get('downloadFile');
      return redirect()->to(base_url() . '/not-found');


      // print_r($data);
    }



    //  return redirect()->to(base_url() . '/brochure-thankyou');
  }

  public function DemoRequest()
  {
    $this->request->getPost();

    $honey = $this->request->getVar('demoHoney');

    if (!empty($honey)) {
      // print_r($honey);
      return false;
    }

    $to = 'enquiry@dnetsoft.com';
    $subject = 'Schedule a Demo Request for DnestSoft from ' . $this->request->getVar('demoName');
    // $message = $this->request->getVar('commonDownloadFlag');

    $email = \Config\Services::email();
    $email->setTo($to);
    $email->setFrom('enquiry@dnetsoft.com', 'Demo Form Request');
    $email->setBCC('enquiry@dnetsoft.com');

    $email->setSubject($subject);

    $emailTemplate = '<!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Email Template</title>
    </head>
    
    <body style="margin: 0; padding: 0;">
    
      <!-- Header Section -->
      <header style="background-color: #f2f2f2; padding: 20px;">
        <img src="https://dnetsoft.com/images/dnet-logo.svg" alt="Logo" style="display: block; max-width: 100%;">
      </header>
    
      <!-- Body Section -->
      <section style="padding: 40px;">
      <h1 style="margin-top: 0;">Hi Customer,</h1>
    

    
    
      <h1 style="margin-top: 10px;">Submitted Details</h1>
      <table>
        <tr>
          <th>Name</th>
          <th>Entered Details</th>
        </tr>
        <tr>
          <td>Name</td>
          <td>' .  $this->request->getVar('demoName') . '</td>
        </tr>
        <tr>
          <td>Email ID</td>
          <td>' .  $this->request->getVar('demoEmail') . '</td>
        </tr>
        <tr>
          <td>Company Name</td>
          <td>' .  $this->request->getVar('demoCompany') . '</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td>' . $this->request->getVar('demoPhone') . '</td>
        </tr>
        <tr>
        <td>Solution</td>
        <td>' . $this->request->getVar('demoSolution') . '</td>
      </tr>

        <tr>
          <td>Desigination</td>
          <td><a href="#"></a>' . $this->request->getVar('demoDesignation') . ' </a></td>
        </tr>

        <tr>
        <td>Additional Message</td>
        <td><a href="#"></a>' . $this->request->getVar('demoMessage') . ' </a></td>
      </tr>
       
      </table>
    
     
        <br><br>
        <p>
        Regards,
        Dynamics Netsoft Team
        
        <br><br>
        For more information, please contact us at: enquiry@dnetsoft.com
          
           
        </p>
        
      </section>
    
      <!-- Footer Section -->
      <footer style="background-color: #f2f2f2; padding: 20px; text-align: center;">
        <p style="margin: 0;">
          &copy; 2023 Dynamic Netsoft Technologies. All rights reserved.
        </p>
      </footer>
    
    </body>
    
    </html>
    ';

    $email->setMessage($emailTemplate);



    if ($email->send()) {
      echo 'Email successfully sent';

      return redirect()->to(base_url() . '/demo-thankyou');
    } else {

      return redirect()->to(base_url() . '/not-found');


      // print_r($data);
    }







    //return redirect()->to(base_url() . '/demo-thankyou');
  }

  public function ContactRequest()
  {

    // $client = \Config\Services::curlrequest();

    // $data = [
    //   'key1' => 'value1',
    //   'key2' => 'value2',
    //   // ... more data
    // ];

    // try {
    //   $response = $client->post('http://localhost:3000/api', [
    //     'form_params' => $data,
    //     'headers' => [
    //       'Content-Type' => 'application/x-www-form-urlencoded',
    //       // Add any additional headers required by the API
    //     ]
    //   ]);

    //   if ($response->getStatusCode() == 200) {
    //     // For JSON responses
    //     $body = json_decode((string) $response->getBody(), true);

    //     echo $body;

    //     return;
    //     // For other response types
    //     // $body = (string) $response->getBody();

    //     // Process the response body
    //   } else {
    //     $error = (string) $response->getBody();

    //     echo $error;

    //     return;
    //     // Process the error
    //   }
    // } catch (\Exception $e) {
    //   echo $e->getMessage();
    // }

    $this->request->getPost();

    $honey = $this->request->getVar('contactHoney');

    if (!empty($honey)) {
      // print_r($honey);
      return false;
    }

    $to = 'enquiry@dnetsoft.com';
    $subject = 'Enquiry Request for DnestSoft from ' . $this->request->getVar('contactName');
    // $message = $this->request->getVar('commonDownloadFlag');

    $email = \Config\Services::email();
    $email->setTo($to);
    $email->setFrom('enquiry@dnetsoft.com', 'Contact Form Request');
    $email->setBCC('enquiry@dnetsoft.com');
    $email->setSubject($subject);

    $emailTemplate = '<!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Email Template</title>
    </head>
    
    <body style="margin: 0; padding: 0;">
    
      <!-- Header Section -->
      <header style="background-color: #f2f2f2; padding: 20px;">
        <img src="https://dnetsoft.com/images/dnet-logo.svg" alt="Logo" style="display: block; max-width: 100%;">
      </header>
    
      <!-- Body Section -->
      <section style="padding: 40px;">
      <h1 style="margin-top: 0;">Hi Customer,</h1>
    

    
    
      <h1 style="margin-top: 10px;">Submitted Details</h1>
      <table>
        <tr>
          <th>Name</th>
          <th>Entered Details</th>
        </tr>
        <tr>
          <td>Name</td>
          <td>' .  $this->request->getVar('contactName') . '</td>
        </tr>
        <tr>
          <td>Email ID</td>
          <td>' .  $this->request->getVar('contactEmail') . '</td>
        </tr>
        <tr>
          <td>Company Name</td>
          <td>' .  $this->request->getVar('contactCompany') . '</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td>' . $this->request->getVar('contactPhone') . '</td>
        </tr>
        <tr>
          <td>Desigination</td>
          <td><a href="#"></a>' . $this->request->getVar('contactDesignation') . ' </a></td>
        </tr>
       
      </table>
    
     
        <br><br>
        <p>
        Regards,
        Dynamics Netsoft Team
        
        <br><br>
        For more information, please contact us at: enquiry@dnetsoft.com
          
           
        </p>
        
      </section>
    
      <!-- Footer Section -->
      <footer style="background-color: #f2f2f2; padding: 20px; text-align: center;">
        <p style="margin: 0;">
          &copy; 2023 Dynamic Netsoft Technologies. All rights reserved.
        </p>
      </footer>
    
    </body>
    
    </html>
    ';

    $email->setMessage($emailTemplate);



    if ($email->send()) {
      echo 'Email successfully sent';

      return redirect()->to(base_url() . '/contact-thankyou');
    } else {

      return redirect()->to(base_url() . '/not-found');


      // print_r($data);
    }



    // return view('Thankyou/contact-thankyou');
  }

  public function ContactThankyou()
  {
    return view('Thankyou/contact-thankyou');
  }

  public function Thankyou()
  {
    return view('Thankyou/common-thankyou');
  }

  public function BrochureThankyou()
  {
    return view('Thankyou/brochure-thankyou');
  }

  public function DemoThankyou()
  {
    return view('Thankyou/demo-thankyou');
  }

  // public function show404()
  // {
  //   // Set the status code to 404
  //   $this->response->setStatusCode(404);

  //   // Load your custom 404 view
  //   return view('my_404');
  // }
}
