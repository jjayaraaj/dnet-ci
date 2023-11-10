<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
ERP for the Construction Industry on Microsoft Dynamics 365<?= $this->endSection("title") ?>
<?= $this->section("description") ?>Looking for a comprehensive ERP system for your construction business? Experience versatility with our ERP on Microsoft Dynamics 365 for construction industries. <?= $this->endSection("description") ?>

<?= $this->section("content") ?>


<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-right-bottom   bg-cover bg-cons1  ">
    <div class=" mobile-header-transparent">
        <div class="banner-space"></div>
        <div class=" mx-auto h-full big-screen">


            <div class=" py-16 md:py-0   w-full h-auto  md:h-[550px]">


                <!-- inner banner -->
                <div class=" inner-banner ">
                    <div class=" first-div ">
                        <h1 class="h1">
                            Drive Cost Efficiency & Enhance Productivity with Microsoft Dynamics 365 – ISV solution for
                            <span class="span ">Construction Verticals</span>
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
                <img src="<?php echo base_url() ?>/images/construction/dynamics-365-construction-industry.svg" alt="">
            </div>
            <div class="content-section">
                <h2>Strengthen the Foundation of Your Business with <span class="text-d-yellow">Microsoft Dynamics 365 – ISV solutions for Construction.</span></h2>
                <div class="sub-content">
                    <p class="">
                        The construction sector has experienced an unparalleled surge in recent decades, propelled by global urbanization. While automation and digitization address certain industry challenges, only a few software solutions provide a harmonious 360⁰ fit for construction's diverse demands.
                    </p>
                    <p>Microsoft Dynamics 365 for Construction Industries is an advanced, cloud-based solution designed to tackle industry-specific challenges. Dynamic Netsoft's Construction and Bid Management suite offers a comprehensive solution, encompassing bid creation, cost estimation, contract negotiation, and clear agreements, that promotes transparency, minimizes risks, and enhances stakeholder communication, elevating project execution and proficiency.</p>
                    <div class="flex gap-x-4 pt-4">


                        <div>
                            <button @click="openFormDownload('<?= uri_string() ?>')" class=" btn btn-yellow">Download Brochure <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
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
    <div class="max-w-container py-16  ">
        <div class="space-y-3 px-6 lg:px-0">
            <h3 class=" text-xl font-semibold text-center">Discover the Benefits of Microsoft ERP for the Construction Industry</h3>
            <p class=" md:w-1/2 text-center mx-auto">Microsoft’s ERP – ISV solutions for Construction provide robust strategic planning tool that offers numerous
                benefits to drive your business toward remarkable growth. These advantages include:</p>
        </div>
        <div class="px-6 lg:px-0">
            <div class="md:w-3/4 mx-auto ">
                <div class=" relative px-6 md:px-0">
                    <div class="absolute top-[60%] z-40 flex justify-between w-full left-0 ">


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
                    <div class="h-24"></div>
                    <div class="owl-carousel owl-theme owl-dynamic">

                        <div class=" owl-dynamic-child ">

                            <div class="bg-secondary-dark owl-dynamic-inner">
                                <div class=" owl-dynamic-inner-2 ">
                                    <?= $this->include('layouts/half-circle') ?>
                                    <img src="<?php echo base_url() ?>/images/construction/enhanced-project.svg" alt="">

                                </div>
                                <div class="h-10"></div>
                                <p>Enhanced project efficiency with optimized management</p>
                            </div>
                        </div>

                        <div class=" owl-dynamic-child ">

                            <div class="bg-secondary owl-dynamic-inner">
                                <div class=" owl-dynamic-inner-2 ">
                                    <?= $this->include('layouts/half-circle') ?>
                                    <img src="<?php echo base_url() ?>/images/construction/superior-financial.svg" alt="">

                                </div>
                                <div class="h-10"></div>
                                <p>Superior financial control and real-time insights</p>
                            </div>
                        </div>

                        <div class=" owl-dynamic-child ">

                            <div class="bg-secondary-dark owl-dynamic-inner">
                                <div class=" owl-dynamic-inner-2 ">
                                    <?= $this->include('layouts/half-circle') ?>
                                    <img src="<?php echo base_url() ?>/images/construction/efficient-resource.svg" alt="">

                                </div>
                                <div class="h-10"></div>
                                <p>Efficient resource allocation for optimal performance</p>
                            </div>
                        </div>

                        <div class=" owl-dynamic-child ">

                            <div class="bg-secondary owl-dynamic-inner">
                                <div class=" owl-dynamic-inner-2 ">
                                    <?= $this->include('layouts/half-circle') ?>
                                    <img src="<?php echo base_url() ?>/images/construction/centralized-data.svg" alt="">

                                </div>
                                <div class="h-10"></div>
                                <p>Centralized data management, reducing duplication</p>
                            </div>
                        </div>





                        <div class=" owl-dynamic-child ">
                            <div class="bg-secondary-dark owl-dynamic-inner">
                                <div class=" owl-dynamic-inner-2 ">
                                    <?= $this->include('layouts/half-circle') ?>
                                    <img src="<?php echo base_url() ?>/images/construction/streamlined-bid.svg" alt="">

                                </div>
                                <div class="h-10"></div>
                                <p>Streamlined bid and contract administration</p>
                            </div>
                        </div>

                        <div class=" owl-dynamic-child ">
                            <div class="bg-secondary owl-dynamic-inner">
                                <div class=" owl-dynamic-inner-2 ">
                                    <?= $this->include('layouts/half-circle') ?>
                                    <img src="<?php echo base_url() ?>/images/construction/automated-workflows.svg" alt="">

                                </div>
                                <div class="h-10"></div>
                                <p>Automated workflows for time-saving precision</p>
                            </div>
                        </div>

                        <div class=" owl-dynamic-child ">
                            <div class="bg-secondary-dark owl-dynamic-inner">
                                <div class=" owl-dynamic-inner-2 ">
                                    <?= $this->include('layouts/half-circle') ?>
                                    <img src="<?php echo base_url() ?>/images/construction/enhanced-collaboration.svg" alt="">

                                </div>
                                <div class="h-10"></div>
                                <p>Enhanced collaboration for seamless communication</p>
                            </div>
                        </div>


                        <div class=" owl-dynamic-child ">
                            <div class="bg-secondary owl-dynamic-inner">
                                <div class=" owl-dynamic-inner-2 ">
                                    <?= $this->include('layouts/half-circle') ?>
                                    <img src="<?php echo base_url() ?>/images/construction/real-time-analytics.svg" alt="">

                                </div>
                                <div class="h-10"></div>
                                <p>Real-time analytics and informed decision-making</p>
                            </div>
                        </div>

                        <div class=" owl-dynamic-child ">
                            <div class="bg-secondary-dark owl-dynamic-inner">
                                <div class=" owl-dynamic-inner-2 ">
                                    <?= $this->include('layouts/half-circle') ?>
                                    <img src="<?php echo base_url() ?>/images/construction/compliance.svg" alt="">

                                </div>
                                <div class="h-10"></div>
                                <p>Compliance adherence and regulatory alignment</p>
                            </div>
                        </div>

                        <div class=" owl-dynamic-child ">
                            <div class="bg-secondary owl-dynamic-inner">
                                <div class=" owl-dynamic-inner-2 ">
                                    <?= $this->include('layouts/half-circle') ?>
                                    <img src="<?php echo base_url() ?>/images/construction/scalability.svg" alt="">

                                </div>
                                <div class="h-10"></div>
                                <p>Scalability to support growth and prosperity</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--section 2 ends-->

<!-- section -3 -->
<div class="  bg-cons2 bg-cover">
    <div class=" max-w-container space-y-8 py-16 big-screen">
        <div class="flex">
            <div class="  w-full lg:w-2/5 space-y-8 text-center lg:text-left">
                <div>
                    <h3 class=" text-xl font-semibold">Lay the Foundation of Success with
                    </h3>
                    <div class=" text-3xl font-bold">
                        Microsoft Dynamics 365 for the
                        Construction Industry
                    </div>
                </div>
                <p>A Vision for Innovation, to Build a Better Future!!!</p>

                <div class=" inline-flex">
                    <a class="btn btn-primary" href="<?php echo base_url() ?>/contact">
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

<!-- partner -->

<div class=" flex bg-secondary ">
    <div class="flex  w-full">
        <div class=" hidden lg:block w-2/5 grow  bg-cons3 bg-cover rounded-tr-3xl tv:rounded-3xl"></div>
        <div class="p-16 w-full lg:w-[60%] space-y-8">

            <h2 class=" heading-1">Why Choose Dynamic Netsoft as Your Dynamics ERP Partner for Construction</h2>
            <div class="space-y-4 w-5/6">

                <ul class=" list-disc text-sm space-y-2 ml-6">
                    <li>Dynamic Netsoft has a track record of successful ERP implementations and a team of skilled professionals.</li>
                    <li>We specialize in ERP solutions for various industries, such as real estate, construction, retail, and financial service, ensuring tailored and effective solutions.</li>
                    <li>We provide comprehensive training and ongoing support to ensure your team's proficiency in using the ERP system.</li>
                    <li>Dynamic Netsoft offers competitive pricing and cost-effective ERP solutions.</li>
                    <li>Positive testimonials and reviews from satisfied clients speak for our commitment to customer success.</li>
                    <li>We stay abreast of the latest ERP trends and technologies, providing the best ERP for construction, to stay ahead in the market.</li>
                </ul>


            </div>
            <div class="flex">
                <a href="<?php echo base_url() ?>/contact" class="btn btn-primary">
                    Talk to Our Expert <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

</div>
<!-- partner ends -->


<!-- succsess stories -->
<?= $this->include('/layouts/success') ?>




<?= $this->section("faq") ?><div class="max-w-container mx-auto py-16">
    <div class=" space-y-8 max-w-4xl mx-auto px-6 lg:px-0">
        <div class=" heading-1 text-center">Frequently Asked Questions</div>
        <div class=" flex flex-col divide-y " x-data="{selected:1}">
            <div>
                <div class="faq" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Can Microsoft Dynamics 365 ERP for construction integrate with existing systems?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 1 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class=""> Yes, Microsoft Dynamics 365 for construction integrates with various third-party applications with API integration capabilities.
                        </p>

                    </div>
                </div>
            </div>


            <div>
                <div class=" faq" @click="selected !== 2 ? selected = 2 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Is Microsoft Dynamics 365 for construction scalable for growing construction businesses?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 2 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Absolutely, Microsoft Dynamics 365 ISV solutions for construction is scalable, accommodating the expansion and evolving needs of construction enterprises.
                        </p>

                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 3 ? selected = 3 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">How does Microsoft Dynamics 365 for the construction industry ensure data security?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 3 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Microsoft employs industry-leading security measures to safeguard data in Dynamics 365 ERP, including encryption, access controls, and compliance with data protection standards.</p>

                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 4 ? selected = 4 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Does ERP for construction on Microsoft Dynamics 365 provide analytics for performance evaluation?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 4 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Indeed, Microsoft Dynamics 365 for construction offers sophisticated analytics, empowering construction companies to assess project performance, identify trends, and make data-driven decisions.</p>


                    </div>
                </div>
            </div>


            <div>
                <div class="faq" @click="selected !== 5 ? selected = 5 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">How can Microsoft Dynamics ERP for construction help in financial management for construction businesses?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 4 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container4" x-bind:style="selected == 5 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Microsoft Dynamics 365 ERP for construction streamlines financial processes, including billing, invoicing, and accounts payable/receivable, ensuring accurate financial management and reporting.</p>


                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<div class=" h-24">
</div><?= $this->endSection("faq") ?>

<?= $this->endSection() ?>