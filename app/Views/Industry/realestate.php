<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Microsoft Dynamics 365 for Real Estate Management
<?= $this->endSection("title") ?>
<?= $this->section("description") ?>Struggling with property management? Try Microsoft Dynamics 365 for real estate management to streamline operations, enhance efficiency & gain productivity.<?= $this->endSection("description") ?>

<?= $this->section("content") ?>


<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-right-bottom   bg-cover bg-real1    ">
    <div class="banner-space"></div>
    <div class="max-w-container mx-auto h-full big-screen">


        <div class=" py-16 md:py-0   w-full h-auto  md:h-[500px]">


            <!-- inner banner -->
            <div class=" inner-banner ">
                <div class=" first-div ">
                    <h1 class="h1 ">
                        Simplify Property Sales & Leasing with Microsoft Dynamics 365
                        <span class="span ">Real Estate Management Solution</span>

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
</header>
<!--banner /-->

<!-- section 1 -->
<div class=" md:bg-primary md:pt-16">
    <div class=" max-w-container big-screen">
        <div class=" inner-section-blue">
            <div class="img-section hidden md:block">
                <img src="<?php echo base_url() ?>/images/realestate/dynamics-365-real-estate.svg" alt="">
            </div>
            <div class="content-section">
                <h2>Why ERP is Essential for <span class="text-d-yellow">Real Estate Business? </span></h2>
                <div class="sub-content">
                    <p class="">
                        Real estate companies often struggle with managing property, lease tracking, financial visibility, rent collection, and other project management complexities. Real Estate ERP provides a robust solution to overcome these challenges and gain a competitive advantage over manual processes. Our RealEstatePro is one of the leading ERP software for the real estate industry, that automates and streamlines planning, costing, execution, and maintenance processes ensuring seamless operations and enhanced efficiency.
                    </p>
                    <div class="flex lg:flex-row flex-col items-center lg:items-start  gap-4 pt-4">
                        <div>
                            <button class=" btn btn-yellow">RealEstatePro <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>
                        </div>

                        <div>
                            <button class=" btn btn-yellow">Download Brochure <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- section 1 ends -->

<!--section 2-->
<div>
    <div class="max-w-container py-16">
        <h3 class=" text-xl font-semibold text-center">Who We Extend Our Service to?</h3>
        <div>
            <div class="lg:w-3/4 mx-auto ">
                <div class="px-6 lg:px-0 relative">
                    <div class="absolute top-[50%] z-40 flex justify-between w-full left-0 ">


                        <button class="servicePrev relative -left-[5%]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-4.28 9.22a.75.75 0 000 1.06l3 3a.75.75 0 101.06-1.06l-1.72-1.72h5.69a.75.75 0 000-1.5h-5.69l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button class="serviceNext relative -right-[5%]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-white">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" clip-rule="evenodd" />
                            </svg>

                        </button>


                    </div>
                    <div class="owl-carousel owl-theme owl-service">

                        <div class=" default ">
                            <div class=" image">
                                <img src="<?php echo base_url() ?>/images/realestate/residential.svg" alt="">
                            </div>
                            <div class="  title ">Residential</div>
                        </div>


                        <div class="default ">
                            <div class=" image ">
                                <img src="<?php echo base_url() ?>/images/realestate/commercial.svg" alt="">
                            </div>
                            <div class="  title">Commercial buildings</div>
                        </div>

                        <div class="default">
                            <div class=" image ">
                                <img src="<?php echo base_url() ?>/images/realestate/malls.svg" alt="">
                            </div>
                            <div class="  title ">Malls</div>
                        </div>

                        <div class="default">
                            <div class=" image ">
                                <img src="<?php echo base_url() ?>/images/realestate/warehouses.svg" alt="">
                            </div>
                            <div class="  title ">Warehouses</div>
                        </div>


                        <div class="default">
                            <div class=" image ">
                                <img src="<?php echo base_url() ?>/images/realestate/factories.svg" alt="">
                            </div>
                            <div class="  title ">Factories</div>
                        </div>

                        <div class="default">
                            <div class=" image ">
                                <img src="<?php echo base_url() ?>/images/realestate/farmland-leasing.svg" alt="">
                            </div>
                            <div class="  title ">Farmland leasing</div>
                        </div>


                        <div class="default">
                            <div class=" image ">
                                <img src="<?php echo base_url() ?>/images/realestate/hospitality-chains.svg" alt="">
                            </div>
                            <div class="  title ">Hospitality chains</div>
                        </div>

                        <div class="default">
                            <div class=" image ">
                                <img src="<?php echo base_url() ?>/images/realestate/communities.svg" alt="">
                            </div>
                            <div class="  title ">Communities</div>
                        </div>

                        <div class="default">
                            <div class=" image ">
                                <img src="<?php echo base_url() ?>/images/realestate/township.svg" alt="">
                            </div>
                            <div class="  title ">Township</div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--section 2 ends-->

<!-- section -3 -->
<div class="  bg-real2 bg-cover bg-top ">
    <div class=" max-w-container space-y-8 py-16 big-screen">
        <div class="flex">
            <div class="w-full lg:w-2/5 space-y-8 text-center lg:text-left">
                <div class="">
                    <h3 class=" text-xl font-semibold">Maximize Returns and Minimize Complexities with the
                    </h3>
                    <div class=" text-3xl font-bold">
                        Best ERP for the Real Estate Business
                    </div>
                </div>
                <p>The Ultimate Solution for Property Management!!!</p>

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
<!-- section 3 ends -->


<!-- section 4 -->
<div class=" max-w-container space-y-8 py-16 big-screen">
    <div>
        <h3 class="heading-1 text-center w-4/6 mx-auto">
            Business Benefits of Microsoft Dynamics 365 ERP for the Real Estate Industry
        </h3>
        <p class="text-center">Our Real Estate ERP features offer a multitude of benefits that empower businesses to thrive and succeed in the competitive industry:</p>

    </div>
    <div class=" flex flex-col lg:flex-row gap-10 px-6 lg:px-0">
        <div class=" w-full lg:w-1/2 flex">
            <div class="half-icon-box ">
                <img src="<?php echo base_url() ?>/images/realestate/maximize-returns.svg" alt="">
            </div>
            <div class=" curve-div">
                <p>Our Microsoft Dynamics 365 real estate solutions streamline operations, boost productivity, reduce costs, and maximize returns.</p>
            </div>
        </div>

        <div class=" w-full lg:w-1/2 flex">
            <div class="half-icon-box ">
                <img src="<?php echo base_url() ?>/images/realestate/insights.svg" alt="">
            </div>
            <div class=" curve-div !bg-secondary">
                <p>Real-time insights provide better control and data-driven decision-making.</p>
            </div>
        </div>


    </div>


    <div class=" flex flex-col lg:flex-row gap-10 px-6 lg:px-0">
        <div class=" w-full lg:w-1/2 flex">
            <div class="half-icon-box  "> <img src="<?php echo base_url() ?>/images/realestate/enhanced-collaboration.svg" alt=""></div>
            <div class=" curve-div !bg-secondary">

                <p>Enhanced collaboration among teams leads to better coordination.</p>
            </div>
        </div>

        <div class=" w-full lg:w-1/2 flex">
            <div class="half-icon-box "><img src="<?php echo base_url() ?>/images/realestate/business-automation.svg" alt=""></div>
            <div class=" curve-div ">

                <p>Business Automation leads to higher productivity levels.</p>
            </div>
        </div>


    </div>


    <div class=" flex flex-col lg:flex-row gap-10 px-6 lg:px-0">
        <div class=" w-full lg:w-1/2 flex">
            <div class="half-icon-box "><img src="<?php echo base_url() ?>/images/realestate/workflows.svg" alt=""></div>
            <div class=" curve-div">

                <p>Streamlined workflows and Simplified tasks enhances productivity.</p>
            </div>
        </div>

        <div class=" w-full lg:w-1/2 flex">
            <div class="half-icon-box "><img src="<?php echo base_url() ?>/images/realestate/regular-updates.svg" alt=""></div>
            <div class=" curve-div !bg-secondary">
                <p>Regular updates of Dynamics 365 real estate software ensure staying equipped with the latest technology.</p>
            </div>
        </div>


    </div>





</div>
<!-- section 4 -->

<!-- succsess stories -->
<?= $this->include('/layouts/success') ?>

<?= $this->section('partner') ?>
<div class=" flex bg-secondary">
    <div class="flex  w-full">
        <div class=" hidden lg:block  grow  bg-real3 bg-cover rounded-tr-3xl tv:rounded-3xl"></div>
        <div class="p-6 lg:p-16 w-full lg:w-[60%] space-y-8 ">

            <h2 class=" heading-1">Dynamic Netsoft: attuned to Your Aspirations for Growth & Success</h2>
            <div class="space-y-4 w-full lg:w-5/6">
                <p>At Dynamic Netsoft, we stand devotedly attuned to your aspirations, crafting a symbiotic partnership that propels your business toward unrivaled success.</p>

                <ul class=" list-disc text-sm space-y-2 ml-6">
                    <li>Customer support lies at the heart of our commitment, ensuring a seamless and exceptional journey.</li>
                    <li>We provide cost-effective Microsoft Dynamics 365 solutions for Real Estate Management that improve operational efficiency while being mindful of your bottom line.</li>
                    <li>Our Real Estate ERP Software can operate on cloud-based systems or your own servers, giving you flexibility and full control.</li>
                    <li>Customization is a hallmark of our service, that allows us to cater to your unique needs and industry-specific demands.</li>
                    <li>Immersive demos showcasing the transformative potential of our offerings.</li>
                    <li>A dedicated team of experts guiding you through every step.</li>
                    <li>As a global player with an extensive footprint across multiple countries, we bring a world of possibilities to your doorstep.</li>
                </ul>
                <p>With Dynamic Netsoft by your side, harmonizing your aspirations with dynamic synergies, your business journey becomes a seamless integration of innovation and growth.</p>


            </div>
            <div class=" flex justify-center lg:justify-start">
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


<?= $this->section("faq") ?><div class="max-w-container mx-auto py-16">
    <div class=" space-y-8 max-w-4xl mx-auto px-6 lg:px-0">
        <div class=" heading-1 text-center">Frequently Asked Questions</div>
        <div class=" flex flex-col divide-y " x-data="{selected:1}">
            <div>
                <div class="faq" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Why choose Dynamics 365 ERP for the real estate industry?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 1 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class=""> Dynamics 365 ERP for the real estate industry offers comprehensive solutions with automated property management, streamlined processes,
                            real-time insights, and seamless communication. The integration, customization, and scalability features of Microsoft Dynamics 365 for real estate
                            make it the ideal choice for optimal business growth.
                        </p>

                    </div>
                </div>
            </div>


            <div>
                <div class=" faq" @click="selected !== 2 ? selected = 2 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">How to choose the best ERP for the real estate business?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 2 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Selecting the best ERP for the real estate business involves evaluating key factors like industry-specific features, scalability, integration capabilities, customization options, user-friendliness, support services, and the vendor's track record. Consider your unique business needs to make an informed decision.
                        </p>

                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 3 ? selected = 3 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Can an ERP system help in tracking and managing sales and leasing activities in the real estate industry?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 3 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Yes, an ERP system can efficiently track and manage sales and leasing activities in the real estate industry. It Microsoft Dynamics 365 real estate software streamlines processes, automates sales orders, invoicing, and payment transactions, provides real-time data for sales and leasing performance, and enhances customer relationship management for improved efficiency and profitability. </p>

                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 4 ? selected = 4 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">In which Countries does Dynamic Netsoft provide Real Estate ERP Software?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 4 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Dynamic Netsoft provides Real Estate ERP Software with a global footprint, catering to numerous countries worldwide such as India, the Middle East, the USA, Africa, etc. Our Microsoft Dynamics 365 Real Estate solutions are accessible and supported across a diverse range of locations, ensuring seamless integration of implementation, delivery, and support services.</p>


                    </div>
                </div>
            </div>




        </div>
    </div>

</div>
<div class=" h-24">
</div><?= $this->endSection("faq") ?>

<?= $this->endSection() ?>