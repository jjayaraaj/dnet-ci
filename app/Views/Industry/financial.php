<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Microsoft Dynamics 365 for financial services<?= $this->endSection("title") ?>
<?= $this->section("description") ?>Struggling with financial visibility & complexity? Discover how Microsoft Dynamics 365 for financial services empower you to gain control and maximize profitability<?= $this->endSection("description") ?>

<?= $this->section("content") ?>


<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-right-bottom   bg-cover bg-realestatepro  ">
    <div class="banner-space"></div>
    <div class="max-w-container mx-auto h-full big-screen">


        <div class=" py-16 md:py-0   w-full h-auto  md:h-[500px]">


            <!-- inner banner -->
            <div class=" inner-banner ">
                <div class=" first-div ">
                    <h1 class="h1">
                        Amplify Your Financial Capabilities with Microsoft Dynamics 365
                        <span class="span ">Financial Services</span>
                    </h1>
                    <div class=" text-base md:text-lg font-semibold md:w-2/3">
                        Shape Your Financial Legacy with Our Precisely Engineered Software! Request a Free Demo Today!!!
                    </div>

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
<div class=" md:bg-primary md:py-16">
    <div class=" max-w-container big-screen">
        <div class=" inner-section-blue">
            <div class="img-section hidden md:block">

            </div>
            <div class="content-section">
                <h2>Streamline Your Financial Decision-making with <span class="text-d-yellow">with the Best ERP for Financial Services</span></h2>
                <div class="sub-content">
                    <p class="">
                        The financial sector operates within a dynamic web of task-driven challenges. Vast amounts of business protocols, complex regulatory frameworks, and inter-departmental processes need solutions . Making informed decisions, and navigating risk management, compliance, and market shifts demand precise focus amid market volatility.</p>
                    <p>Dynamic Netsoft empowers organizations, enhancing financial transparency and profitability with the best ERP Software for Financial Services. By optimizing cost, accounting, expenses, and cash flow processes, our integration cultivates accuracy, simplifies intricacy, and reduces costs. Our global proficiency unveils unique attributes: Global entry forms, Exchange rate integration, Localization, Bank reconciliation, robust audit facilities, and specialized loan management functionalities. Our Microsoft Dynamics 365 solutions for financial services provide immediate insights and comprehensive reports for maximized returns and operational efficiency.
                    </p>
                    <div class="flex gap-x-4 pt-4">


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

<!-- section 1 -->
<div class=" md:bg-primary-light md:py-16">
    <div class=" max-w-container big-screen">
        <div class=" inner-section-blue flex-row-reverse">
            <div class="img-section hidden md:block">

            </div>
            <div class="content-section">
                <h2 class=" !bg-transparent">Achieve Precision with Our ISV Solution for <span class="text-d-yellow">Financial Services</span></h2>
                <div class="sub-content">
                    <p class="">
                        Tailored to the unique intricacies of financial management, our solution offers capabilities that give businesses real-time visibility into investment portfolios, instant insights, meticulous financial forecasting, and cash flow tracking. </p>
                    <p>Distinguished by real-time monitoring, tailored risk assessment, and seamless integration, our Investment Portfolio Management software redefines the art of investment management. It extends its capabilities, revealing invaluable insights into Buy/Sell and Gain/Loss transactions.</p>
                    <p>Our loan management software enhances efficiency, slashes costs, ensures compliance, and fortifies security. Place your trust in our professional and precise solution for unparalleled peace of mind in your business operations.</p>
                    <div class="flex gap-x-4 pt-4">


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
        <div class="space-y-3">
            <h3 class=" text-xl font-semibold text-center">The Benefits of Financial Services ERP Yielding Precise Financial Management</h3>
            <!-- <p class=" md:w-1/2 text-center mx-auto">Microsoft’s ERP – ISV solutions for Construction provide robust strategic planning tool that offers numerous
                benefits to drive your business toward remarkable growth. These advantages include:</p> -->
        </div>
        <div>
            <div class="md:w-3/4 mx-auto ">
                <div>
                    <div class="h-24"></div>
                    <div class="owl-carousel owl-theme owl-dynamic">



                        <?php foreach ($benefits as $product) {
                        ?>
                            <div class=" owl-dynamic-child ">
                                <div class="bg-secondary-dark owl-dynamic-inner">
                                    <div class=" owl-dynamic-inner-2 "></div>
                                    <div class="h-10"></div>
                                    <p class="flex-col flex text-center"><?= $product->content; ?></p>
                                </div>
                            </div>
                        <?php
                        } ?>





                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--section 2 ends-->



<!-- section -3 -->
<div class="  bg-cloud bg-cover">
    <div class=" max-w-container space-y-8 py-16 big-screen">
        <div class="flex">
            <div class=" w-2/5 space-y-8">
                <div>
                    <h3 class=" text-xl font-semibold">Enhance Financial Efficiency and Profits with the
                    </h3>
                    <div class=" text-3xl font-bold">
                        Best ERP for financial services: Your Gateway to Growth & Success
                    </div>
                </div>
                <!-- <p>A Vision for Innovation, to Build a Better Future!!!</p> -->

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
        <h3 class="heading-1 text-center w-full mx-auto">
            Capabilities & Features of Microsoft Dynamics 365 Financial Services
        </h3>
        <!-- <p class="text-center">The tangible benefits of our modern retail POS software are;</p> -->
    </div>

    <div class=" flex gap-10">
        <div class=" w-1/2 flex">
            <div class="half-icon-box ">
                <img src="<?php echo base_url() ?>/images/realestatepro/Process-automation.svg" alt="">
            </div>
            <div class=" curve-div">
                <div class="title">Investment Parameters</div>
                <p>Our Microsoft Dynamics 365 for financial services tailor your investment strategy with parameters aligned to your goals.</p>
            </div>
        </div>

        <div class=" w-1/2 flex">
            <div class="half-icon-box ">
                <img src="<?php echo base_url() ?>/images/realestatepro/Property-hierarchy.svg" alt="">
            </div>
            <div class=" curve-div !bg-secondary">
                <div class="title">Risk Analysis</div>
                <p>Make informed decisions by analyzing potential risks and their impact.</p>
            </div>
        </div>


    </div>


    <div class=" flex gap-10">
        <div class=" w-1/2 flex">
            <div class="half-icon-box  "> <img src="<?php echo base_url() ?>/images/realestatepro/Secure-accurate.svg" alt=""></div>
            <div class=" curve-div !bg-secondary">
                <div class="title">Document Management</div>
                <p>Our Microsoft Dynamics 365 for financial services organize and access critical documents effortlessly.</p>
            </div>
        </div>

        <div class=" w-1/2 flex">
            <div class="half-icon-box "><img src="<?php echo base_url() ?>/images/realestatepro/Inquiry-management.svg" alt=""></div>
            <div class=" curve-div ">
                <div class="title">Key Performance Indicator (KPI)</div>
                <p>Track and measure financial performance against defined KPIs with our ERP for Financial Services. </p>
            </div>
        </div>


    </div>


    <div class=" flex gap-10">
        <div class=" w-1/2 flex">
            <div class="half-icon-box "><img src="<?php echo base_url() ?>/images/realestatepro/Lead-management.svg" alt=""></div>
            <div class=" curve-div">
                <div class="title">Master Level Data-Store</div>
                <p>Centralized data management ensures consistency and accuracy.</p>
            </div>
        </div>

        <div class=" w-1/2 flex">
            <div class="half-icon-box "><img src="<?php echo base_url() ?>/images/realestatepro/Utility-management.svg" alt=""></div>
            <div class=" curve-div !bg-secondary">
                <div class="title">Designated Transaction Area</div>
                <p>Easily manage financial transactions within a dedicated space.</p>
            </div>
        </div>


    </div>


    <div class=" flex gap-10">
        <div class=" w-1/2 flex">
            <div class="half-icon-box "><img src="<?php echo base_url() ?>/images/realestatepro/Pre-integrated.svg" alt=""></div>
            <div class=" curve-div !bg-secondary">
                <div class="title">Periodic Activity Analysis</div>
                <p>Gain insights into financial trends through periodic analysis. </p>
            </div>
        </div>

        <div class=" w-1/2 flex">
            <div class="half-icon-box "><img src="<?php echo base_url() ?>/images/realestatepro/Fully-integrated.svg" alt=""></div>
            <div class=" curve-div ">
                <div class="title">Periodic Market-Price Revaluation</div>
                <p>Keep valuations up-to-date with market fluctuations.</p>
            </div>
        </div>


    </div>


    <div class=" flex gap-10">
        <div class=" w-1/2 flex">
            <div class="half-icon-box "><img src="<?php echo base_url() ?>/images/realestatepro/Lead-management.svg" alt=""></div>
            <div class=" curve-div">
                <div class="title">Easy Enquiries Management</div>
                <p>Streamlined process for managing financial inquiries.</p>
            </div>
        </div>

        <div class=" w-1/2 flex">
            <div class="half-icon-box "><img src="<?php echo base_url() ?>/images/realestatepro/Utility-management.svg" alt=""></div>
            <div class=" curve-div !bg-secondary">
                <div class="title">Open Platform for Integration</div>
                <p>Our Microsoft Dynamics 365 for financial services Seamlessly integrates with existing tools and systems.</p>
            </div>
        </div>


    </div>





</div>
<!-- section 4 -->

<!-- partner -->

<div class=" flex bg-secondary ">
    <div class="flex  big-screen">
        <div class=" hidden lg:block w-2/5 grow  bg-digital bg-cover rounded-tr-3xl tv:rounded-3xl"></div>
        <div class="p-16 w-full lg:w-[60%] space-y-8">

            <h2 class=" heading-1">Why Choose Dynamic Netsoft’s ERP Software for Financial Services?</h2>
            <div class="space-y-4 w-5/6">

                <ul class=" list-disc text-sm space-y-2 ml-6">

                    <li><b>Expertise and Experience:</b> With a proven track record, Dynamic Netsoft boasts extensive experience in implementing Microsoft Dynamics 365 for financial services, ensuring a smooth and successful transition.</li>
                    <li><b>Tailored Solutions:</b> Our ERP Software for Financial Services is customized to align with your specific needs, guaranteeing optimal results that resonate with your business model.</li>
                    <li><b>Financial Skillset:</b> Specializing in financial services ERP solutions, we are equipped with the in-depth understanding required to optimize your financial processes, enhancing accuracy and efficiency.</li>
                    <li><b>Global Integration:</b> As a partner, we ensure that your financial systems are seamlessly integrated across global operations, facilitating smooth multi-currency transactions and compliance.</li>
                    <li><b>Client-Centric Approach:</b> We prioritize your success. Our customer-centric approach ensures you receive dedicated support, personalized solutions, and a partnership that's committed to your growth.</li>
                    <li><b>Innovative Approach:</b> We employ innovative strategies and the latest technological advancements to deliver forward-thinking solutions that keep you ahead of the curve.</li>


                </ul>


            </div>
            <button class="btn btn-primary">
                Talk to Our Expert <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
    </div>

</div>
<!-- partner ends -->


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




<?= $this->section("faq") ?><div class="max-w-container mx-auto py-16">
    <div class=" space-y-8 max-w-4xl mx-auto">
        <div class=" heading-1 text-center">Frequently Asked Questions</div>
        <div class=" flex flex-col divide-y " x-data="{selected:1}">
            <div>
                <div class="faq" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">What sets Dynamics 365 apart from earlier Microsoft Dynamics products in terms of innovations and advancements?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 1 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">A. Dynamics 365 introduces a cloud-based, modular approach, integrating ERP and CRM functionalities seamlessly. Its subscription model allows tailored solutions, real-time insights, and enhanced scalability for evolving business needs.
                        </p>

                    </div>
                </div>
            </div>


            <div>
                <div class=" faq" @click="selected !== 2 ? selected = 2 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">What are the intelligence tools available with Microsoft Dynamics 365 Financial Services?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 2 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">A. Microsoft Dynamics 365 Financial Services offers advanced intelligence tools like AI-driven insights, predictive analytics, machine learning, and Power BI integration, enabling data-driven decision-making and enhancing business performance.</p>

                    </div>
                </div>
            </div>


            <div>
                <div class=" faq" @click="selected !== 3 ? selected = 3 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">How does Microsoft Dynamics 365 ERP Software for Financial Services benefit customers?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 3 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">A. Microsoft Dynamics 365 ERP Software for Financial Services empowers customers through unified financial management, streamlined processes, real-time data insights, compliance management, risk mitigation, and enhanced decision-making. It tailors solutions to financial intricacies, fostering efficiency, accuracy, and strategic growth.</p>

                    </div>
                </div>
            </div>


            <div>
                <div class=" faq" @click="selected !== 4 ? selected = 4 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">How many users can Dynamics 365 support?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 4 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Dynamics 365 offers flexible licensing options to accommodate varying user needs. It can support a wide range of users, from small teams to large enterprises, ensuring scalability and tailored solutions for different organizational sizes.</p>

                    </div>
                </div>
            </div>


            <div>
                <div class=" faq" @click="selected !== 5 ? selected = 5 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">How much does Microsoft Dynamics 365 Finance Services cost?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 5 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container5" x-bind:style="selected == 5 ? 'max-height: ' + $refs.container5.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">The cost of Microsoft Dynamics 365 Finance Services varies based on factors like the chosen modules, user types, customization, and deployment options. Dynamic pricing models offer flexibility to select the most suitable plan for your organization's requirements and budget.</p>

                    </div>
                </div>
            </div>





        </div>

    </div>

</div>
<div class=" h-24">
</div><?= $this->endSection("faq") ?>

<?= $this->endSection() ?>