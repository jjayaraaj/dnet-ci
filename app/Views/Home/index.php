<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Microsoft Dynamics Partner | D365 F&O - Dynamics NetSoft <?= $this->endSection("title") ?>
<?= $this->section("description") ?>Stuck with multiple legacy systems? Evolve with Dynamic Netsoft, a Microsoft Dynamics 365 Gold partner offering ERP & CRM solutions for Property & Construction industries.<?= $this->endSection("description") ?>
<?= $this->section("content") ?>

<!--banner-->


<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-cover bg-no-repeat bg-bottom lg:bg-cover bg-banner">
    <div class="max-w-container mx-auto h-full big-screen">
        <div class="banner-space"></div>

        <div class="  w-full  md:h-[500px] ">


            <!-- inner banner -->
            <div class="header-1">
                <div class=" header-2">
                    <h1 class="header-3 ">
                        <div>Accelerate your business velocity with</div> <span class="header-blue-text">Dynamic Netsoft</span>, <div>a Microsoft
                            Dynamics 365 partner</div>
                    </h1>
                    <div class="header-sub-text">
                        Level up your digital transformation process
                    </div>

                    <?= $this->include('/layouts/get-touch') ?>

                </div>
            </div>

        </div>
    </div>
</header>
<!--banner /-->

<!-- services -->
<div class="px-8 md:px-0">
    <div class=" py-16 max-w-container mx-auto big-screen">
        <div class="  md:w-5/6  mx-auto grid grid-cols-3 lg:grid-cols-5 gap-10 lg:gap-4">
            <div class="service">
                <div class="circle">
                    <img src="<?php echo base_url() ?>/images/industry-pioneers.svg" alt="">
                </div>
                <div class="title">Industry<br>Pioneers</div>
            </div>

            <div class="service">
                <div class="circle">
                    <img src="<?php echo base_url() ?>/images/80-customers-worldwide.svg" alt="">
                </div>
                <div class="title">80+ <br> Customers
                    Worldwide</div>
            </div>

            <div class="service">
                <div class="circle">
                    <img src="<?php echo base_url() ?>/images/6-ISV-solutions.svg" alt="">
                </div>
                <div class="title">6<br>
                    ISV Solutions</div>
            </div>

            <div class="service">
                <div class="circle">
                    <img src="<?php echo base_url() ?>/images/10-Industries.svg" alt="">
                </div>
                <div class="title">10+<br>
                    Industries</div>
            </div>

            <div class="service">
                <div class="circle">
                    <img src="<?php echo base_url() ?>/images/worldwide-operations.svg" alt="">
                </div>
                <div class="title">Worldwide<br>
                    Operations</div>
            </div>


        </div>

    </div>
</div>

<!-- dynamics -->
<div class="  lg:block bg-secondary py-16 mx-auto" x-data="{solution:1}">
    <div class="big-screen space-y-16 ">
        <h2 class=" heading-1 text-center">Microsoft Dynamics 365 ISV solutions popular among our clients</h2>


        <div class=" lg:flex gap-16 items-center">
            <div class=" w-2/3 lg:flex -ml-24 hidden ">
                <div class=" relative  ">
                    <div class=" h-[30rem] w-[30rem] bg-primary-gradient rounded-full p-14">
                        <div class=" rounded-full w-full h-full bg-white overflow-hidden flex items-center p-4">
                            <img src="<?php echo base_url() ?>/images/home/microsoft-dynamics-partner.svg" class=" object-cover rounded-full" x-show="solution===1" alt="">
                            <img src="<?php echo base_url() ?>/images/home/dynamics-365-partner.svg" class=" object-cover rounded-full" x-show="solution===2" alt="">
                            <img src="<?php echo base_url() ?>/images/home/microsoft-dynamics-365-isv-solutions.svg" class=" object-cover rounded-full" x-show="solution===3" alt="">
                            <img src="<?php echo base_url() ?>/images/home/microsoft-dynamics-erp-partner.svg" class=" object-cover rounded-full" alt="" x-show="solution===4">
                            <img src="<?php echo base_url() ?>/images/home/dynamics-365-finance-operation-partner-services.svg" class=" object-cover rounded-full" alt="" x-show="solution===5">
                            <img src="<?php echo base_url() ?>/images/home/ms-d365 f&o-partner.svg" class=" object-cover rounded-full" alt="" x-show="solution===6">
                        </div>
                    </div>


                </div>

                <div class="relative  flex flex-col space-y-5 -left-14 ">
                    <div class=" dynamics-strip  -ml-24" :class="solution === 1 ? 'active' : 'default'" @click="solution = 1">
                        <div class="circle">
                            <img src="<?php echo base_url() ?>/images/icons/RealEstatePro.svg" alt="">
                        </div>
                        <div class="title">RealEstatePro</div>
                    </div>

                    <div class=" dynamics-strip -ml-12" :class="solution === 2 ? 'active' : 'default'" @click="solution = 2">
                        <div class="circle">
                            <img src="<?php echo base_url() ?>/images/icons/Contract-Management.svg" alt="">
                        </div>
                        <div class="title">Contract Management</div>
                    </div>
                    <div class=" dynamics-strip" :class="solution === 3 ? 'active' : 'default'" @click="solution = 3">
                        <div class="circle">
                            <img src="<?php echo base_url() ?>/images/icons/bid-management.svg" alt="">
                        </div>
                        <div class="title">Bid Management</div>
                    </div>
                    <div class=" dynamics-strip" :class="solution === 4 ? 'active' : 'default'" @click="solution = 4">
                        <div class="circle">
                            <img src="<?php echo base_url() ?>/images/icons/Treasury-Management.svg" alt="">
                        </div>
                        <div class="title">Treasury Management</div>
                    </div>
                    <div class="dynamics-strip -m-12" :class="solution === 5 ? 'active' : 'default'" @click="solution = 5">
                        <div class="circle">
                            <img src="<?php echo base_url() ?>/images/icons/investment-solution.svg" alt="">
                        </div>
                        <div>
                            <div class="title">Investment Portfolio
                                Management</div>
                        </div>
                    </div>

                    <div class=" dynamics-strip -ml-24" :class="solution === 6 ? 'active' : 'default'" @click="solution = 6">
                        <div class="circle">
                            <img src="<?php echo base_url() ?>/images/icons/AXOnePay.svg" alt="">
                        </div>
                        <div class="title">AxOnePay</div>
                    </div>
                </div>
            </div>


            <div x-cloak class=" space-y-4 lg:space-y-4  lg:w-1/2 lg:bg-primary md:h-[500px] md:flex md:items-center  lg:mx-0  lg:py-10  lg:px-20  lg:rounded-none lg:rounded-tl-[3.5rem]  lg:border-l-8 lg:border-l-slate-300 tv:rounded-[3.5em]">

                <div class=" lg:hidden px-6 hover:curso" @click="solution = 1">
                    <div class="bg-secondary-dark rounded-3xl px-6 py-2  flex items-center justify-between">
                        <div class="flex items-center gap-x-2">
                            <img src="<?php echo base_url() ?>/images/home/realestatepro.svg" class=" w-7 h-7" alt="">
                            <div class="">
                                <div class="text-lg font-semibold">RealEstatePro</div>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primary">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                </div>
                <!-- realestatepro -->
                <div x-show="solution === 1" class=" bg-primary mx-6 my-2 lg:my-0 lg:mx-0 rounded-2xl lg:rounded-none lg:bg-transparent p-6 lg:p-0">
                    <div class="text-white space-y-6">

                        <h4 class="hidden lg:block display-3 ">RealEstatePro</h4>

                        <div class=" space-y-4">
                            <p> The one-stop flagship product for the entire Real Estate
                                and Property Management sector</p>
                            <p> Dynamic Netsoft has led the way in offering ERP and CRM solutions for leading Real Estate and Property businesses worldwide since its inception in 2011. Strategically fabricated with high-priority real estate components, our leading flagship Microsoft Dynamics 365 ISV solution, RealEstatePro, delivers value in automating business processes from commercial to Enterprise customers</p>
                        </div>

                        <div class=" flex flex-col lg:flex-row gap-6 items-center">
                            <div>
                                <button @click="openFormDownload('<?= uri_string() ?>')" class=" btn btn-yellow">Download Brochure<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex"><a href="<?php echo base_url() ?>/property-management-software-dynamics-365" class=" btn btn-yellow ">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg></a>
                            </div>
                        </div>


                    </div>
                </div>


                <!-- contract -->
                <div class=" lg:hidden px-6" @click="solution = 2">
                    <div class="bg-secondary-dark rounded-3xl px-6 py-2  flex items-center justify-between">
                        <div class="flex items-center gap-x-2">
                            <img src="<?php echo base_url() ?>/images/home/realestatepro.svg" class=" w-7 h-7" alt="">
                            <div class="">
                                <div class="text-base font-semibold">Contract Management Solution</div>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primary">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                </div>
                <div x-show="solution === 2" class="bg-primary-gradient mx-6 my-2 lg:my-0 lg:mx-0 rounded-2xl lg:rounded-none lg:bg-transparent p-6 lg:p-0">
                    <div class=" text-white space-y-6">

                        <h4 class="display-3">Contract Management Solution</h4>

                        <div class=" space-y-4">
                            <p> The latest and smartest way to manage all kinds of sub-contracts for construction projects</p>
                            <p> Handling contracts and sub-contracts for construction projects can be complex and time intensive. Dynamic Netsoft’s Contract management ISV solutions on Microsoft Dynamics 365 platform manage all project sub-contract processes in a comprehensive and iterative way. With Customized functionalities to align all processes and transactions including milestone management, you can quickly produce complete analyses and reports on the progress of the entire sub-contracting process.</p>
                        </div>

                        <div class=" flex flex-col lg:flex-row gap-6 items-center">
                            <div>
                                <button @click="openFormDownload('<?= uri_string() ?>')" class=" btn btn-yellow">Download Brochure<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex"><a href="<?php echo base_url() ?>/contract-management-software-dynamics-365" class=" btn btn-yellow ">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg></a>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- BID -->
                <div class=" lg:hidden px-6" @click="solution = 3" class="bg-primary-gradient mx-6 my-2 lg:my-0 lg:mx-0 rounded-2xl lg:rounded-none lg:bg-transparent p-6 lg:p-0">
                    <div class="bg-secondary-dark rounded-3xl px-6 py-2  flex items-center justify-between">
                        <div class="flex items-center gap-x-2">
                            <img src="<?php echo base_url() ?>/images/home/realestatepro.svg" class=" w-7 h-7" alt="">
                            <div class="">
                                <div class="text-base font-semibold">Bid Management Solution</div>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primary">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                </div>
                <div x-show="solution === 3" class="bg-primary-gradient mx-6 my-2 lg:my-0 lg:mx-0 rounded-2xl lg:rounded-none lg:bg-transparent p-6 lg:p-0">
                    <div class=" text-white space-y-6">

                        <h4 class="display-3">Bid Management Solution</h4>

                        <div class=" space-y-4">
                            <p> Concoct winning Tenders effectively to secure contracts through our state-of-the-art Bid management solution</p>
                            <p> Control your bidding, procurement, and tender processes with our specially curated Bid Management Software designed on Microsoft Dynamics 365 solution. Use adaptable templates, create precise, professional-looking bid estimates, and monitor projects to increase accountability and visibility.</p>
                        </div>

                        <div class=" flex flex-col lg:flex-row gap-6 items-center">
                            <div>
                                <button @click="openFormDownload('<?= uri_string() ?>')" class=" btn btn-yellow">Download Brochure<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex"><a href="<?php echo base_url() ?>/dynamics-365-bid-management-software" class=" btn btn-yellow ">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg></a>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- Treasury -->
                <div class=" lg:hidden px-6" @click="solution = 4">
                    <div class="bg-secondary-dark rounded-3xl px-6 py-2  flex items-center justify-between">
                        <div class="flex items-center gap-x-2">
                            <img src="<?php echo base_url() ?>/images/home/realestatepro.svg" class=" w-7 h-7" alt="">
                            <div class="">
                                <div class="text-base font-semibold">Treasury Control</div>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primary">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                </div>
                <div x-show="solution === 4" class="bg-primary-gradient mx-6 my-2 lg:my-0 lg:mx-0 rounded-2xl lg:rounded-none lg:bg-transparent p-6 lg:p-0">
                    <div class=" text-white space-y-6">

                        <h4 class="display-3">Treasury Control</h4>

                        <div class=" space-y-4">
                            <p>An innovative treasury solution that facilitates prudent, precise, and controlled data turnaround and transaction visibility</p>
                            <p>Empower your finance team with real-time insights into loan transactions, payables, forecasts, and outstanding through our leading bank-loan facilitation solutions. Dynamic Netsoft offers Dynamics 365 Finance & Operation Partner Services enabling a streamlined and secure process for all loan payment functions and resulting in reduced administration maintenance and costs. Manage your loan memorandum, contracts, disbursement, and renewal process with a click of a button.</p>
                        </div>

                        <div class=" flex flex-col lg:flex-row gap-6 items-center">
                            <div>
                                <button @click="openFormDownload('<?= uri_string() ?>')" class=" btn btn-yellow">Download Brochure<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex"><a href="<?php echo base_url() ?>/treasury-management-software-dynamics" class=" btn btn-yellow ">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg></a>
                            </div>
                        </div>


                    </div>
                </div>


                <!-- Investment -->
                <div class=" lg:hidden px-6" @click="solution = 5">
                    <div class="bg-secondary-dark rounded-3xl px-6 py-2  flex items-center justify-between">
                        <div class="flex items-center gap-x-2">
                            <img src="<?php echo base_url() ?>/images/home/realestatepro.svg" class=" w-7 h-7" alt="">
                            <div class="">
                                <div class="text-base font-semibold">Investment Portfolio Management</div>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primary">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                </div>
                <div x-show="solution === 5" class="bg-primary-gradient mx-6 my-2 lg:my-0 lg:mx-0 rounded-2xl lg:rounded-none lg:bg-transparent p-6 lg:p-0">
                    <div class=" text-white space-y-6">

                        <h4 class="display-3">Investment Portfolio Management</h4>

                        <div class=" space-y-4">
                            <p> Innovative solutions on Dynamics 365 to assist global investors and institutions to automate their core processes.</p>
                            <p> IPM software offers a quick view of your financial portfolio, ensuring your investment holdings align with your current financial goals and strategies. It provides analysis and reports on market structure, market allocation, and partners’ distribution policies. It’s designed to maximize the efficiency and output of Dynamics 365 F&O users by effectively tracking all investment transactions. Features include Investment parameters, KPIs, risk analysis, and market-price valuations.</p>
                        </div>

                        <div class=" flex flex-col lg:flex-row gap-6 items-center">
                            <div>
                                <button @click="openFormDownload('<?= uri_string() ?>')" class=" btn btn-yellow">Download Brochure<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex"><a href="<?php echo base_url() ?>/investment-portfolio-management-software-dynamics" class=" btn btn-yellow ">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg></a>
                            </div>
                        </div>


                    </div>
                </div>


                <!-- Axopnepay -->
                <div class=" lg:hidden px-6" @click="solution = 6">
                    <div class="bg-secondary-dark rounded-3xl px-6 py-2  flex items-center justify-between">
                        <div class="flex items-center gap-x-2">
                            <img src="<?php echo base_url() ?>/images/home/realestatepro.svg" class=" w-7 h-7" alt="">
                            <div class="">
                                <div class="text-base font-semibold">Payroll Administration</div>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primary">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                </div>
                <div x-show="solution === 6" class="bg-primary-gradient mx-6 my-2 lg:my-0 lg:mx-0 rounded-2xl lg:rounded-none lg:bg-transparent p-6 lg:p-0">
                    <div class=" text-white space-y-6">

                        <h4 class="display-3">Payroll Administration</h4>

                        <div class=" space-y-4">
                            <p>AXOnePay- a comprehensive Payroll solution for Organizations that consider Payroll functions as a strategic need to their organization.</p>
                            <p>AxOnePay exhibits flawless integration with Microsoft Dynamics 365 F&O ERP solution, facilitating a host of features in employee administration and automation. It’s a one-stop solution that manages the complete lifecycle of an employee compensation & benefits process. It’s designed to maximize the efficiency and output of Dynamics AX and Dynamics 365 HR function users and decision-makers.</p>
                        </div>

                        <div class=" flex flex-col lg:flex-row gap-6 items-center">
                            <div>
                                <button @click="openFormDownload('<?= uri_string() ?>')" class=" btn btn-yellow">Download Brochure<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex"><a href="<?php echo base_url() ?>/dynamics-365-HR-payroll" class=" btn btn-yellow ">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg></a>
                            </div>
                        </div>



                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<!-- redefine -->

<div class="bg-redefine bg-cover ">
    <div class="py-16  max-w-container big-screen space-y-6 lg:space-y-16">
        <div class=" px-6 lg:px-0 flex relative flex-col gap-2 text-center lg:text-left  w-fit">
            <div class="hidden lg:block lg:absolute -left-6 -top-6 "><img src="<?php echo base_url() ?>/images/home/open-tag.svg" alt=""></div>
            <h3 class=" heading-1">Redefine excellence with Dynamic Netsoft,</h3>
            <h3 class="display-2 "><span class="font-medium">a worldwide</span> <span class="text-primary">Microsoft Dynamics 365 - ISV Partner</span>
            </h3>
            <div class="hidden lg:block lg:absolute -right-6 -bottom-6"><img src="<?php echo base_url() ?>/images/home/close-tag.svg" alt=""></div>
        </div>

        <div class=" flex flex-col lg:flex-row justify-between items-center space-y-6">
            <div class="lg:w-1/2 text-xl px-6 lg:px-0 text-center lg:text-left">
                Specifically designed and pre-configured to streamline Real Estate
                business operations to achieve enhanced productivity
            </div>
            <div><button class="btn btn-primary">Connect with Us <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg></button></div>
        </div>
    </div>
</div>

<!-- idustry vertical -->
<div class="flex items-center bg-primary-gradient big-screen tv:bg-secondary" x-data="{vertical: 1}">
    <div class="w-2/3 bg-secondary py-16 h-full hidden lg:block ">
        <div class="px-16">

            <h3 class=" heading-1">Industry Vertical solutions include</h3>

            <div class="solution">
                <div :class="vertical === 1 ? 'active' : 'default'" @click=" vertical = 1">
                    <div class=" image ">
                        <img src="<?php echo base_url() ?>/images/verticals/realestate.svg" alt="">
                    </div>
                    <div class="  title ">RealEstate</div>
                </div>

                <div :class="vertical === 2 ? 'active' : 'default'" @click=" vertical = 2">
                    <div class=" image"><img src="<?php echo base_url() ?>/images/verticals/construction.svg" alt=""></div>
                    <div class=" title">Construction</div>
                </div>

                <div :class="vertical === 3 ? 'active' : 'default'" @click=" vertical = 3">
                    <div class=" image"><img src="<?php echo base_url() ?>/images/verticals/retail.svg" alt=""></div>
                    <div class=" title">Retail</div>
                </div>

                <div :class="vertical === 4 ? 'active' : 'default'" @click=" vertical = 4">
                    <div class=" image"><img src="<?php echo base_url() ?>/images/verticals/finance-investment.svg" alt=""></div>
                    <div class=" title  ">Finance &
                        Investment</div>
                </div>

            </div>
        </div>
    </div>

    <div class=" w-full lg:w-1/2  py-16 h-full">
        <div class="px-16 text-white lg:w-4/5">
            <div class="hidden lg:block ">
                <!-- realestate -->
                <div x-show="vertical === 1" class="space-y-8 text-center lg:text-left">
                    <div class="text-xl font-bold ">RealEstate</div>
                    <p class="  ">Microsoft accredited and industry benchmark solutions to manage your real estate business with enhanced operational efficiency, improved customer experience, and structured property leasing and sales management</p>
                    <button class="btn btn-yellow">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg></button>
                </div>

                <!-- Construction -->
                <div x-show="vertical === 2" class="space-y-8 text-center lg:text-left">
                    <div class="text-xl font-bold ">Construction</div>
                    <p class="  ">A comprehensive suite of products to enable bid and sub-contracting processes integrated with D365 project management capabilities to handle operational functions for the construction and project management. </p>
                    <button class="btn btn-yellow">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg></button>
                </div>

                <!-- retail -->
                <div x-show="vertical === 3" class="space-y-8 text-center lg:text-left">
                    <div class="text-xl font-bold ">Retail</div>
                    <p class="  ">A cloud-based solution that links sales, service, finance, and operations teams to enable quicker adaptation and result-oriented performance to provide customers and partners with unified, personalized, and smooth purchasing experiences.</p>
                    <button class="btn btn-yellow">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg></button>
                </div>

                <!-- Finance -->
                <div x-show="vertical === 4" class="space-y-8 text-center lg:text-left">
                    <div class="text-xl font-bold ">Finance & Investment</div>
                    <p class="  ">Adopt cutting-edge functions and performance, complete analysis & insights with improved operational efficiency for the Finance & investment sector to mitigate financial complexities and minimize the overall cost.</p>
                    <button class="btn btn-yellow">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg></button>
                </div>

            </div>


            <!-- mobile -->
            <div class=" lg:hidden">
                <div class="owl-vertical owl-carousel owl-theme">
                    <!-- realestate -->
                    <div>
                        <div class="space-y-8 text-center lg:text-left">
                            <div class="text-xl font-bold ">RealEstate</div>
                            <p class="  ">Microsoft accredited and industry benchmark solutions to manage your real estate business with enhanced operational efficiency, improved customer experience, and structured property leasing and sales management</p>
                            <div class="flex justify-center">
                                <button class="btn btn-yellow">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg></button>
                            </div>
                        </div>
                    </div>

                    <!-- Construction -->
                    <div>
                        <div class="space-y-8">
                            <div class="text-xl font-bold ">Construction</div>
                            <p class="  ">A comprehensive suite of products to enable bid and sub-contracting processes integrated with D365 project management capabilities to handle operational functions for the construction and project management. </p>
                            <div class="flex justify-center">
                                <button class="btn btn-yellow">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg></button>
                            </div>
                        </div>
                    </div>

                    <!-- retail -->
                    <div>
                        <div class="space-y-8">
                            <div class="text-xl font-bold ">Retail</div>
                            <p class="  ">A cloud-based solution that links sales, service, finance, and operations teams to enable quicker adaptation and result-oriented performance to provide customers and partners with unified, personalized, and smooth purchasing experiences.</p>
                            <div class="flex justify-center">
                                <button class="btn btn-yellow">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg></button>
                            </div>
                        </div>
                    </div>

                    <!-- Finance -->
                    <div class="">
                        <div class="space-y-8">
                            <div class="text-xl font-bold ">Finance & Investment</div>
                            <p class="  ">Adopt cutting-edge functions and performance, complete analysis & insights with improved operational efficiency for the Finance & investment sector to mitigate financial complexities and minimize the overall cost.</p>
                            <div class="flex justify-center">
                                <button class="btn btn-yellow">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
</div>




<!-- succsess stories -->
<?= $this->include('layouts/success') ?>

<?= $this->section('partner') ?>
<div class=" flex bg-secondary">
    <div class="flex  big-screen">
        <div class=" hidden lg:block w-2/5 grow  bg-digital bg-cover rounded-tr-3xl tv:rounded-3xl"></div>
        <div class="p-6 lg:p-16 w-full lg:w-[60%] space-y-8">

            <h2 class=" heading-1 text-center lg:text-left">Why choose Dynamic Netsoft as your digital partner?</h2>
            <div class="space-y-4 text-center lg:text-left lg:w-5/6">
                <p>Dynamic Netsoft is a leading Microsoft Dynamics 365 partner and a global ISV, providing vertical-specific solutions built on the Microsoft ecosystem. We are a team of passionate and dedicated professionals working towards a single goal – your business growth.

                <p>Every day we earn our customers' trust by taking their business from survival to growth. Our top-ranked Microsoft Dynamics 365 ISV solutions for Industry verticals have been recognized and rewarded for their feature-rich capabilities and ability to address specific pain points of our customers</p>

                <p>Trusted by more than 100 satisfied customers, our main objective is to bring every aspect of your business on a single platform so you can have a 360⁰ view and 100% visibility. Dynamic Netsoft offers a comprehensive suite of services to enhance the crucial facets of your business.</p>

                <p>So, what are you waiting for?</p>
            </div>
            <div class="flex justify-center">
                <button class="btn btn-primary">
                    Talk to Our Expert <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection('partner') ?>

<?= $this->section('blog') ?>
<div class="max-w-container big-screen mx-auto py-16">
    <div class=" space-y-8">
        <div class=" text-3xl font-bold text-center">Recent Blog</div>
        <div class=" lg:grid grid-cols-3 gap-8 hidden ">
            <div class=" bg-gray-200 h-60"></div>
            <div class=" bg-gray-200 h-60"></div>
            <div class=" bg-gray-200 h-60"></div>
        </div>
    </div>
</div>
<?= $this->endSection('blog') ?>

<?= $this->section("faq") ?><div class="max-w-container mx-auto py-16 ">
    <div class=" space-y-8 max-w-4xl mx-auto">
        <div class=" heading-1 text-center">Frequently Asked Questions</div>
        <div class=" flex flex-col divide-y px-6 lg:px-0 " x-data="{selected:1}">
            <div>
                <div class="faq" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Why should I opt for Microsoft Dynamics 365?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 1 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class=""> You should choose Microsoft Dynamics 365 Partners due to the following reasons;
                        </p>
                        <div class="lg:flex  gap-x-10">
                            <ul class="list-disc pl-8">
                                <li>Leader in ERP Software solutions</li>
                                <li>Benchmark features</li>
                                <li>Cloud-based products</li>
                                <li>Centralized platform</li>
                                <li>Business Analytics</li>

                            </ul>

                            <ul class="list-disc pl-8">
                                <li>Sure-step implementation methodology</li>
                                <li>Advanced data security</li>
                                <li>Real-time business insights</li>
                                <li>World-class support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <div class=" faq" @click="selected !== 2 ? selected = 2 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Is Microsoft Dynamics 365 an ERP or CRM?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 2 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Microsoft Dynamics 365 is a cloud-based applications platform that includes both ERP and CRM components along with Business Analytics and pre-configured tools and reports for business users.
                        </p>

                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 3 ? selected = 3 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">How is DNETSOFT the right Microsoft Dynamic 365 Finance & Operations partner for me?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 3 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Dynamic Netsoft is a leading Microsoft ISV & Dynamics 365 F&O ERP implementation partner. Digital & business transformation experts for the Property & Construction vertical with global experience and success in delivering business value to more than 100 companies. Incredible track record of implementation success across other major Industry verticals.
                        </p>

                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 4 ? selected = 4 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">What type of services does Dynamic NetSoft Technologies offer?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 4 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">As a Dynamic 365 partner, we offer the following services.</p>
                        <ul class="list-disc pl-8">
                            <li>ERP Implementation – expert design, configuration, and deployment of world-class Microsoft ERP for customer requirements across Industry verticals. Provide customized workflows, reports, and analytics to best suit end-user needs and business benefits.</li>
                            <li>CRM / SaaS solutions - World-class SaaS products for the Property segment with benchmark features and easy-to-use Mobile/Web Apps for device-driven experience from anywhere, anytime.</li>
                            <li>Migration - upgrade to Cloud and the latest version, Dynamics AX to Dynamics 365 ERP implementation services</li>
                        </ul>




                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 5 ? selected = 5 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Which Industries DNETSOFT Microsoft Dynamics 365 ISV Solutions are most suited for?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 5 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container5" x-bind:style="selected == 5 ? 'max-height: ' + $refs.container5.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">As an MS D365 F&O partner, DNETSOFT has designed industry-specific ISV solutions on Microsoft Dynamics 365 for industries like</p>
                        <ul class="list-disc pl-8">
                            <li>Real Estate</li>
                            <li>Construction</li>
                            <li> Banking & Investment</li>
                            <li> HR & Payroll</li>
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