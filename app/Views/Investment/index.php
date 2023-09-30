<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Investment Portfolio Management Software on Dynamics 365
<?= $this->endSection("title") ?>
<?= $this->section("description") ?>Juggling with multiple investment systems? Manage all your investments on a single platform with Dynamic Netsoft’s Investment Portfolio Management Software.<?= $this->endSection("description") ?>

<?= $this->section("content") ?>

<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-right-bottom   bg-cover bg-investment1  ">
    <div class="banner-space"></div>
    <div class="max-w-container mx-auto h-full big-screen">


        <div class=" py-16 md:py-0   w-full h-auto  md:h-[500px]">


            <!-- inner banner -->
            <div class=" inner-banner ">
                <div class=" first-div ">
                    <h1 class="h1">
                        <span class="span ">Investment Portfolio Management</span><br>
                        Intuitively Orchestrate Your Investment Strategies with Dynamic Netsoft’s Investment Portfolio Management Software on Dynamics 365
                    </h1>
                    <!-- <div class=" text-base md:text-lg font-semibold">
                        Level up your digital transformation process
                    </div> -->

                    <div class="btn-div">
                        <button class="btn btn-primary">Schedule a Demo <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg></button>

                        <button class="btn btn-primary">Download Brochure <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg></button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</header>
<!--banner /-->

<!-- section 1 -->
<div class=" md:bg-primary md:pt-16">
    <div class=" max-w-container big-screen">
        <div class=" inner-section-blue">
            <div class="img-section hidden md:block">
                <img src="<?php echo base_url() ?>/images/investment/investment-management-on-dynamics.svg" alt="">
            </div>
            <div class="content-section">
                <h2> Experience forecast accuracy and market insights of your Portfolios with <span class="text-d-yellow">Investment Management Software on Dynamics 365</span></h2>
                <div class="sub-content">
                    <p class="">
                        Our flagship ISV solution for Investment Portfolio Management offers real-time monitoring of investment transactions, partner borrowings and withdrawals, fund allocation, and portfolio management, and supports multi-currency transactions, all comprehensively integrated onto a unified platform, thereby offering a cohesive experience.
                    </p>
                    <p>
                        Its intuitive and interactive platform helps you maximize efficiency and output, while its workflow automation and approvals streamline the investment process, reducing manual intervention.

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section 1 ends -->

<!-- section2 -->
<div class=" bg-secondary">
    <div class="inner-section-2">
        <div class="h2-div">
            <h2>Make Smarter Investment Decisions with the Intelligent Features of Investment Portfolio Management Software on Dynamics</h2>
        </div>

        <div class="content-div ">
            <p class="!text-white md:!text-black">As an investor, experience features that facilitate the streamlined administration of your monetary assets with panache and efficacy. Our Investment Management software empowers you with seamless control over your financial portfolios by offering exceptional features, providing users with speed at informed decisions. </p>
        </div>
    </div>
</div>
<!-- section2 ends -->

<!-- section 3 -->
<div class=" md:bg-secondary bg-white pb-16" x-data="{feature: 1}">
    <div class="max-w-container ">

        <div class="inner-section-box">
            <div class="tab h-[500px] overflow-y-auto">
                <div class="item" @click="feature = 1" :class="feature === 1 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/investment/investment-parameters.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 1 ? 'active' : 'default'">Investment Parameters</div>
                    </div>
                </div>


                <div class="item" @click="feature = 2" :class="feature === 2 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/investment/risk-analysis.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 2 ? 'active' : 'default'">Risk Analysis</div>
                    </div>
                </div>

                <div class="item" @click="feature = 3" :class="feature === 3 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/investment/document-management.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 3 ? 'active' : 'default'">Document Management</div>
                    </div>
                </div>

                <div class="item" @click="feature = 4" :class="feature === 4 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/investment/key-performance-indicator.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 4 ? 'active' : 'default'">Key Performance Indicator</div>
                    </div>
                </div>

                <div class="item" @click="feature = 5" :class="feature === 5 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/investment/periodic-activities-area.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 5 ? 'active' : 'default'">Periodic Activities Area</div>
                    </div>
                </div>


                <div class="item" @click="feature = 6" :class="feature === 6 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/investment/inquiries-on-the-fly.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 6 ? 'active' : 'default'">Inquiries on-the-fly</div>
                    </div>
                </div>


                <div class="item" @click="feature = 7" :class="feature === 7 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/investment/designated-transaction-area.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="default" :class="feature === 7 ? 'active' : 'default'">Designated Transaction Area</div>
                    </div>
                </div>

                <div class="item" @click="feature = 8" :class="feature === 8 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/investment/master-level-data-store.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="default" :class="feature === 8 ? 'active' : 'default'">Master Level Data-store</div>
                    </div>
                </div>

                <div class="item" @click="feature = 9" :class="feature === 9 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/investment/efficient-reporting-system.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="default" :class="feature === 9 ? 'active' : 'default'">Efficient Reporting System</div>
                    </div>
                </div>

                <div class="item" @click="feature = 10" :class="feature === 10 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/investment/open-platform-for-integration.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="default" :class="feature === 10 ? 'active' : 'default'">Open Platform for Integration</div>
                    </div>
                </div>


            </div>
            <div class="content md:h-[500px]">
                <!-- content 1  -->

                <div class="mobile-tab " @click="feature = 1">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Investment Parameters</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 1">
                    <div class=" heading-1 hidden md:block ">Investment Parameters</div>
                    <ul class=" ">
                        <li>Our dynamic Investment Management Software incorporates parameterization of your requirements to ensure a full-fledged product flavor, catering to your unique investment needs.</li>
                        <li>Investment journals have a separate identity from financial transactions, allowing for clear and concise tracking of investment activity.</li>
                        <li>The software utilizes a designated number sequence for investment portfolio maintenance, providing organized and efficient management potential.</li>

                    </ul>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>



                <!-- content 2  -->

                <div class="mobile-tab " @click="feature = 2">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Risk Analysis</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature===2">
                    <div class=" heading-1 hidden md:block ">Risk Analysis</div>
                    <ul class=" ">
                        <li>Our Investment Portfolio Management Software on Dynamics offers dedicated functions for risk analysis and mitigation to automate the investment-specific risk evaluation process.</li>
                        <li>Risk evaluation process can be personalized based on each investment segment’s unique characteristics.</li>
                        <li>Solution enables monitoring credit ratings from dignified risk agencies that hamper investment management.</li>

                    </ul>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>




                <!-- content 3  -->

                <div class="mobile-tab " @click="feature = 3">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Document Management</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 3">
                    <div class=" heading-1 hidden md:block ">Document Management</div>
                    <ul>
                        <li>Our all-in-one Investment Management Software on Dynamics provides dedicated features for handling investment-related documents & transactions.</li>
                        <li>The documents are categorized, parameterized, and stored in an organized manner for easy access and management. </li>
                        <li>Solution empowers users to create document templates and use them whenever applicable, thereby saving time and effort.</li>

                    </ul>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>



                <!-- content 4  -->

                <div class="mobile-tab " @click="feature = 4">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Key Performance Indicator</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 4">
                    <div class=" heading-1 hidden md:block ">Key Performance Indicator</div>
                    <ul>
                        <li>With Investment Portfolio Management software, users can implement a dashboard to track Key Performance Indicators (KPIs) for investments. </li>
                        <li>It allows real-time monitoring of KPIs related to investments, ensuring optimal investment management. </li>


                    </ul>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>


                <!-- content 5  -->

                <div class="mobile-tab " @click="feature = 5">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Periodic Activities Area
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 5">
                    <div class=" heading-1 hidden md:block ">
                        Periodic Activities Area
                    </div>
                    <ul>
                        <li>Our market-leading Investment Management Software supports the automatic synchronization of investment market prices for industry needs.</li>
                        <li>Dedicated financial closing engine for investment transactions ensures accurate accounting procedures.</li>
                        <li>Revaluation of unsold investments with complete user-defined date control on portfolios helps users stay in control.</li>

                    </ul>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>



                <!-- content 6  -->

                <div class="mobile-tab " @click="feature = 6">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Inquiries on-the-fly
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 6">
                    <div class=" heading-1 hidden md:block ">
                        Inquiries on-the-fly
                    </div>
                    <ul>
                        <li>All indispensable inquiries are available instantly, anytime, anywhere with our cutting-edge Investment Portfolio Management Software on Dynamics 365 ERP.</li>
                        <li>The solution also provides the creation of Dashboard integration for easy access to inquiry data.</li>

                    </ul>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>



                <!-- content 7  -->

                <div class="mobile-tab " @click="feature = 7">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Designated Transaction Area
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 7">
                    <div class=" heading-1 hidden md:block ">
                        Designated Transaction Area
                    </div>
                    <ul>
                        <li>Our Investment Portfolio Management Software on Microsoft Dynamics 365 is a seamlessly integrated solution that benefits from all the core functions and capabilities of D365 Finance & Operations.</li>
                        <li>Solution allows easy and efficient processing of transactions, ensuring accuracy and consistency throughout the investment process.</li>

                    </ul>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>

                <!-- content 8  -->

                <div class="mobile-tab " @click="feature = 8">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Master Level Data-store
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 8">
                    <div class=" heading-1 hidden md:block ">
                        Master Level Data-store
                    </div>
                    <ul>
                        <li>The master data store of our futuristic solution for Investment Portfolio Management adheres to Microsoft’s best-practice architecture for investment Portfolio Management. </li>
                        <li>Solution provides a designated section for holding and managing customer and partner information for convenient business operations.</li>

                    </ul>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>

                <!-- content 9  -->

                <div class="mobile-tab " @click="feature = 9">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Efficient Reporting System
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 9">
                    <div class=" heading-1 hidden md:block ">
                        Efficient Reporting System
                    </div>
                    <ul>
                        <li>Our Investment Management software on Dynamics 365 offers sophisticated integration with crucial reports that cater to the dynamic investment market.</li>
                        <li>A comprehensive and multifaceted reporting framework serves as a valuable resource for investment managers.</li>


                    </ul>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>

                <!-- content 10  -->

                <div class="mobile-tab " @click="feature = 10">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Open Platform for Integration
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 10">
                    <div class=" heading-1 hidden md:block ">
                        Open Platform for Integration
                    </div>
                    <ul>
                        <li>Our Investment Portfolio Management software provides an open platform for seamless integration with a range of MS Windows applications and third-party software.</li>
                        <li>Open architecture facilitates integration with any tool to push and/or pull data enabling the flow of information across functions.</li>

                    </ul>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>
<!-- section -3 ends -->



<!-- section-5 -->
<div class="  bg-investment2 bg-cover">
    <div class=" max-w-container space-y-8 py-16 big-screen">
        <div class="flex justify-end">
            <div class=" md:w-2/5 space-y-8 text-center md:text-left px-16 ">
                <div>
                    <h3 class=" text-xl font-semibold">Fortify Your Financial Fortune with Our </h3>
                    <div class=" text-3xl font-bold text-primary">
                        Investment Portfolio Management Software on Dynamics
                    </div>
                </div>
                <p>Revamp your investment strategy and take charge of your financial future with our world-class solutions!</p>

                <div class=" inline-flex">
                    <a class="btn btn-primary" href="#">
                        <span>Connect with Us </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section 5 -->

<!-- section-6 -->
<div class="max-w-container py-16 bg-primary md:bg-white  md:px-0">
    <div class="md:w-4/6 mx-auto space-y-4 md:space-y-8 px-6 md:px-0">
        <h2 class="heading-1 text-left md:text-center !text-white md:!text-black">
            How Can Dynamic Netsoft’s Investment Portfolio Management Software Transform Your Investment Management?
        </h2>
        <p class=" !text-white md:!text-black md:text-center">Our benchmark solution for Investment Portfolio Management on Dynamics significantly elevates control and operations of your portfolios across various investments. The feature-rich solution provides users:</p>

    </div>
    <div class="feature">
        <div class="box">
            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/investment/efficient-investment-management.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Efficient investment management
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/investment/real-time-investment-monitoring.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Real-time investment monitoring
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/investment/complete-visibility-of-portfolios.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Complete visibility of portfolios
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/investment/informed-investment-decisions.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Informed investment decisions
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/investment/efficient-investment-management.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Personalized risk analysis and management
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/investment/streamlined-document-management.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Streamlined document management
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/investment/enhanced-kpi-tracking.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Enhanced KPI tracking
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/investment/informed-investment-decisions.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Smooth financial closing and accurate accounting
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/investment/simplified-portfolio-maintenance.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Simplified portfolio maintenance
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/investment/easy-inquiries-management.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Easy inquiries & management
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/investment/efficient-reporting-system1.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Efficient reporting system
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/investment/time-saving-automation.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Time-saving automation
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/investment/complete-visibility-of-portfolios.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Consistency and accuracy in data processing
                </div>
            </div>







        </div>

    </div>
</div>
<!-- section-6 ends -->


<?= $this->section("faq") ?><div class="max-w-container mx-auto py-16">
    <div class=" space-y-8 max-w-4xl mx-auto">
        <div class=" heading-1 text-center">Frequently Asked Questions</div>
        <div class=" flex flex-col divide-y " x-data="{selected:1}">
            <div>
                <div class="faq" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">What is Investment Portfolio Management Software?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 1 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Investment Portfolio Management Software on Dynamics is designed to help organizations manage their investments, track their portfolio performance, and make informed decisions. It provides a centralized platform for managing investment-related data to help investors achieve their financial goals.
                        </p>


                    </div>
                </div>
            </div>


            <div>
                <div class="faq" @click="selected !== 2 ? selected = 2 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Who uses Investment Portfolio Management Software?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 2 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Investment Portfolio Management Software is typically used by investment professionals, asset managers, financial advisors, corporate finance departments, and individual investors to manage their investments and track their performance. </p>


                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 3 ? selected = 3 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">How does Investment Portfolio Management Software help entrepreneurs?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 3 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class=""> An Investment Portfolio Management Software can help entrepreneurs in several ways, such as
                        </p>
                        <ul class=" list-disc ml-8">
                            <li>Providing real-time insights </li>
                            <li>Help make data-driven decisions</li>
                            <li>Maximize returns </li>
                            <li>Save time and resources</li>
                            <li>Track and analyze portfolio performance.</li>
                            <li>Manage & mitigate risk</li>
                            <li>Streamlining processes & manage transactions.</li>

                        </ul>

                    </div>
                </div>
            </div>





        </div>
    </div>

</div>
<div class=" h-24">
</div><?= $this->endSection("faq") ?>

<?= $this->endSection() ?>