<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Home <?= $this->endSection("title") ?>

<?= $this->section("content") ?>

<!--banner-->


<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-cover bg-banner">
    <div class="max-w-container mx-auto h-full big-screen">
        <div class="banner-space"></div>

        <div class="  w-full  h-[500px]">


            <!-- inner banner -->
            <div class=" mx-auto max-w-container big-screen  h-full flex items-center ">
                <div class=" space-y-8">
                    <div class="text-[2rem] font-bold max-w-3xl flex-1 ">
                        Accelerate your business velocity with <span class="display-lg text-primary  !leading-[5rem]">Dynamic Netsoft</span>, a Microsoft
                        Dynamics 365 partner
                    </div>
                    <div class=" text-lg font-semibold">
                        Level up your digital transformation process
                    </div>

                    <button class="btn btn-primary">Connect with Us <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg></button>

                </div>
            </div>

        </div>
    </div>
</header>
<!--banner /-->

<!-- services -->
<div class="">
    <div class=" py-16 max-w-container mx-auto big-screen">
        <div class="  md:w-5/6  mx-auto grid grid-cols-2 lg:grid-cols-5 gap-2 lg:gap-4">
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
<div class=" hidden lg:block bg-secondary py-16    mx-auto" x-data="{solution:1}">
    <div class="big-screen space-y-16 ">
        <h1 class=" heading-1 text-center">Microsoft Dynamics 365 ISV solutions popular among our clients</h1>

        <div class=" flex gap-16 items-center">
            <div class=" w-2/3 flex -ml-24 ">
                <div class=" relative  ">
                    <div class=" h-[30rem] w-[30rem] bg-primary-gradient rounded-full p-14">
                        <div class=" rounded-full w-full h-full bg-white overflow-hidden flex items-center p-4">
                            <img src="<?php echo base_url() ?>/images/RealEstatePro-solution.svg" class=" object-cover rounded-full" x-show="solution===1" alt="">
                            <img src="<?php echo base_url() ?>/images/contract-management-solution.svg" class=" object-cover rounded-full" x-show="solution===2" alt="">
                            <img src="<?php echo base_url() ?>/images/bid-management-solution.svg" class=" object-cover rounded-full" x-show="solution===3" alt="">
                            <img src="<?php echo base_url() ?>/images/treasury-management-solution.svg" class=" object-cover rounded-full" alt="" x-show="solution===4">
                            <img src="<?php echo base_url() ?>/images/ip-management-solution.svg" class=" object-cover rounded-full" alt="" x-show="solution===5">
                            <img src="<?php echo base_url() ?>/images/payroll-management-solution.svg" class=" object-cover rounded-full" alt="" x-show="solution===6">
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
            <div x-cloak class=" w-1/2 bg-primary-gradient py-10 px-20 rounded-tl-[3.5rem] border border-l-8 border-l-slate-300">
                <!-- realestatepro -->
                <div x-show="solution === 1">
                    <div class=" text-white space-y-6">

                        <div>RealEstatePro</div>

                        <div class=" space-y-4">
                            <p> The one-stop flagship product for the entire Real Estate
                                and Property Management sector</p>
                            <p> Dynamic Netsoft has led the way in offering ERP and CRM solutions for leading Real Estate and Property businesses worldwide since its inception in 2011. Strategically fabricated with high-priority real estate components, our leading flagship Microsoft Dynamics 365 ISV solution, RealEstatePro, delivers value in automating business processes from commercial to Enterprise customers</p>
                        </div>

                        <div class=" flex gap-6">
                            <button class=" btn btn-yellow">Download Brochure <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>

                            <button class=" btn btn-yellow">Read More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>
                        </div>


                    </div>
                </div>


                <!-- contract -->
                <div x-show="solution === 2">
                    <div class=" text-white space-y-6">

                        <div>Contract Management</div>

                        <div class=" space-y-4">
                            <p> The one-stop flagship product for the entire Real Estate
                                and Property Management sector</p>
                            <p> Dynamic Netsoft has led the way in offering ERP and CRM solutions for leading Real Estate and Property businesses worldwide since its inception in 2011. Strategically fabricated with high-priority real estate components, our leading flagship Microsoft Dynamics 365 ISV solution, RealEstatePro, delivers value in automating business processes from commercial to Enterprise customers</p>
                        </div>

                        <div class=" flex gap-6">
                            <button class=" btn btn-yellow">Download Brochure <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>

                            <button class=" btn btn-yellow">Read More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>
                        </div>


                    </div>
                </div>

                <!-- BID -->
                <div x-show="solution === 3">
                    <div class=" text-white space-y-6">

                        <div>Bid Management</div>

                        <div class=" space-y-4">
                            <p> The one-stop flagship product for the entire Real Estate
                                and Property Management sector</p>
                            <p> Dynamic Netsoft has led the way in offering ERP and CRM solutions for leading Real Estate and Property businesses worldwide since its inception in 2011. Strategically fabricated with high-priority real estate components, our leading flagship Microsoft Dynamics 365 ISV solution, RealEstatePro, delivers value in automating business processes from commercial to Enterprise customers</p>
                        </div>

                        <div class=" flex gap-6">
                            <button class=" btn btn-yellow">Download Brochure <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>

                            <button class=" btn btn-yellow">Read More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>
                        </div>


                    </div>
                </div>


                <!-- Treasury -->
                <div x-show="solution === 4">
                    <div class=" text-white space-y-6">

                        <div>Treasury Management</div>

                        <div class=" space-y-4">
                            <p> The one-stop flagship product for the entire Real Estate
                                and Property Management sector</p>
                            <p> Dynamic Netsoft has led the way in offering ERP and CRM solutions for leading Real Estate and Property businesses worldwide since its inception in 2011. Strategically fabricated with high-priority real estate components, our leading flagship Microsoft Dynamics 365 ISV solution, RealEstatePro, delivers value in automating business processes from commercial to Enterprise customers</p>
                        </div>

                        <div class=" flex gap-6">
                            <button class=" btn btn-yellow">Download Brochure <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>

                            <button class=" btn btn-yellow">Read More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>
                        </div>


                    </div>
                </div>


                <!-- Investment -->
                <div x-show="solution === 5">
                    <div class=" text-white space-y-6">

                        <div>Investment Portfolio Management</div>

                        <div class=" space-y-4">
                            <p> The one-stop flagship product for the entire Real Estate
                                and Property Management sector</p>
                            <p> Dynamic Netsoft has led the way in offering ERP and CRM solutions for leading Real Estate and Property businesses worldwide since its inception in 2011. Strategically fabricated with high-priority real estate components, our leading flagship Microsoft Dynamics 365 ISV solution, RealEstatePro, delivers value in automating business processes from commercial to Enterprise customers</p>
                        </div>

                        <div class=" flex gap-6">
                            <button class=" btn btn-yellow">Download Brochure <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>

                            <button class=" btn btn-yellow">Read More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>
                        </div>


                    </div>
                </div>


                <!-- Axopnepay -->
                <div x-show="solution === 6">
                    <div class=" text-white space-y-6">

                        <div>AxOnePay</div>

                        <div class=" space-y-4">
                            <p> The one-stop flagship product for the entire Real Estate
                                and Property Management sector</p>
                            <p> Dynamic Netsoft has led the way in offering ERP and CRM solutions for leading Real Estate and Property businesses worldwide since its inception in 2011. Strategically fabricated with high-priority real estate components, our leading flagship Microsoft Dynamics 365 ISV solution, RealEstatePro, delivers value in automating business processes from commercial to Enterprise customers</p>
                        </div>

                        <div class=" flex gap-6">
                            <button class=" btn btn-yellow">Download Brochure <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>

                            <button class=" btn btn-yellow">Read More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<!-- redefine -->

<div class="bg-redefine bg-cover ">
    <div class="py-16 max-w-container big-screen space-y-16">
        <div class=" flex flex-col gap-2 text-center lg:text-left">
            <div class=" heading-1">Redefine excellence with Dynamic Netsoft,</div>
            <div class="display-2"><span class="font-medium">a worldwide</span> Microsoft Dynamics 365 - ISV Partner
            </div>
        </div>

        <div class=" flex flex-col lg:flex-row justify-between items-center">
            <div class="w-1/2 text-xl">
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

            <div class=" heading-1">Industry Vertical solutions include</div>

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
        <div class="px-16 text-white  w-4/5">

            <!-- realestate -->
            <div x-show="vertical === 1" class="space-y-8">
                <div class="text-xl font-bold ">RealEstate</div>
                <p class="  ">Microsoft accredited and industry benchmark solutions to manage your real estate business with enhanced operational efficiency, improved customer experience, and structured property leasing and sales management</p>
                <button class="btn btn-yellow">Read More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg></button>
            </div>

            <!-- Construction -->
            <div x-show="vertical === 2" class="space-y-8">
                <div class="text-xl font-bold ">Construction</div>
                <p class="  ">Microsoft accredited and industry benchmark solutions to manage your real estate business with enhanced operational efficiency, improved customer experience, and structured property leasing and sales management</p>
                <button class="btn btn-yellow">Read More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg></button>
            </div>

            <!-- retail -->
            <div x-show="vertical === 3" class="space-y-8">
                <div class="text-xl font-bold ">Retail</div>
                <p class="  ">Microsoft accredited and industry benchmark solutions to manage your real estate business with enhanced operational efficiency, improved customer experience, and structured property leasing and sales management</p>
                <button class="btn btn-yellow">Read More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg></button>
            </div>

            <!-- Finance -->
            <div x-show="vertical === 4" class="space-y-8">
                <div class="text-xl font-bold ">Finance & Investment</div>
                <p class="  ">Microsoft accredited and industry benchmark solutions to manage your real estate business with enhanced operational efficiency, improved customer experience, and structured property leasing and sales management</p>
                <button class="btn btn-yellow">Read More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg></button>
            </div>


        </div>

    </div>
</div>


<!-- succsess stories -->
<div class=" bg-success bg-cover py-16">
    <div class="max-w-container big-screen  ">

        <div class="owl-carousel owl-theme w-full" id="success">



            <div class="flex flex-col lg:flex-row justify-between px-16 w-5/6 mx-auto">
                <div class=" space-y-10">
                    <div class="heading-1">
                        Success Stories
                    </div>
                    <div class=" space-y-1">
                        <div class="display-2 text-primary">
                            GRIDCo
                        </div>
                        <div class=" text-3xl font-semibold">Ghana Grid Company:</div>
                        <p>Electricity transmission company in Ghana</p>
                    </div>
                    <button class="btn btn-primary">Read More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg></button>
                </div>
                <div class="">
                    <div class="h-60 w-60 bg-gray-200"></div>
                </div>
            </div>
        </div>
    </div>
</div>




<?= $this->endSection() ?>