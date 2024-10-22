<!--<!doctype html>-->
<html class="no-js" lang="en">
<?php $currenUrl = uri_string(); ?>

<?php

$ogTitle = "";
$ogDesc = "";
$ogWeb = "";
switch ($currenUrl) {

  case "microsoft-dynamics-365-for-real-estate";
    $ogTitle = "Microsoft Dynamics 365 for Real Estate Management";
    $ogDesc = "Struggling with property management? Try Microsoft Dynamics 365 for real estate management to streamline operations, enhance efficiency & gain productivity.";
    $ogWeb = "https://dnetsoft.com/microsoft-dynamics-365-for-real-estate";
    break;

  case "microsoft-dynamics-365-construction-erp";
    $ogTitle = "ERP for the Construction Industry on Microsoft Dynamics 365";
    $ogDesc = "Looking for a comprehensive ERP system for your construction business? Experience versatility with our ERP on Microsoft Dynamics 365 for construction industries.";
    $ogWeb = "https://dnetsoft.com/microsoft-dynamics-365-construction-erp";
    break;

  case "microsoft-dynamics-365-for-retail";
    $ogTitle = "Microsoft Dynamics 365 POS for the Retail Industry";
    $ogDesc = "Overwhelmed by retail disparities? Bridge the gaps and enrich your brand value with Microsoft Dynamics 365 retail POS. Achieve a cohesive retail experience.";
    $ogWeb = "https://dnetsoft.com/microsoft-dynamics-365-for-retail";
    break;

  case "microsoft-dynamics-365-financial-services";
    $ogTitle = "Microsoft Dynamics 365 for Financial Services";
    $ogDesc = "Struggling with financial visibility & complexity? Discover how Microsoft Dynamics 365 for financial services empower you to gain control and maximize profitability";
    $ogWeb = "https://dnetsoft.com/microsoft-dynamics-365-financial-services";
    break;


  case "property-management-software-dynamics-365";
    $ogTitle = "All-in-One Property Management Software on Dynamics 365";
    $ogDesc = "Lagging behind your tech-advanced competitors? Gain insights to manage your property portfolio with Microsoft Dynamics 365 Property Management solution.";
    $ogWeb = "https://dnetsoft.com/property-management-software-dynamics-365";
    break;

  case "property-leasing";
    $ogTitle = "Property Leasing Management Solution on Microsoft Dynamics 365";
    $ogDesc = "Tired of managing property leases manually? Simplify workflows, enhance efficiency, and boost productivity with property lease management software on Dynamics.";
    $ogWeb = "https://dnetsoft.com/property-leasing";
    break;

  case "property-sale";
    $ogTitle = "Microsoft Dynamics 365 Solution for Property Sales Management";
    $ogDesc = "Seeking to optimize your real estate sales strategy? Unleash the potential of Dynamics 365 for property sales management – Make your vision a reality!";
    $ogWeb = "https://dnetsoft.com/property-sale";
    break;

  case "dynamics-365-bid-management-software";
    $ogTitle = "A Leading Bid Management Software on Microsoft Dynamics 365";
    $ogDesc = "Tired of misjudged estimates and over-optimistic delivery projections? Choose the best Dynamics 365 Bid Management Software. Win lucrative contracts confidently!";
    $ogWeb = "https://dnetsoft.com/dynamics-365-bid-management-software";
    break;

  case "contract-management-software-dynamics-365";
    $ogTitle = "Contract Management Software on Dynamics 365 | DNETSOFT";
    $ogDesc = "Struggling with contract chaos? Uncover strategic solutions with Microsoft Dynamics 365 Contract Management. Optimize your construction and engineering projects.";
    $ogWeb = "https://dnetsoft.com/contract-management-software-dynamics-365";
    break;

  case "dynamics-365-HR-payroll";
    $ogTitle = "Microsoft Dynamics 365 HR and Payroll Management - AXOnePay";
    $ogDesc = "Simplify your payroll process & enhance employee service capabilities with our Microsoft Dynamics 365 Payroll Solution.";
    $ogWeb = "https://dnetsoft.com/dynamics-365-HR-payroll";
    break;

  case "investment-portfolio-management-software-dynamics";
    $ogTitle = "Investment Portfolio Management Software on Dynamics 365";
    $ogDesc = "Juggling with multiple investment systems? Manage all your investments on a single platform with Dynamic Netsoft’s Investment Portfolio Management Software.";
    $ogWeb = "https://dnetsoft.com/investment-portfolio-management-software-dynamics";
    break;

  case "treasury-management-software-dynamics";
    $ogTitle = "Experience Convenient Treasury Management System on Dynamics 365";
    $ogDesc = "Do loan management complexities leave you feeling drained? Simplify the process and optimize shareholder value with our Treasury Management system on Dynamics 365.";
    $ogWeb = "https://dnetsoft.com/treasury-management-software-dynamics";
    break;

  default:
    $ogTitle = "Microsoft Dynamics Partner | D365 F&O - Dynamics NetSoft";
    $ogDesc = "Stuck with multiple legacy systems? Evolve with Dynamic Netsoft, a Microsoft Dynamics 365 Gold partner offering ERP & CRM solutions for Property & Construction industries.";
    $ogWeb = "https://dnetsoft.com/";
}

?>


<head>
  <meta charset="utf-8">
  <title><?= $this->renderSection("title") ?></title>
  <meta name="description" content="<?= $this->renderSection('description') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="<?= $ogTitle ?>" />
  <meta property="og:description" content="<?= $ogDesc ?>" />
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $ogWeb ?>" />
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="<?php echo base_url() ?>css/normalize.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/css/app.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/css/owl.theme.default.min.css">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600;1,700;1,800&family=Poppins:wght@400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

  <?php
  if ($currenUrl == '/') {
  ?>
    <link rel="canonical" href="<?php echo  base_url() . $currenUrl ?>" />
  <?php
  } else {
  ?>
    <link rel="canonical" href="<?php echo  base_url() . '/' . $currenUrl ?>" />
  <?php
  }
  ?>


  <meta name="theme-color" content="#fafafa">

  <?= $this->include('/layouts/bg.php') ?>


  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/564c4c4fc4f9dae5635fe3b7/default';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NNCQHF');
  </script>
  <!-- End Google Tag Manager -->

  <?php
  // if ($currenUrl == '/') {
  ?>

  <?= $this->renderSection("schema") ?>



  <?php
  //}
  ?>
</head>

<body x-data="app">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNCQHF" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->



  <?php

  function activeMenu($currenUrl)
  {
    if (
      $currenUrl === 'microsoft-dynamics-365-construction-erp'
      || $currenUrl === 'microsoft-dynamics-365-for-real-estate'
      || $currenUrl === 'microsoft-dynamics-365-for-retail'
      || $currenUrl === 'microsoft-dynamics-365-financial-services'
    ) {
      return 'active';
    } else {
      return '';
    }
  };

  function activeSolution($currenUrl)
  {
    if (
      $currenUrl === 'property-management-software-dynamics-365'
      || $currenUrl === 'property-leasing'
      || $currenUrl === 'property-sale'
      || $currenUrl === 'dynamics-365-bid-management-software'
      || $currenUrl === 'contract-management-software-dynamics-365'
      || $currenUrl === 'dynamics-365-HR-payroll'
      || $currenUrl === 'investment-portfolio-management-software-dynamics'
      || $currenUrl === 'treasury-management-software-dynamics'
      || $currenUrl === 'annata-365'
      || $currenUrl === 'propgoto'
    ) {
      return 'active';
    } else {
      return '';
    }
  };

  function activeService($currenUrl)
  {
    if (
      $currenUrl === 'microsoft-dynamics-365-implementation'
      || $currenUrl === 'dynamics-365-finance-operations-upgrade-services'
      || $currenUrl === 'microsoft-dynamics-365-support'

    ) {
      return 'active';
    } else {
      return '';
    }
  };
  ?>



  <nav x-cloak x-data="{atTop: false, mobNav: false}" aria-label="Global" @scroll.window="atTop = (window.pageYOffset < 50) ? false: true" class="max-w-container   mx-auto left-0 right-0 sticky-nav fixed z-50 transition-all " :class="{ 'shadow-lg': atTop, ' text-white py-4 ': !atTop, 'bg-white  text-indigo-800': atTop, 'bg-primary-light lg:bg-transparent':mobNav }">
    <div class="relative flex items-center justify-between px-5 md:px-0    xl:bg-transparent tv:w-[94em] mx-auto    ">
      <a href="<?php echo base_url() ?>"> <img x-show="!mobNav" src="<?php echo base_url() ?>/images/dnet-logo.svg" class="w-1/2  lg:w-52 xl:w-60 2xl:w-72" alt=""></a>
      <a href="<?php echo base_url() ?>"><img x-show="mobNav" src="<?php echo base_url() ?>/images/footer-dnt-logo-white.svg" class="w-1/2 md:w-80" alt=""></a>
      <div class="menu ">
        <a href="<?php echo base_url() ?>/" class="<?= $currenUrl === '/' ? 'active' : '' ?>">Home </a>
        <div class=" relative group/item">
          <a href="<?php echo base_url() ?>/" class="<?= activeMenu($currenUrl) ?>">

            Industries <img src=" <?php echo base_url() ?>/images/down-arow.svg" alt="">

          </a>
          <div class="absolute   top-4 w-44 invisible  group-hover/item:visible">
            <div class="h-4"></div>
            <div class="bg-white rounded-b-2xl shadow">
              <ul class="sub-menu">
                <li class="p-2 <?= $currenUrl === 'microsoft-dynamics-365-for-real-estate' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-for-real-estate">Real Estate</a></li>
                <li class="p-2 <?= $currenUrl === 'microsoft-dynamics-365-construction-erp' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-construction-erp">Construction</a></li>
                <li class="p-2 <?= $currenUrl === 'microsoft-dynamics-365-for-retail' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-for-retail">Retail</a></li>
                <li class="p-2 <?= $currenUrl === 'microsoft-dynamics-365-financial-services' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-financial-services">Financial Service</a></li>
              </ul>
            </div>

          </div>
        </div>

        <div class=" relative group/item">
          <a href="<?php echo base_url() ?>/" class="<?= activeSolution($currenUrl) ?>">

            Solution <img src=" <?php echo base_url() ?>/images/down-arow.svg" alt="">

          </a>
          <div class="absolute  invisible  top-4  group-hover/item:visible ">
            <div class="h-4"></div>
            <div class="bg-white rounded-2xl ">
              <ul class="sub-menu">
                <li class="relative group/sub  <?= $currenUrl === 'property-management-software-dynamics-365' ? 'active' : '' ?>"><a class="inline-flex " href="<?php echo base_url() ?>/property-management-software-dynamics-365">
                    <div class="w-40">RealEstatePro</div> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                  </a>
                  <div class=" absolute z-20 bg-white  -right-20 border border-gray-50 invisible  group-hover/sub:visible  shadow-xl rounded-2xl w-44">
                    <ul class=" divide-y  divide-gray-100 ">
                      <li class="p-2 <?= $currenUrl === 'property-leasing' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/property-leasing">Property Leasing</a></li>
                      <li class="p-2 <?= $currenUrl === 'property-sale' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/property-sale">Property Sale</a></li>
                    </ul>
                  </div>
                </li>
                <li class="<?= $currenUrl === 'dynamics-365-bid-management-software' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/dynamics-365-bid-management-software">Bid Management</a></li>
                <li class="<?= $currenUrl === 'contract-management-software-dynamics-365' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/contract-management-software-dynamics-365">Contract Management</a></li>
                <li class="<?= $currenUrl === 'dynamics-365-HR-payroll' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/dynamics-365-HR-payroll">AxOnePay - Payroll</a></li>
                <li class="<?= $currenUrl === 'investment-portfolio-management-software-dynamics' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/investment-portfolio-management-software-dynamics">Investment Portfolio Management</a></li>
                <li class="<?= $currenUrl === 'treasury-management-software-dynamics' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/treasury-management-software-dynamics">Treasury Management</a></li>
                <li class="<?= $currenUrl === 'annata-365' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/annata-365">Annata</a></li>
                <li class="<?= $currenUrl === 'propgoto' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/propgoto">PropGoto</a></li>

              </ul>
            </div>

          </div>
        </div>

        <div class=" relative group/item">
          <a href="<?php echo base_url() ?>/" class="<?= activeService($currenUrl) ?>">

            Services <img src="<?php echo base_url() ?>/images/down-arow.svg" alt="">

          </a>
          <div class="absolute   top-4 w-44 invisible  group-hover/item:visible">
            <div class="h-4"></div>
            <div class="bg-white rounded-b-2xl shadow">
              <ul class="sub-menu">
                <li class="p-2  <?= $currenUrl === 'microsoft-dynamics-365-implementation' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-implementation">ERP Implementation</a></li>
                <li class="p-2  <?= $currenUrl === 'dynamics-365-finance-operations-upgrade-services' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/dynamics-365-finance-operations-upgrade-services">Upgrade</a></li>

                <li class="p-2  <?= $currenUrl === 'microsoft-dynamics-365-support' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-support">Support</a></li>
              </ul>
            </div>

          </div>
        </div>
        <a href="<?php echo base_url() ?>/blog" target="_blank">Blog</a>
        <a href="<?php echo base_url() ?>/about-us" class="<?= $currenUrl === 'about-us' ? 'active' : '' ?>">About Us</a>
        <a href="<?php echo base_url() ?>/contact-us" class="<?= $currenUrl === 'contact-us' ? 'active' : '' ?>">Contact Us</a>

      </div>



      <div class=" hidden md:flex lg:ml-2 xl:ml-4 lg:flex lg:items-center  lg:pl-2 xl:pl-4">
        <button class="btn btn-primary" @click="openFormDemoDiv('<?= uri_string() ?>')">
          <span>Enquire Now </span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 hidden md:block">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
          </svg>

        </button>
      </div>

      <div class="flex items-center  lg:hidden">
        <a class=" text-white text-xs px-2 py-2 rounded-3xl font-bold w-[100px] text-center" :class="mobNav? 'bg-d-yellow text-black' : 'bg-primary'" href="<?php echo base_url() ?>/contact-us">
          <span>Enquire Now </span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 hidden md:block">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
          </svg>

        </a>
        <button type="button" class="-my-1 -mr-1 ml-2 h-8 w-8 flex items-center justify-center" @click="mobNav = !mobNav">
          <span class="sr-only">Open navigation</span>

          <svg viewBox="0 0 24 24" class="h-6 w-6 stroke-slate-900" x-show="!mobNav">
            <path d="M3.75 12h16.5M3.75 6.75h16.5M3.75 17.25h16.5" fill="none" stroke-width="1.5" stroke-linecap="round"></path>
          </svg>

          <svg xmlns="http://www.w3.org/2000/svg" x-show="mobNav" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>

        </button>
      </div>




    </div>

    <!-- mobile -->
    <div class="flex md:hidden h-screen bg-primary-gradient  w-full" x-show="mobNav">

      <div class="px-6 py-2 w-full" x-data="{navMob: 0}">
        <ul role="list" class="divide-y divide-blue-400 w-full">
          <li class="py-4">
            <a href="<?php echo base_url() ?>/" class=" font-semibold text-lg">Home</a>
          </li>
          <li class="py-4 " @click="navMob !== 1 ? navMob = 1 : navMob = null">
            <div class="flex items-center justify-between">
              <a class=" font-semibold text-lg">Industries</a>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white w-4 h-4 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>
            </div>

            <div class=" bg-primary w-full h-36 overflow-y-auto px-3 py-5" x-show="navMob === 1">
              <ul class=" space-y-3">
                <li class=" flex text-white gap-x-2 items-cente">

                  <a href="<?php echo base_url() ?>/microsoft-dynamics-365-for-real-estate" class="text-base">Real Estate</a>
                </li>
                <li class=" flex text-white gap-x-2 items-center">

                  <a href="<?php echo base_url() ?>/microsoft-dynamics-365-construction-erp" class="text-base">Construction</a>
                </li>
                <li class=" flex text-white gap-x-2 items-center">

                  <a href="<?php echo base_url() ?>/microsoft-dynamics-365-for-retail" class="text-base">Retail</a>
                </li>
                <li class=" flex text-white gap-x-2 items-center">

                  <a href="<?php echo base_url() ?>/microsoft-dynamics-365-financial-services" class="text-base">Financial Service</a>
                </li>
              </ul>
            </div>

          </li>

          <li class="py-4 " @click="navMob !== 2 ? navMob = 2 : navMob = null">
            <div class="flex items-center justify-between">
              <a class=" font-semibold text-lg">Solutions</a>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-bold text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>
            </div>

            <div class=" bg-primary w-full h-44 overflow-y-auto px-3 py-5" x-show="navMob === 2">
              <ul class=" space-y-3">
                <li class="flex text-white gap-x-2 items-center"><a href="<?php echo base_url() ?>/property-management-software-dynamics-365">RealEstatePro</a></li>
                <li class="flex text-white gap-x-2 items-center "><a href="<?php echo base_url() ?>/property-leasing">Property Leasing</a></li>
                <li class="flex text-white gap-x-2 items-center "><a href="<?php echo base_url() ?>/property-sale">Property Sale</a></li>
                <li class="flex text-white gap-x-2 items-center"><a href="<?php echo base_url() ?>/dynamics-365-bid-management-software">Bid Management</a></li>
                <li class="flex text-white gap-x-2 items-center"><a href="<?php echo base_url() ?>/contract-management-software-dynamics-365">Contract Management</a></li>
                <li class="flex text-white gap-x-2 items-center"><a href="<?php echo base_url() ?>/dynamics-365-HR-payroll">AxOnePay - Payroll</a></li>
                <li class="flex text-white gap-x-2 items-center"><a href="<?php echo base_url() ?>/investment-portfolio-management-software-dynamics">Investment Portfolio Management</a></li>
                <li class="flex text-white gap-x-2 items-center"><a href="<?php echo base_url() ?>/treasury-management-software-dynamics">Treasury Management</a></li>
                <li class="flex text-white gap-x-2 items-center"><a href="<?php echo base_url() ?>/annata-365">Annata</a></li>
                <li class="flex text-white gap-x-2 items-center"><a href="<?php echo base_url() ?>/propgoto">PropGoto</a></li>
              </ul>
            </div>

          </li>

          <li class="py-4 " @click="navMob !== 3 ? navMob = 3 : navMob = null">
            <div class="flex items-center justify-between">
              <a class=" font-semibold text-lg">Services</a>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-bold text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>
            </div>

            <div class=" bg-primary w-full h-36 overflow-y-auto px-3 py-5" x-show="navMob === 3">
              <ul class=" space-y-3">
                <li class="flex text-white gap-x-2 items-center"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-implementation">ERP Implementation</a></li>
                <li class="flex text-white gap-x-2 items-center"><a href="<?php echo base_url() ?>/dynamics-365-finance-operations-upgrade-services">Upgrade</a></li>
                <li class="flex text-white gap-x-2 items-center"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-support">Support</a></li>
              </ul>
            </div>

          </li>


          <li class="py-4">
            <a href="<?php echo base_url() ?>/about-us" class=" font-semibold text-lg">About Us</a>
          </li>
          <li class="py-4">
            <a href="<?php echo base_url() ?>/blog" target="_blank" class=" font-semibold text-lg">Blog</a>
          </li>

          <li class="py-4">
            <a href="<?php echo base_url() ?>/contact-us" class=" font-semibold text-lg">Contact Us</a>
          </li>

          <!-- More items... -->
        </ul>
      </div>
    </div>
  </nav>

  <div>
    <?= $this->renderSection("content") ?>
  </div>


  <!-- success-->

  <?php



  if ($currenUrl !== 'contact-us' && $currenUrl !== 'thankyou' && $currenUrl !== 'brochure-thankyou' && $currenUrl !== 'privacy-policy') {

  ?>

    <!-- testimonial -->
    <div class=" max-w-container big-screen  pt-16 ">
      <div class="w-5/6 mx-auto relative">
        <div class="absolute top-[50%] z-40 flex justify-between w-full left-0 ">


          <button class="customerPrev relative -left-[5%]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="">
              <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" />
            </svg>
          </button>
          <button class="customerNext relative -right-[5%]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-white">
              <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" clip-rule="evenodd" />
            </svg>

          </button>


        </div>
        <div class="heading-1 text-center">Our Global Customers</div>
        <div class="owl-client owl-carousel  owl-theme ">
          <div class="item ">
            <img src="<?php echo base_url() ?>/images/client/al-rajhi.svg" alt="">
          </div>
          <div class="item">
            <img src="<?php echo base_url() ?>/images/client/dart.svg" alt="">
          </div>
          <div class="item">
            <img src="<?php echo base_url() ?>/images/client/ghana-ports-and-harbours-authority.svg" alt="">
          </div>
          <div class="item ">
            <img src="<?php echo base_url() ?>/images/client/indospace.svg" alt="">
          </div>
          <div class="item">
            <img src="<?php echo base_url() ?>/images/client/mtcc.svg" alt="">
          </div>
          <div class="item">
            <img src="<?php echo base_url() ?>/images/client/schlegelvillages.svg" alt="">
          </div>
          <div class="item ">
            <img src="<?php echo base_url() ?>/images/client/tmkn.svg" alt="">
          </div>
          <div class="item">
            <img src="<?php echo base_url() ?>/images/client/union-properties.svg" alt="">
          </div>
          <!-- <div class="item">
          <img src="<?php echo base_url() ?>/images/client/wipro-logo-new-og.svg" alt="">
        </div>
        <div class="item">
          <img src="<?php echo base_url() ?>/images/client/Zerone-logo.svg" alt="">
        </div>
        <div class="item">
          <img src="<?php echo base_url() ?>/images/client/AlfaPeople-Logo.svg" alt="">
        </div>
        <div class="item">
          <img src="<?php echo base_url() ?>/images/client/Annata.svg" alt="">
        </div>
        <div class="item">
          <img src="<?php echo base_url() ?>/images/client/avanade-logo-vector.svg" alt="">
        </div>
        <div class="item">
          <img src="<?php echo base_url() ?>/images/client/crayon-logo-secondary-rgb-original.svg" alt="">
        </div>
        <div class="item">
          <img src="<?php echo base_url() ?>/images/client/Delaware.svg" alt="">
        </div>
        <div class="item">
          <img src="<?php echo base_url() ?>/images/client/dxc_logo_vt_blk_rgb.svg" alt="">
        </div>
        <div class="item">
          <img src="<?php echo base_url() ?>/images/client/Dynamics-Mobile.svg" alt="">
        </div>
        <div class="item">
          <img src="<?php echo base_url() ?>/images/client/Infosys_logo.svg" alt="">
        </div> -->
        </div>
      </div>
    </div>

    <!-- Accreditation -->
    <div class=" hidden lg:block max-w-container big-screen mx-auto pt-8 pb-16">
      <div class="heading-1 text-center">Accreditation</div>

      <div class=" mx-auto py-16">
        <div class="flex flex-wrap gap-8 justify-center">
          <img src="<?php echo base_url() ?>/images/accreditation/image-19.svg" alt="">
          <img src="<?php echo base_url() ?>/images/accreditation/image-20.svg" alt="">
          <img src="<?php echo base_url() ?>/images/accreditation/image-21.svg" alt="">
          <img src="<?php echo base_url() ?>/images/accreditation/image-22.svg" alt="">
          <img src="<?php echo base_url() ?>/images/accreditation/image-23.svg" alt="">
          <img src="<?php echo base_url() ?>/images/accreditation/image-24.svg" alt="">
          <img src="<?php echo base_url() ?>/images/accreditation/image-25.svg" alt="">
          <img src="<?php echo base_url() ?>/images/accreditation/MicrosoftTeams-image-1.svg" alt="">
          <img src="<?php echo base_url() ?>/images/accreditation/MicrosoftTeams-image-2.svg" alt="">
        </div>
      </div>
    </div>

    <!-- digital partner -->
    <?= $this->renderSection("partner") ?>


    <!-- blogs -->
    <?= $this->renderSection("blog") ?>


    <!-- faq -->
    <?= $this->renderSection("faq") ?>
    <!-- form -->
    <div class=" relative bg-form bg-cover h-[630px] ">
      <div class=" max-w-container big-screen mx-auto h-full relative ">

        <div class="flex justify-end ">
          <div class="  w-full lg:w-2/5 h-full bg-form-2 bg-cover rounded-3xl p-10  lg:-mt-16">
            <div class="heading-1 text-center !text-primary">Schedule a Demo</div>
            <div class="h-5"></div>
            <form class=" space-y-5" action="<?php echo base_url() ?>/demo-request" method="POST" id="footerDemo">
              <?= $this->include('/layouts/schedule-demo') ?>
            </form>

          </div>
        </div>

      </div>
    </div>


  <?php

  }
  ?>






  <!--footer localtion -->
  <?php if ($currenUrl === 'property-management-software-dynamics-365-UAE' || $currenUrl === 'property-management-software-dynamics-365-saudi-arabia') { ?>

    <div class="bg-primary bg-footer bg-cover ">
      <div class="max-w-container big-screen mx-auto py-16 space-y-6">
        <div class=" lg:flex justify-between w-full ">
          <div class="w-1/2 space-y-3">
            <div class=" w-2/5 hidden md:block">
              <a href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>/images/footer-dnt-logo-white.svg" alt=""></a>
            </div>

            <div class="flex-1 flex justify-evenly">
              <div class="space-y-4 hidden md:block">
                <div class="text-base font-semibold text-white">COMPANY OVERVIEW</div>
                <div class=" flex flex-col footer-link">
                  <a href="<?php echo base_url() ?>/about-us">About us</a>
                  <a href="<?php echo base_url() ?>/contact-us">Contact us</a>
                  <a href="<?php echo base_url() ?>/blog" target="_blank">Blog</a>
                  <a href="<?php echo base_url() ?>/become-a-partner">Become a partner</a>
                  <a href="<?php echo base_url() ?>/">Careers</a>
                  <a href="<?php echo base_url() ?>/privacy-policy">Privacy policy</a>
                  <a href="<?php echo base_url() ?>/">Events</a>
                </div>
              </div>

              <div class="space-y-4 hidden md:block">
                <div class="text-base font-semibold text-white">SOLUTIONS</div>
                <div class=" flex flex-col footer-link">
                  <a href="<?php echo base_url() ?>/property-management-software-dynamics-365">RealEstatePro</a>
                  <a href="<?php echo base_url() ?>/contract-management-software-dynamics-365">Contract Management</a>
                  <a href="<?php echo base_url() ?>/dynamics-365-bid-management-software"> Bid Management</a>
                  <a href="<?php echo base_url() ?>/treasury-management-software-dynamics"> Treasury Management</a>
                  <a href="<?php echo base_url() ?>/investment-portfolio-management-software-dynamics">Investment Portfolio Management</a>
                  <a href="<?php echo base_url() ?>/dynamics-365-HR-payroll">AXOnePay</a>
                  <a href="<?php echo base_url() ?>/annata-365">Annata 365</a>
                </div>
              </div>

              <div class="space-y-4 hidden md:block">
                <div class="text-base font-semibold text-white">SERVICES</div>
                <div class=" flex flex-col footer-link">
                  <a href="<?php echo base_url() ?>/microsoft-dynamics-365-implementation">ERP Implementation</a>
                  <a href="<?php echo base_url() ?>/dynamics-365-finance-operations-upgrade-services"> Upgrade</a>
                  <a href="<?php echo base_url() ?>/microsoft-dynamics-365-support">Support</a>
                </div>
                <div class="flex  flex-col-reverse lg:flex-row justify-between items-center py-6 lg:py-0 ">
                  <div class=" flex flex-col space-y-4">
                    <div class="text-xl text-white font-bold pb-2 md:pb-0">CONNECT WITH US</div>
                    <div class="flex justify-between pb-3 md:pb-0">
                      <a target="_blank" href="https://www.facebook.com/DynamicNetSoft/" rel="nofollow"><img src="<?php echo base_url() ?>/images/home/facebook.svg" alt="Facebook"></a>
                      <a target="_blank" href="https://www.instagram.com/dynamicnetsoft/" rel="nofollow"><img src="<?php echo base_url() ?>/images/home/instagram.svg" alt="Instagram"></a>
                      <a target="_blank" href="https://www.linkedin.com/company/dynamic-netsoft-technologies-private-limited/" rel="nofollow"><img src="<?php echo base_url() ?>/images/home/linkedin.svg" alt="Linkedin"></a>
                      <a target="_blank" href="https://twitter.com/dynamicnet_soft" rel="nofollow"><img src="<?php echo base_url() ?>/images/home/twitter.svg" alt="Twitter"></a>
                      <a target="_blank" href="https://www.youtube.com/c/DynamicNetsoftChennai" rel="nofollow"><img src="<?php echo base_url() ?>/images/home/youtube.svg" alt="Youtube"></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class=" hidden md:block text-sm text-white font-light text-center lg:text-left px-8 pt-8">Copyright © All Rights Reserved by Dynamic Netsoft Technologies Pvt Ltd</div>


          </div>


          <!-- ksa -->
          <div class="flex-1 space-y-3 p-4 md:p-0">
            <div class="flex items-center gap-x-2">

              <?php if ($currenUrl === 'property-management-software-dynamics-365-UAE') { ?>
                <img src="<?php echo base_url() ?>/images/about/dubai-flag.svg" class="h-10" alt="">
                <div class="text-base font-semibold text-white">Dubai</div>
              <?php } else { ?>

                <img src="<?php echo base_url() ?>/images/about/saudi-arabia.svg" class="h-10" alt="">
                <div class="text-base font-semibold text-white">KSA</div>
              <?php } ?>
            </div>

            <?php if ($currenUrl === 'property-management-software-dynamics-365-UAE') { ?>
              <div class="text-sm text-white font-light space-y-3">
                SAIF Zone – R2-2622 PO Box 123695 Sharjah – U.A.E
                <div> Phone: +971 43216563</div>
                <div><a href="mailto:enquiry@dnetsoft.com" target="_blank">E-mail: enquiry@dnetsoft.com</a></div>
              </div>
            <?php } else { ?>
              <div class="text-sm text-white font-light space-y-3">
                PO Box 90706, Riyadh – 11623 Kingdom of Saudi Arabia
                <div> Phone: +966 11 2926043</div>
                <div><a href="mailto:enquiry@dnetsoft.com" target="_blank">E-mail: enquiry@dnetsoft.com</a></div>
              </div>
            <?php  } ?>


            <div class="md:flex gap-4">
              <div class="md:w-2/5 text-white font-light text-sm">
                <div class=" text-base font-semibold text-white">Business Hours:</div>
                <div class="space-y-2">
                  <div class="flex items-center justify-between">
                    <div class="w-2/5">Monday</div>
                    <div class="w-3/5">9.30 am-6.30 pm</div>
                  </div>
                  <div class="flex items-center justify-between">
                    <div class="w-2/5">Tuesday</div>
                    <div class="w-3/5">9.30 am-6.30 pm</div>
                  </div>
                  <div class="flex items-center justify-between">
                    <div class="w-2/5">Wednesday</div>
                    <div class="w-3/5">9.30 am-6.30 pm</div>
                  </div>
                  <div class="flex items-center justify-between">
                    <div class="w-2/5">Thursday</div>
                    <div class="w-3/5">9.30 am-6.30 pm</div>
                  </div>
                  <div class="flex items-center justify-between">
                    <div class="w-2/5">Friday</div>
                    <div class="w-3/5">9.30 am-6.30 pm</div>
                  </div>
                  <div class="flex items-center justify-between">
                    <div class="w-2/5">Saturday</div>
                    <div class="w-3/5">Closed</div>
                  </div>
                  <div class="flex items-center justify-between">
                    <div class="w-2/5">Sunday</div>
                    <div class="w-3/5">Closed</div>
                  </div>
                </div>
              </div>

              <div class="flex-1">
                <?php if ($currenUrl === 'property-management-software-dynamics-365-UAE') { ?>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7221.321130187439!2d55.2640284!3d25.1809367!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d0b1f76102b%3A0x2fccdc6b94885c5!2sDynamic%20Netsoft%20Technologies%20(FZC)!5e0!3m2!1sen!2sin!4v1729520515375!5m2!1sen!2sin" class="md:w-[400px] md:h-[200px]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <?php } else { ?>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7244.36248242707!2d46.7637041!3d24.7892467!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2efd1c6b5969c7%3A0xe7c420a98b25fd3f!2sDynamic%20Netsoft%20Arabia!5e0!3m2!1sen!2sin!4v1729521508296!5m2!1sen!2sin" class="md:w-[400px] md:h-[200px]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <?php } ?>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  <?php } else { ?>

    <!-- footer -->
    <div class="bg-primary bg-footer bg-cover ">
      <div class="max-w-container big-screen mx-auto py-16 space-y-6">
        <div class=" lg:flex justify-between w-full hidden ">
          <div class=" w-1/3">
            <a href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>/images/footer-dnt-logo-white.svg" alt=""></a>
          </div>
          <div class="flex-1 flex justify-evenly">
            <div class="space-y-4">
              <div class="text-base font-semibold text-white">COMPANY OVERVIEW</div>
              <div class=" flex flex-col footer-link">
                <a href="<?php echo base_url() ?>/about-us">About us</a>
                <a href="<?php echo base_url() ?>/contact-us">Contact us</a>
                <a href="<?php echo base_url() ?>/blog" target="_blank">Blog</a>
                <a href="<?php echo base_url() ?>/become-a-partner">Become a partner</a>
                <a href="<?php echo base_url() ?>/">Careers</a>
                <a href="<?php echo base_url() ?>/privacy-policy">Privacy policy</a>
                <a href="<?php echo base_url() ?>/">Events</a>
              </div>
            </div>

            <div class="space-y-4">
              <div class="text-base font-semibold text-white">SOLUTIONS</div>
              <div class=" flex flex-col footer-link">
                <a href="<?php echo base_url() ?>/property-management-software-dynamics-365">RealEstatePro</a>
                <a href="<?php echo base_url() ?>/contract-management-software-dynamics-365">Contract Management</a>
                <a href="<?php echo base_url() ?>/dynamics-365-bid-management-software"> Bid Management</a>
                <a href="<?php echo base_url() ?>/treasury-management-software-dynamics"> Treasury Management</a>
                <a href="<?php echo base_url() ?>/investment-portfolio-management-software-dynamics">Investment Portfolio Management</a>
                <a href="<?php echo base_url() ?>/dynamics-365-HR-payroll">AXOnePay</a>
                <a href="<?php echo base_url() ?>/annata-365">Annata 365</a>
              </div>
            </div>

            <div class="space-y-4">
              <div class="text-base font-semibold text-white">SERVICES</div>
              <div class=" flex flex-col footer-link">
                <a href="<?php echo base_url() ?>/microsoft-dynamics-365-implementation">ERP Implementation</a>
                <a href="<?php echo base_url() ?>/dynamics-365-finance-operations-upgrade-services"> Upgrade</a>
                <a href="<?php echo base_url() ?>/microsoft-dynamics-365-support">Support</a>
              </div>
            </div>

          </div>
        </div>

        <div class="flex  flex-col-reverse lg:flex-row justify-between items-center py-6 lg:py-0 ">
          <div class=" text-sm text-white font-light text-center lg:text-left ">Copyright © All Rights Reserved by Dynamic Netsoft Technologies Pvt Ltd</div>
          <div class=" flex flex-col space-y-4">
            <div class="text-xl text-white font-bold pb-2 md:pb-0">CONNECT WITH US</div>
            <div class="flex justify-between pb-3 md:pb-0">
              <a target="_blank" href="https://www.facebook.com/DynamicNetSoft/" rel="nofollow"><img src="<?php echo base_url() ?>/images/home/facebook.svg" alt="Facebook"></a>
              <a target="_blank" href="https://www.instagram.com/dynamicnetsoft/" rel="nofollow"><img src="<?php echo base_url() ?>/images/home/instagram.svg" alt="Instagram"></a>
              <a target="_blank" href="https://www.linkedin.com/company/dynamic-netsoft-technologies-private-limited/" rel="nofollow"><img src="<?php echo base_url() ?>/images/home/linkedin.svg" alt="Linkedin"></a>
              <a target="_blank" href="https://twitter.com/dynamicnet_soft" rel="nofollow"><img src="<?php echo base_url() ?>/images/home/twitter.svg" alt="Twitter"></a>
              <a target="_blank" href="https://www.youtube.com/c/DynamicNetsoftChennai" rel="nofollow"><img src="<?php echo base_url() ?>/images/home/youtube.svg" alt="Youtube"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

  <button @click="openCommonDownloadForm" class="fixed z-50 lg:top-1/2  mx-auto flex justify-center hover:bg-yellow-500  btn btn-yellow lg:rotate-90  text-center lg:-right-16  ">Download Brochure </button>
  <div class="fixed lg:hidden bottom-0 z-50 flex items-center justify-between w-full bg-secondary">
    <div class="px-4 py-2 bg-primary-gradient text-white rounded-tr-xl rounded-br-xl flex items-center gap-x-2" @click="openCommonDownloadForm">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path d="M12 1.5a.75.75 0 01.75.75V7.5h-1.5V2.25A.75.75 0 0112 1.5zM11.25 7.5v5.69l-1.72-1.72a.75.75 0 00-1.06 1.06l3 3a.75.75 0 001.06 0l3-3a.75.75 0 10-1.06-1.06l-1.72 1.72V7.5h3.75a3 3 0 013 3v9a3 3 0 01-3 3h-9a3 3 0 01-3-3v-9a3 3 0 013-3h3.75z" />
      </svg>

      Download Brochure
    </div>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-primary">
      <path fill-rule="evenodd" d="M12 2.25c-2.429 0-4.817.178-7.152.521C2.87 3.061 1.5 4.795 1.5 6.741v6.018c0 1.946 1.37 3.68 3.348 3.97.877.129 1.761.234 2.652.316V21a.75.75 0 001.28.53l4.184-4.183a.39.39 0 01.266-.112c2.006-.05 3.982-.22 5.922-.506 1.978-.29 3.348-2.023 3.348-3.97V6.741c0-1.947-1.37-3.68-3.348-3.97A49.145 49.145 0 0012 2.25zM8.25 8.625a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25zm2.625 1.125a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875-1.125a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25z" clip-rule="evenodd" />
    </svg> -->

  </div>
  <?php

  $downFormBgName;

  switch ($currenUrl) {

    case "treasury-management-software-dynamics":
      $downFormBgName = 'treasury-management-system';
      break;
    case "contract-management-software-dynamics-365":
      $downFormBgName = 'dynamics-365-contract-management';
      break;
    case "investment-portfolio-management-software-dynamics":
      $downFormBgName = 'investment-management-software';
      break;
    case "dynamics-365-bid-management-software":
      $downFormBgName = 'best-bid-management-software';
      break;
    case "dynamics-365-HR-payroll":
      $downFormBgName = 'microsoft-dynamics-hr-management';
      break;
    case "property-management-software-dynamics-365":
      $downFormBgName = 'button-image-1';
      break;

    case "microsoft-dynamics-365-for-real-estate";
      $downFormBgName = 'button-image-1';
      break;
    case "microsoft-dynamics-365-construction-erp";
      $downFormBgName = 'best-erp-for-construction';
      break;

    default:
      $downFormBgName = 'download-brochure-1';
  }


  $treasuryFormBG = base_url() . '/images/downloadbg/' . $downFormBgName . '.svg';



  ?>
  <style>
    .bg-formDynamicBg {
      background-image: url('<?php echo $treasuryFormBG; ?>');
      background-position: top left;
      background-size: cover;
      background-repeat: no-repeat;

    }
  </style>
  <template x-teleport="body">
    <!-- downloadBroucher -->
    <div x-show="downloadDivOpen" x-transition id="downloadDiv" class="fixed h-screen  w-screen top-0 left-0 bg-slate-600 z-[9999] bg-opacity-80 flex items-center justify-center">
      <div class=" w-[90%]   md:w-[45%]  bg-form-2 bg-cover rounded-3xl flex">
        <div class="hidden md:block w-[45%]  bg-formDynamicBg bg-cover rounded-tl-3xl rounded-bl-3xl">
        </div>
        <div class=" w-full md:w-[55%] p-8 relative">
          <div class="absolute top-2 right-2 cursor-pointer" @click="downloadDivOpen = false">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

          </div>

          <div class="heading-1 text-center !text-primary">Download a Brochure</div>
          <div class="h-5"></div>
          <form action="<?php echo base_url() ?>/brochure" method="POST" class="space-y-5" id="brochureForm">
            <input type="hidden" id="broDownloadFlag" name="broDownloadFlag" value="" />
            <input type="hidden" id="broHoney" name="broHoney">
            <input type="hidden" name="broDoc" id="broDoc">
            <div>
              <label for="broName" class="sr-only">Name:</label>
              <input type="text" id="broName" name="broName" placeholder="Name">
            </div>
            <div>
              <label for="broCompany" class="sr-only">Company Name:</label>
              <input type="text" id="broCompany" name="broCompany" placeholder="Company Name">
            </div>
            <div>
              <label for="broDesgination" class="sr-only">Country:</label>
              <input type="text" id="broDesgination" name="broDesgination" placeholder="Country">
            </div>
            <div>
              <label for="broEmail" class="sr-only">E-Mail ID:</label>
              <input type="email" id="broEmail" name="broEmail" placeholder="E-Mail ID">
            </div>
            <div>
              <label for="phone2" class="sr-only">Phone Number:</label>
              <input type="text" id="phone2" name="phone2" placeholder="Phone Number">
            </div>


            <div class=" text-center flex justify-center">
              <button class="btn btn-primary">Submit <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg></button>
            </div>
          </form>




        </div>
      </div>
    </div>
  </template>

  <!-- common download -->

  <?= $this->include('/layouts/common-download') ?>

  <!--demo-->
  <template x-teleport="body">
    <div x-show="demoDivOpen" x-transition id="demoDiv" class="fixed h-screen  w-screen top-0 left-0 bg-slate-600 z-[9999] bg-opacity-80 flex items-center justify-center">
      <div class=" w-[90%]   md:w-3/5  bg-form-2 bg-cover rounded-3xl flex">
        <div class="hidden md:block w-1/2  bg-demoBg bg-cover rounded-tl-3xl rounded-bl-3xl">
        </div>
        <div class=" w-full md:w-1/2 p-8 relative">
          <div class="absolute top-2 right-2 cursor-pointer" @click="demoDivOpen = false">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

          </div>


          <div class="heading-1 text-center !text-primary">Schedule a Demo</div>
          <div class="h-5"></div>
          <form class=" space-y-5" action="<?php echo base_url() ?>/demo-request" method="POST" id="demoFrom">
            <input type="hidden" id="demoHoney" name="demoHoney">
            <div>

              <input type="text" id="demoName" name="demoName" placeholder="Name" required>
            </div>
            <div>

              <input type="text" id="demoCompany" name="demoCompany" placeholder="Company Name">
            </div>
            <div>

              <input type="text" name="demoDesignation" placeholder="Country">
            </div>
            <div>

              <input type="email" name="demoEmail" placeholder="E-Mail ID" required>
            </div>
            <div>

              <input type="text" name="demoPhone" id="demoPhone" placeholder="Phone Number">
            </div>

            <div>

              <textarea rows="4" name="demoMessage"></textarea>
            </div>


            <div class=" text-center flex justify-center">
              <button class="btn btn-primary">Submit <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg></button>
            </div>
          </form>




        </div>
      </div>
    </div>
  </template>



  <script src="<?php echo base_url() ?>/js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="<?php echo base_url() ?>/js/plugins.js"></script>
  <script src="<?php echo base_url() ?>/js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function() {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <script src="<?php echo base_url() ?>/js/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js" defer></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.js"></script>

  <script src="<?php echo base_url() ?>/js/app.js"></script>

</body>

</html>