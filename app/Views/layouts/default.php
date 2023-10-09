<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title><?= $this->renderSection("title") ?></title>
  <meta name="description" content="<?= $this->renderSection('description') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
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
  <meta name="theme-color" content="#fafafa">

  <?= $this->include('/layouts/bg.php') ?>

</head>

<body x-data="app">



  <nav x-data="{atTop: false, mobNav: false}" aria-label="Global" @scroll.window="atTop = (window.pageYOffset < 50) ? false: true" class="max-w-container big-screen mx-auto left-0 right-0 sticky-nav fixed z-50 transition-all" :class="{ 'shadow-lg': atTop, ' text-white py-4': !atTop, 'bg-white  text-indigo-800': atTop }">
    <div class="relative flex items-center justify-between px-5 md:p-0 "><img src="<?php echo base_url() ?>/images/dnet-logo.svg" class="w-1/2 md:w-80" alt="">
      <div class="menu">
        <a href="/">Home

        </a>
        <div class=" relative group/item">
          <a href="#" class="">

            Industries <img src="<?php echo base_url() ?>/images/down-arow.svg" alt="">

          </a>
          <div class="absolute   top-4 w-44 invisible  group-hover/item:visible">
            <div class="h-4"></div>
            <div class="bg-white rounded-b-2xl shadow">
              <ul class="sub-menu">
                <li class="p-2"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-for-real-estate">Real Estate</a></li>
                <li class="p-2"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-construction-erp">Construction</a></li>
                <li class="p-2"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-for-retail">Retail</a></li>
                <li class="p-2"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-financial-services">Financial Service</a></li>
              </ul>
            </div>

          </div>
        </div>

        <div class=" relative group/item">
          <a href="#" class="">

            Solution <img src="<?php echo base_url() ?>/images/down-arow.svg" alt="">

          </a>
          <div class="absolute  invisible  top-4     group-hover/item:visible ">
            <div class="h-4"></div>
            <div class="bg-white rounded-2xl ">
              <ul class="sub-menu">
                <li class="relative group/sub "><a class="inline-flex " href="<?php echo base_url() ?>/property-management-software-dynamics-365">
                    <div class="w-40">RealEstatePro</div> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                  </a>
                  <div class=" absolute z-20 bg-white  -right-20 border border-gray-50 invisible  group-hover/sub:visible  shadow-xl rounded-2xl w-44">
                    <ul class=" divide-y  divide-gray-100 ">
                      <li class="p-2"><a href="<?php echo base_url() ?>/property-leasing">Property Leasing</a></li>
                      <li class="p-2"><a href="<?php echo base_url() ?>/property-sale">Property Sale</a></li>
                    </ul>
                  </div>
                </li>
                <li class=""><a href="<?php echo base_url() ?>/dynamics-365-bid-management-software">Bid Management</a></li>
                <li class=""><a href="<?php echo base_url() ?>/contract-management-software-dynamics-365">Contract Management</a></li>
                <li class=""><a href="<?php echo base_url() ?>/dynamics-365-HR-payroll">AxOnePay - Payroll</a></li>
                <li class=""><a href="<?php echo base_url() ?>/investment-portfolio-management-software-dynamics">Investment Portfolio Management</a></li>
                <li class=""><a href="<?php echo base_url() ?>/treasury-management-software-dynamics">Treasury Management</a></li>
                <li class=""><a href="<?php echo base_url() ?>/annata-365">Annata</a></li>
                <li class=""><a href="<?php echo base_url() ?>/propgoto">PropGoto</a></li>

              </ul>
            </div>

          </div>
        </div>

        <div class=" relative group/item">
          <a href="#" class="">

            Services <img src="<?php echo base_url() ?>/images/down-arow.svg" alt="">

          </a>
          <div class="absolute   top-4 w-44 invisible  group-hover/item:visible">
            <div class="h-4"></div>
            <div class="bg-white rounded-b-2xl shadow">
              <ul class="sub-menu">
                <li class="p-2"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-implementation">ERP Implementation</a></li>
                <li class="p-2"><a href="<?php echo base_url() ?>/dynamics-365-finance-operations-upgrade-services">Upgrade</a></li>

                <li class="p-2"><a href="<?php echo base_url() ?>/microsoft-dynamics-365-support">Support</a></li>
              </ul>
            </div>

          </div>
        </div>
        <a href="#">Blog</a>
        <a href="<?php echo base_url() ?>/about-us">About Us</a>
        <a href="<?php echo base_url() ?>/contact">Contact us</a>

      </div>


      <div class=" hidden md:flex lg:ml-4 lg:flex lg:items-center  lg:pl-4">
        <a class="btn btn-primary" href="#">
          <span>Enquire Now </span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 hidden md:block">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
          </svg>

        </a>
      </div>

      <div class="flex items-center  lg:hidden">
        <a class="bg-primary text-white text-xs px-2 py-2 rounded-3xl font-bold" href="#">
          <span>Enquire Now </span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 hidden md:block">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
          </svg>

        </a>
        <button type="button" class="-my-1 -mr-1 ml-2 h-8 w-8 flex items-center justify-center" @click="mobNav = !mobNav">
          <span class="sr-only">Open navigation</span>

          <svg viewBox="0 0 24 24" class="h-6 w-6 stroke-slate-900 ">
            <path d="M3.75 12h16.5M3.75 6.75h16.5M3.75 17.25h16.5" fill="none" stroke-width="1.5" stroke-linecap="round"></path>
          </svg>
        </button>
      </div>




    </div>
    <div class="flex md:hidden h-screen bg-primary-light  w-full" x-show="mobNav">

      <div class="px-6 py-2 w-full" x-data="{navMob: 0}">
        <ul role="list" class="divide-y divide-blue-400 w-full">
          <li class="py-4">
            <a class=" font-semibold text-lg">Home</a>
          </li>
          <li class="py-4 " @click="navMob !== 1 ? navMob = 1 : navMob = null">
            <div class="flex items-center justify-between">
              <a class=" font-semibold text-lg">Idustries</a>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>
            </div>

            <div class=" bg-primary w-full h-36 overflow-y-auto px-3 py-5" x-show="navMob === 1">
              <ul class=" space-y-3">
                <li class=" flex text-white gap-x-2 items-cente">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                  </svg>
                  <p class="text-base">Real Estate</p>
                </li>
                <li class=" flex text-white gap-x-2 items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                  </svg>
                  <p class="text-base">Construction</p>
                </li>
                <li class=" flex text-white gap-x-2 items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                  </svg>
                  <p class="text-base">Retail</p>
                </li>
                <li class=" flex text-white gap-x-2 items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                  </svg>
                  <p class="text-base">Financial Service</p>
                </li>
              </ul>
            </div>

          </li>

          <li class="py-4 " @click="navMob !== 2 ? navMob = 2 : navMob = null">
            <div class="flex items-center justify-between">
              <a class=" font-semibold text-lg">Solutions</a>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>
            </div>

            <div class=" bg-primary w-full h-44 overflow-y-auto px-3 py-5" x-show="navMob === 2">
              <ul class=" space-y-3">
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

          <li class="py-4">
            <a class=" font-semibold text-lg">Services</a>
          </li>
          <li class="py-4">
            <a class=" font-semibold text-lg">About Us</a>
          </li>
          <li class="py-4">
            <a class=" font-semibold text-lg">Blog</a>
          </li>

          <li class="py-4">
            <a class=" font-semibold text-lg">Contact</a>
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

  $currenUrl = uri_string();

  if ($currenUrl !== 'contact') {

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
        <div class="heading-1 text-center">Our Customers</div>
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
          <div class="  w-full lg:w-2/5 h-full bg-form-2 bg-cover rounded-3xl p-10 -mt-16">
            <div class="heading-1 text-center !text-primary">Schedule a Demo</div>
            <div class="h-5"></div>
            <form class=" space-y-5">
              <div>
                <label for="username" class="sr-only">Name:</label>
                <input type="text" id="username" name="username" placeholder="Name" required>
              </div>
              <div>
                <label for="username" class="sr-only">Company Name:</label>
                <input type="text" id="username" name="username" placeholder="Company Name" required>
              </div>
              <div>
                <label for="username" class="sr-only">Designation:</label>
                <input type="text" id="username" name="username" placeholder="Designation" required>
              </div>
              <div>
                <label for="username" class="sr-only">E-Mail ID:</label>
                <input type="email" id="username" name="username" placeholder="E-Mail ID" required>
              </div>
              <div>
                <label for="username" class="sr-only">Phone Number:</label>
                <input type="text" id="phone" name="username" placeholder="Phone Number" required>
              </div>
              <div>
                <label for="username" class="sr-only">Which solution do you want?</label>
                <input type="text" name="username" placeholder="Which solution do you want?" required>
              </div>
              <div>
                <label for="username" class="sr-only">Requirment</label>
                <textarea rows="4"></textarea>
              </div>

              <div class=" text-center">
                <button class="btn btn-primary">Submit <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                  </svg></button>
              </div>
            </form>

          </div>
        </div>

      </div>
    </div>


  <?php

  }
  ?>




  <!-- footer -->
  <div class="bg-primary bg-footer bg-cover ">
    <div class="max-w-container big-screen mx-auto py-16 space-y-6">
      <div class=" lg:flex justify-between w-full hidden ">
        <div class=" w-1/3">
          <img src="<?php echo base_url() ?>/images/footer-dnt-logo-white.svg" alt="">
        </div>
        <div class="flex-1 flex justify-evenly">
          <div class="space-y-4">
            <div class="text-base font-semibold text-white">COMPANY OVERVIEW</div>
            <div class=" flex flex-col footer-link">
              <a>About us</a>
              <a>Contact us</a>
              <a>Blog</a>
              <a>Become a partner</a>
              <a>Careers</a>
              <a>Privacy policy</a>
              <a>Events</a>
            </div>
          </div>

          <div class="space-y-4">
            <div class="text-base font-semibold text-white">SOLUTIONS</div>
            <div class=" flex flex-col footer-link">
              <a>RealEstatePro</a>
              <a>Contract Management</a>
              <a> Bid Management</a>
              <a> Treasury Management</a>
              <a>Investment Portfolio Management</a>
              <a>AXOnePay</a>
              <a>Annata 365</a>
            </div>
          </div>

          <div class="space-y-4">
            <div class="text-base font-semibold text-white">SERVICES</div>
            <div class=" flex flex-col footer-link">
              <a>ERP Implementation</a>
              <a> Upgrade</a>
              <a>Support</a>
            </div>
          </div>

        </div>
      </div>

      <div class="flex flex-col lg:flex-row justify-between items-center">
        <div class=" text-sm text-white font-light">Copyright © All Rights Reserved by Dynamic Netsoft Technologies Pvt Ltd</div>
        <div class=" flex flex-col space-y-4">
          <div class="text-xl text-white font-bold">CONNECT WITH US</div>
          <div class="flex justify-between">
            <a href="#"><img src="<?php base_url() ?>/images/home/facebook.svg" alt=""></a>
            <a href="#"><img src="<?php base_url() ?>/images/home/instagram.svg" alt=""></a>
            <a href="#"><img src="<?php base_url() ?>/images/home/linkedin.svg" alt=""></a>
            <a href="#"><img src="<?php base_url() ?>/images/home/twitter.svg" alt=""></a>
            <a href="#"><img src="<?php base_url() ?>/images/home/youtube.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <button @click="openCommonDownloadForm" class="hidden lg:fixed z-50 top-1/2 hover:bg-yellow-500  btn btn-yellow rotate-90  text-center -right-16 ">Download Brochure </button>

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

    default:
      $downFormBgName = 'button-image-2';
  }


  $treasuryFormBG = base_url() . '/images/downloadbg/' . $downFormBgName . '.svg';



  ?>
  <style>
    .bg-formDynamicBg {
      background-image: url('<?php echo $treasuryFormBG; ?>');
    }
  </style>
  <template x-teleport="body">
    <!-- downloadBroucher -->
    <div x-show="downloadDivOpen" x-transition id="downloadDiv" class="fixed h-screen  w-screen top-0 left-0 bg-slate-600 z-[9999] bg-opacity-80 flex items-center justify-center">
      <div class="   w-2/4  bg-form-2 bg-cover rounded-3xl flex" @click.outside="downloadDivOpen = false">
        <div class="w-2/5  bg-formDynamicBg bg-cover rounded-tl-3xl rounded-bl-3xl">
        </div>
        <div class=" w-3/5 p-8">


          <div class="heading-1 text-center !text-primary">Download a Brochure</div>
          <div class="h-5"></div>
          <form class=" space-y-5">
            <div>
              <label for="username" class="sr-only">Name:</label>
              <input type="text" id="username" name="username" placeholder="Name" required>
            </div>
            <div>
              <label for="username" class="sr-only">Company Name:</label>
              <input type="text" id="username" name="username" placeholder="Company Name" required>
            </div>
            <div>
              <label for="username" class="sr-only">Designation:</label>
              <input type="text" id="username" name="username" placeholder="Designation" required>
            </div>
            <div>
              <label for="username" class="sr-only">E-Mail ID:</label>
              <input type="email" id="username" name="username" placeholder="E-Mail ID" required>
            </div>
            <div>
              <label for="username" class="sr-only">Phone Number:</label>
              <input type="text" id="phone2" name="phone2" placeholder="Phone Number" required>
            </div>


            <div class=" text-center">
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

  <template x-teleport="body">
    <div x-show="commonDownloadDivOpen" x-transition id="downloadDiv" class="fixed h-screen  w-screen top-0 left-0 bg-slate-600 z-[9999] bg-opacity-80 flex items-center justify-center">
      <div class=" bg-white   w-3/4  bg-formBg3 bg-cover rounded-3xl flex" @click.outside="commonDownloadDivOpen = false">
        <div class="w-2/4  bg-commonDownloadImg bg-cover rounded-tl-3xl rounded-bl-3xl">
        </div>
        <div class=" w-3/5 p-8">


          <div class="heading-1 text-center ">Download Brochure</div>
          <div class="h-5"></div>
          <form class=" space-y-5">
            <div>
              <label for="username" class="sr-only">Name:</label>
              <input type="text" id="username" name="username" placeholder="Name" required>
            </div>
            <div>
              <label for="username" class="sr-only">Company Name:</label>
              <input type="text" id="username" name="username" placeholder="Company Name" required>
            </div>
            <div>
              <label for="username" class="sr-only">Designation:</label>
              <input type="text" id="username" name="username" placeholder="Designation" required>
            </div>
            <div>
              <label for="username" class="sr-only">E-Mail ID:</label>
              <input type="email" id="username" name="username" placeholder="E-Mail ID" required>
            </div>
            <div>
              <label for="username" class="sr-only">Phone Number:</label>
              <input type="text" id="phone4" name="phone4" placeholder="Phone Number" required>
            </div>

            <div class=" bg-white rounded-3xl p-6">
              <div class=" font-semibold">Solution you are interested?</div>
              <div class="flex gap-x-4 pt-3">
                <div class="space-y-3">
                  <div class="flex items-center gap-x-2">

                    <input type="radio" id="propMan" name="propMan" required>
                    <label for="propMan" class="text-xs">Property Management</label>
                  </div>
                  <div class="flex items-center gap-x-2">

                    <input type="radio" id="propMan" name="propMan" required>
                    <label for="propMan" class="text-xs">Bid Management</label>
                  </div>
                  <div class="flex items-center gap-x-2">

                    <input type="radio" id="propMan" name="propMan" required>
                    <label for="propMan" class="text-xs">Treasury Management</label>
                  </div>
                </div>


                <div class=" space-y-3">
                  <div class="flex items-center gap-x-2">

                    <input type="radio" id="propMan" name="propMan" required>
                    <label for="propMan" class="text-xs">Contract Management</label>
                  </div>
                  <div class="flex items-center gap-x-2">

                    <input type="radio" id="propMan" name="propMan" required>
                    <label for="propMan" class="text-xs">Investment Portfolio
                      Management</label>
                  </div>
                  <div class="flex items-center gap-x-2">

                    <input type="radio" id="propMan" name="propMan" required>
                    <label for="propMan" class="text-xs">AXOnePay</label>
                  </div>
                </div>
              </div>
            </div>


            <div class=" text-center">
              <button class="btn btn-primary">Submit <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg></button>
            </div>
          </form>




        </div>
      </div>
    </div>
  </template>

  <!--demo-->
  <template x-teleport="body">
    <div x-show="demoDivOpen" x-transition id="demoDiv" class="fixed h-screen  w-screen top-0 left-0 bg-slate-600 z-[9999] bg-opacity-80 flex items-center justify-center">
      <div class="   w-2/4  bg-form-2 bg-cover rounded-3xl flex" @click.outside="demoDivOpen = false">
        <div class="w-2/5  bg-formDownloadImg bg-cover rounded-tl-3xl rounded-bl-3xl">
        </div>
        <div class=" w-3/5 p-8">


          <div class="heading-1 text-center !text-primary">Schedule a Demo</div>
          <div class="h-5"></div>
          <form class=" space-y-5">
            <div>
              <label for="username" class="sr-only">Name:</label>
              <input type="text" id="username" name="username" placeholder="Name" required>
            </div>
            <div>
              <label for="username" class="sr-only">Company Name:</label>
              <input type="text" id="username" name="username" placeholder="Company Name" required>
            </div>
            <div>
              <label for="username" class="sr-only">Designation:</label>
              <input type="text" id="username" name="username" placeholder="Designation" required>
            </div>
            <div>
              <label for="username" class="sr-only">E-Mail ID:</label>
              <input type="email" id="username" name="username" placeholder="E-Mail ID" required>
            </div>
            <div>
              <label for="username" class="sr-only">Phone Number:</label>
              <input type="text" id="phone3" name="username" placeholder="Phone Number" required>
            </div>


            <div class=" text-center">
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

  <script>
    function intiateOwl() {
      var checkWidth = $(window).width();

      var successOwl = $("#success");

      successOwl.owlCarousel({
        items: 1,
        nav: false,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3000,
        dots: false,
        loop: true
      });

      $('.successNext').click(function() {
        successOwl.trigger('next.owl.carousel');
      });

      $('.successPrev').click(function() {
        successOwl.trigger('prev.owl.carousel');
      });

      $(".owl-client").owlCarousel({

        margin: 50,
        nav: false,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3000,
        dots: false,
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          1000: {
            items: 6,


          }
        }
      });

      $('.customerNext').click(function() {
        $(".owl-client").trigger('next.owl.carousel');
      });

      $('.customerPrev').click(function() {
        $(".owl-client").trigger('prev.owl.carousel');
      });



      $(".owl-dynamic").owlCarousel({

        margin: 50,
        dots: false,
        responsive: {
          0: {
            items: 1
          },
          1000: {
            items: 4,
            nav: false,

          }
        }
      });

      $('.dynamicNext').click(function() {
        $(".owl-dynamic").trigger('next.owl.carousel');
      });

      $('.dynamicPrev').click(function() {
        $(".owl-dynamic").trigger('prev.owl.carousel');
      });


      $(".owl-service").owlCarousel({

        margin: 50,
        responsive: {
          0: {
            items: 1
          },
          1000: {
            items: 4,
            nav: true,

          }
        }
      });

      $('.owl-vertical').owlCarousel({
        margin: 50,
        responsive: {
          0: {
            items: 1
          },

        }
      })



    }


    $(document).ready(function() {
      intiateOwl();

      //   if ($(window).width() > 765) {
      //     intiateOwl();
      //   } else {
      //     $('.owl-carousel').addClass('off');
      //   }
      // });


      // $(window).resize(function() {
      //   if ($(window).width() > 765) {
      //     intiateOwl();
      //   } else {
      //     stopCarousel();
      //   }
    });

    function stopCarousel() {
      var owl = $('.owl-carousel');
      owl.trigger('destroy.owl.carousel');
      owl.addClass('off');
    }



    const phoneInputField = document.querySelector("#phone");


    intlTelInput(phoneInputField);
    // intlTelInput(phoneDown2);







    // $(downloadphoneInputField).intlTelInput();








    const downloadDiv = document.getElementById("downloadDiv");

    // console.log('ele height', downloadDiv.offsetHeight)

    console.log("windoe")
    document.addEventListener('alpine:init', () => {
      // window.intlTelInput(phoneDown2, {
      //   // initialCountry: 'gb',
      //   // placeholderNumberType: 'MOBILE',
      // });
      console.log("alpine")
      Alpine.data('app', () => ({


        downloadDivOpen: false,
        demoDivOpen: false,
        commonDownloadDivOpen: false,

        openCommonDownloadForm() {
          const phoneDown4 = document.querySelector("#phone4");
          intlTelInput(phoneDown4);
          this.commonDownloadDivOpen = true;
        },

        openFormDownload(solution) {
          const phoneDown2 = document.querySelector("#phone2");
          intlTelInput(phoneDown2);
          console.log(solution);
          this.downloadDivOpen = true;


        },
        openFormDemoDiv(solution) {
          const phoneDown3 = document.querySelector("#phone3");
          intlTelInput(phoneDown3);
          this.demoDivOpen = true;
          console.log(solution);
        }
      }))
    })
  </script>

</body>

</html>