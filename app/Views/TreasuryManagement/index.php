<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Experience Convenient Treasury Management System on Dynamics 365 <?= $this->endSection("title") ?>
<?= $this->section("description") ?>Do loan management complexities leave you feeling drained? Simplify the process and optimize shareholder value with our Treasury Management system on Dynamics 365.<?= $this->endSection("description") ?>

<?= $this->section("content") ?>

<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-right-bottom   bg-cover bg-treasury1 ">
    <div class=" mobile-header-transparent">

        <div class="banner-space"></div>
        <div class=" mx-auto h-full big-screen">


            <div class=" py-16 md:py-0   w-full h-auto  md:h-[500px]">


                <!-- inner banner -->
                <div class=" inner-banner ">
                    <div class=" first-div ">
                        <h1 class="h1">
                            Precision, Sophistication, and Efficiency:
                            <span class="span ">Treasury Management Software</span>
                            on Dynamics for Your Business Loans
                        </h1>
                        <!-- <div class=" text-base md:text-lg font-semibold">
                        Level up your digital transformation process
                    </div> -->

                        <div class="btn-div">
                            <?= $this->include('/layouts/download') ?>
                            <?= $this->include('/layouts/request-demo') ?>



                        </div>

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
                <img src="<?php echo base_url() ?>/images/treasury/treasury-management-system-on-d365.svg" alt="">
            </div>
            <div class="content-section">
                <h2>Amplify Your Capital Efficiency with Our <span class="text-d-yellow">Loan Management Software on Dynamics</span></h2>
                <div class="sub-content">
                    <p class="">
                        Our Treasury Management Software, tightly integrated with Dynamics 365 for finance and operations helps to streamline the entire loan lifecycle from origination to its redemption by efficiently tracking borrower data and loan terms. </p>
                    <p>
                        Minimize expensive errors and increase efficiency, resulting in significant cost savings. With compliance ensured at every stage of the loan process, our software offers a secure and reliable solution for your business. Don’t settle for less, upgrade your loan management today! </p>
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
            <h2>Robust Features on Our Cutting-edge Software to Transform Your Loan Management</h2>
        </div>

        <div class="content-div ">
            <p class="!text-white md:!text-black">Our market-leading Lending Management System on Dynamics is equipped with an extensive range of unparalleled features, empowering your business with the tools necessary to optimize your capital management process. </p>
        </div>
    </div>
</div>
<!-- section2 ends -->

<!-- section 3 -->
<div class=" md:bg-secondary bg-white pb-16" x-data="{feature: 1}">
    <div class="max-w-container ">

        <div class="inner-section-box ">
            <div class="tab md:h-[400px] overflow-auto">
                <div class="item" @click="feature = 1" :class="feature === 1 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/treasury/loan-memorandum.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 1 ? 'active' : 'default'">Loan Memorandum</div>
                    </div>
                </div>


                <div class="item" @click="feature = 2" :class="feature === 2 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/treasury/loan-contract.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 2 ? 'active' : 'default'">Loan Contract</div>
                    </div>
                </div>

                <div class="item" @click="feature = 3" :class="feature === 3 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/treasury/collaterals.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 3 ? 'active' : 'default'">Collaterals</div>
                    </div>
                </div>

                <div class="item" @click="feature = 4" :class="feature === 4 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/treasury/loan-disbursement.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 4 ? 'active' : 'default'">Loan disbursement</div>
                    </div>
                </div>

                <div class="item" @click="feature = 5" :class="feature === 5 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/treasury/manage-instalments.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 5 ? 'active' : 'default'">Manage instalments</div>
                    </div>
                </div>


                <div class="item" @click="feature = 6" :class="feature === 6 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/treasury/inquiries-reports.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 6 ? 'active' : 'default'">Inquiries & Reports</div>
                    </div>
                </div>




            </div>
            <div class="content  md:h-[400px] overflow-auto">
                <!-- content 1  -->

                <div class="mobile-tab " @click="feature = 1">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Loan Memorandum</div>
                    </div>

                    <svg x-show="feature=== 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 1">
                    <div class=" heading-1 hidden md:block ">Loan Memorandum</div>
                    <ul class=" ">
                        <li>Our custom Loan Management System on Dynamics formulates and customizes loan memorandum based on requested dates, requestor, currency, amount, and purpose.</li>
                        <li>Solution helps users manage and submit pre-configured loan approval workflows with multiple levels of approvals.</li>

                    </ul>

                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
                    </div>
                </div>



                <!-- content 2  -->

                <div class="mobile-tab " @click="feature = 2">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Loan Contract</div>
                    </div>

                    <svg x-show="feature=== 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>

                </div>

                <div class=" desktop-content" x-show="feature=== 2">
                    <div class=" heading-1 hidden md:block ">Loan Contract</div>
                    <ul class=" space-y-4">
                        <li>Our Lending Management System on Dynamics generates revolving/non-revolving types of loan contracts.</li>
                        <li>Loan contracts can be categorized as short-term and long-term and as secured and unsecured.</li>
                        <li>User can setup simple/complex workflows with multiple levels of approvals.</li>
                        <li>Create loan contracts with the start date and expiration date in the requested currency and apply appropriate management fees.</li>
                        <li>Easy setup and modify interest percentages and Libor/Saibor percentages.</li>
                        <li>View the utilized amount and the remaining amount in the loan contracts.</li>
                        <li>Renew existing loan with ease and convenience through the renewal dates.</li>

                    </ul>

                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
                    </div>
                </div>



                <!-- content 3  -->

                <div class="mobile-tab " @click="feature = 3">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Collaterals</div>
                    </div>

                    <svg x-show="feature=== 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 3">
                    <div class=" heading-1 hidden md:block ">Collaterals</div>
                    <ul>
                        <li>Track securities/collaterals against the loan like property, cash, certificates of deposit, equipment, stock, letter of credit, etc.</li>
                        <li>Easily view the percentage of loans covered by collaterals with coverage ratios for property, stock, cash deposit, and other collaterals</li>

                    </ul>

                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
                    </div>
                </div>



                <!-- content 4  -->

                <div class="mobile-tab " @click="feature = 4">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Loan disbursement</div>
                    </div>

                    <svg x-show="feature=== 4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 4">
                    <div class=" heading-1 hidden md:block ">Loan disbursement</div>
                    <ul>
                        <li>Our advanced Treasury Management System on D365 facilitates loan disbursement with customized loan contracts in requested currency, management fees, and penalty charges.</li>
                        <li>Customize and modify interest percentages and Libor/Saibor percentages with ease.</li>
                        <li>Get a clear picture of the utilized amount and balance as per loan contract.</li>
                        <li>Streamline loan disbursement with start date, maturity date, and disbursement amount.</li>

                    </ul>

                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
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
                            Manage instalments.
                        </div>
                    </div>

                    <svg x-show="feature=== 5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 5">
                    <div class=" heading-1 hidden md:block ">
                        Manage instalments.
                    </div>
                    <ul>
                        <li>Schedule repayment instalments with monthly, quarterly, half-yearly, yearly, or one-time payments.</li>
                        <li>Generate a complete instalment schedule with instalment amount, start and end date.</li>
                        <li>Generate the schedule of interest payments with interest amount, start and end-date based on repayment schedule.</li>
                        <li>Generate the schedule of Libor interest payment with interest amount, start and end date.</li>
                        <li>Add and manage additional charge details to loan instalments.</li>
                        <li>Seamlessly integrate with General Ledger for loan liability, instalments, interest, and other charges.</li>
                        <li>Pre-close loans with penalty charges if applicable.
                    </ul>

                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
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
                            Inquiries & Reports
                        </div>
                    </div>

                    <svg x-show="feature=== 6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 6">
                    <div class=" heading-1 hidden md:block ">
                        Inquiries & Reports
                    </div>

                    <p class="md:text-white">Our all-encompassing Loan Management System on Dynamics generates various reports required to efficiently manage your business loans, this includes:</p>
                    <ul>
                        <li>Loan details report</li>
                        <li>Installment paid details report.</li>
                        <li>Bank facility summary and details report</li>
                        <li>Payment details report</li>
                        <li>Pending amount report</li>
                    </ul>

                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
                    </div>
                </div>





            </div>
        </div>

    </div>
</div>
<!-- section -3 ends -->



<!-- section-5 -->
<div class="  bg-treasury4 bg-cover">
    <div class=" max-w-container space-y-8 py-16 big-screen">
        <div class="flex">
            <div class=" md:w-2/5 space-y-8 text-center md:text-left px-16 ">
                <div>
                    <h3 class=" text-xl font-semibold">Achieve Financial Serenity by Managing Your Business Capital with Our </h3>
                    <div class=" text-3xl font-bold text-primary">
                        Loan Management Software on Dynamics
                    </div>
                </div>
                <p>Master the art of effective debt management. Get started today!</p>

                <div class=" inline-flex">
                    <?= $this->include('/layouts/connect') ?>
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
            How Can Our Loan Management Software Benefit Your Business’s Capital Management?
        </h2>
        <p class=" !text-white md:!text-black md:text-center">Dynamic Netsoft’s Treasury Management System provides optimal loan supervision with multiple benefits, such as</p>

    </div>
    <div class="feature">
        <div class="box">
            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/complete-visibility.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Complete visibility
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/human-error-elimination.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Human error elimination
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/prevention-of-payment.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Prevention of payment delays
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/data-driven.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Centralized and secured data storage.
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/data-driven.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Data-driven decision making
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/proficient-loan.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Streamlined loan request management.
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/efficient-loan.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Efficient loan approval process
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/effective-loan.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Flexibility in loan terms and management
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/prevention-of-payment.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Easy and accurate loan distribution
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/cost-effective.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Cost-effective & Time-saving
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/accurate-interest-tracking.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Accurate interest tracking
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/efficient-loan.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Improved loan security by efficient collateral tracking
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/effective-loan.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Effective loan repayment planning
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/detailed-payment.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Detailed payment tracking
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/treasury/proficient-loan.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Proficient loan monitoring
                </div>
            </div>







        </div>

    </div>
</div>
<!-- section-6 ends -->


<?= $this->section("faq") ?><div class="max-w-container mx-auto py-16">
    <div class=" space-y-8 max-w-4xl mx-auto px-6 lg:px-0">
        <div class=" heading-1 text-center">Frequently Asked Questions</div>
        <div class=" flex flex-col divide-y " x-data="{selected:1}">
            <div>
                <div class="faq" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">What is the use of Treasury management software?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 1 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Treasury management software is used by companies to efficiently manage their cash and financial operations. It helps in managing various banking facilities, loans, collaterals, and interest payments. The software provides an efficient and easy way to handle these financial transactions, ultimately maximizing the company’s shareholder value.
                        </p>


                    </div>
                </div>
            </div>


            <div>
                <div class="faq" @click="selected !== 2 ? selected = 2 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Is reporting available in this system?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 2 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Yes, reporting is available in the treasury management software. The system provides various reports such as loan details reports, payment details reports, bank facility summary and details reports, and pending amount reports, which can be used to monitor the loan disbursement, installment payments, and other financial activities of the organization.
                        </p>


                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 3 ? selected = 3 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">What organizations need Loan Management System?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 3 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Loan management system is beneficial for a variety of organizations, including financial institutions, microfinance institutions, credit unions, & other lending organizations that need to manage loan portfolios. Additionally, loan management software can be useful for businesses that offer loans to their customers as a part of their operations.

                        </p>

                    </div>
                </div>
            </div>





        </div>
    </div>

</div>
<div class=" h-24">
</div><?= $this->endSection("faq") ?>

<?= $this->endSection() ?>