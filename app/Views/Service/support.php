<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Microsoft Dynamics 365 F&O Support Services<?= $this->endSection("title") ?>
<?= $this->section("description") ?>: Microsoft Dynamics 365 Support Services That’s Impactful.<?= $this->endSection("description") ?>

<?= $this->section("content") ?>


<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-right-bottom   bg-cover bg-support-banner  ">
    <div class="banner-space"></div>
    <div class="max-w-container mx-auto h-full big-screen">


        <div class=" py-16 md:py-0   w-full h-auto  md:h-[500px]">


            <!-- inner banner -->
            <div class=" inner-banner ">
                <div class=" first-div ">
                    <h1 class="h1 flex flex-col">
                        Shaping the Future of Your Business with Our
                        <span class="span ">Microsoft Dynamics 365 F&O Support Services</span>
                    </h1>
                    <!-- <div class=" text-base md:text-lg font-semibold">
                        Level up your digital transformation process
                    </div> -->

                    <div class="btn-div">
                        <?= $this->include('/layouts/get-touch') ?>
                    </div>

                </div>
            </div>

        </div>
    </div>
</header>
<!--banner /-->





<!-- section2 -->
<div class=" bg-secondary">
    <div class="inner-section-2">
        <div class="h2-div">
            <h2>Microsoft Dynamics 365 Support Services That’s Impactful.</h2>
        </div>

        <div class="content-div ">
            <p class="!text-white md:!text-black">Dynamic Netsoft’s Microsoft Dynamics 365 F&O support team is dedicated to providing comprehensive assistance and guidance for all your technology and ERP needs. With years of experience in the field, we have established ourselves as a trusted company specializing in various aspects.</p>

        </div>
    </div>
</div>
<!-- section2 ends -->

<!-- section 3 -->
<div class=" md:bg-secondary bg-white pb-16" x-data="{feature: 1}">
    <div class="max-w-container ">

        <div class="inner-section-box">
            <div class="tab h-[420px] overflow-y-auto">
                <div class="item" @click="feature = 1" :class="feature === 1 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/service/support/microsoft-dynamics.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 1 ? 'active' : 'default'">Microsoft Dynamics 365 Implementation</div>
                    </div>
                </div>


                <div class="item" @click="feature = 2" :class="feature === 2 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/service/support/re-engineering.svg" alt="">

                    </div>
                    <div class="text">
                        <div class="" :class="feature === 2 ? 'active' : 'default'">Reengineering</div>
                    </div>
                </div>

                <div class="item" @click="feature = 3" :class="feature === 3 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/service/support/business-process.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 3 ? 'active' : 'default'">Business Process Management</div>
                    </div>
                </div>

                <div class="item" @click="feature = 4" :class="feature === 4 ? 'active' : ''">
                    <div class=" circle"> <img src="<?php echo base_url() ?>/images/service/support/out-sourcing.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 4 ? 'active' : 'default'">Outsourcing</div>
                    </div>
                </div>

                <div class="item" @click="feature = 5" :class="feature === 5 ? 'active' : ''">
                    <div class=" circle"> <img src="<?php echo base_url() ?>/images/service/support/amc.svg" alt=""></div>
                    <div class="text">
                        <div :class="feature === 5 ? 'active' : 'default'">AMC</div>
                    </div>
                </div>






            </div>
            <div class="content  ">
                <!-- content 1  -->

                <div class="mobile-tab " @click="feature = 1">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Microsoft Dynamics 365 Implementation</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 1">
                    <div class=" heading-1 hidden md:block ">Microsoft Dynamics 365 Implementation</div>
                    <p class="text-white">With over a decade of experience, our Microsoft Dynamics 365 F&O implementation team has gained a trusted reputation for its unwavering reliability and service reliability in International markets. Our domain expertise encompasses a distinguished cadre of specialists proficient in project management, implementation, customization, data migration, upgrades, and comprehensive user adoption and training.</p>

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
                        <div class=" heading-1 !text-white">Reengineering</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class=" desktop-content" x-show="feature=== 2">
                    <div class=" heading-1 hidden md:block ">Reengineering</div>
                    <p class="text-white">At Dynamic Netsoft, our Microsoft Dynamics 365 F&O support team begins with the process definitions from scratch, employing careful analysis and planning to identify the best outcomes for organizational productivity. Whether it's optimizing operational functions, streamlining the supply chain, or enhancing Finance & Operations and HR, our expert consultants offer comprehensive guidance across the entire enterprise. We also go the extra mile by designing customer experience strategies that extend beyond the confines of the organization, empowering companies to become highly reliable and trusted business partners. </p>

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
                        <div class=" heading-1 !text-white">Business Process Management</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 3">
                    <div class=" heading-1 hidden md:block ">Business Process Management</div>
                    <p class="text-white">Organizations often struggle with the daunting task of aligning processes to meet modern demands. Challenges such as limited resources, lack of benchmark templates, and outdated perspectives on legacy systems compound the complexity. Our Microsoft Dynamics 365 F&O Support team offers expertise in designing and implementing strategies like "Out to in" and "Value chain management" to address these requirements. </p>

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
                        <div class=" heading-1 !text-white">Outsourcing</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 4">
                    <div class=" heading-1 hidden md:block ">Outsourcing</div>
                    <p class="text-white">We offer comprehensive consultation and hiring services, delivering specialized knowledge for ERP implementations, particularly in Microsoft Dynamics 365. Our meticulously chosen and experienced Microsoft Dynamics 365 F&O experts provide valuable support and operational capabilities. Whether it's operational functions, consultation, or customization, we have a diverse team of experts spanning various functions and technologies, ready to assist your organization in achieving its objectives. </p>

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
                            AMC
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 5">
                    <div class=" heading-1 hidden md:block ">
                        AMC
                    </div>
                    <p class="text-white">Empowering organizations with reliable and competitive support for their ERP implementation, our AMC caters to those in need of extended assistance. Tailoring our services to customer requirements, we offer periodic contracts based on specific timeframes and task-oriented needs. It encompasses a wide array of functions, including third-party integration and customization, meeting the demands of classic implementations. Recognizing the needs of our global clients, operating across different time zones or those with critical enterprise functions, we provide the flexibility of 24/7 support to ensure uninterrupted assistance.</p>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>






            </div>
        </div>

    </div>
</div>
<!-- section -3 ends -->

<!-- section 4 -->
<div class=" max-w-container space-y-8 py-16 big-screen">
    <div>
        <h3 class="heading-1 text-center w-4/6 mx-auto">
            The Highlights of Our Microsoft Dynamics 365 F&O Support Practice
        </h3>
        <!-- <p class="text-center">Our Real Estate ERP features offer a multitude of benefits that empower businesses to thrive and succeed in the competitive industry:</p> -->

    </div>
    <div class=" flex gap-10">
        <div class=" w-1/2 flex">
            <div class="half-icon-box ">
                <img src="<?php echo base_url() ?>/images/service/support/help-desk.svg" alt="">
            </div>
            <div class=" curve-div">
                <div class="title">
                    Help Desk Support
                </div>
                <p>Efficiently submit your issues and easily track their progress.</p>
            </div>
        </div>

        <div class=" w-1/2 flex">
            <div class="half-icon-box ">
                <img src="<?php echo base_url() ?>/images/service/support/availability.svg" alt="">
            </div>
            <div class=" curve-div !bg-secondary">
                <div class="title">24/7 Availability</div>
                <p>We provide support around the clock, irrespective of your location or time zone.</p>
            </div>
        </div>


    </div>


    <div class=" flex gap-10">
        <div class=" w-1/2 flex">
            <div class="half-icon-box  "> <img src="<?php echo base_url() ?>/images/service/support/urgent-issue.svg" alt=""></div>
            <div class=" curve-div !bg-secondary">
                <div class="title">Urgent Issue Resolution</div>
                <p>Swift response time for urgent matters, ensuring prompt resolution.</p>
            </div>
        </div>

        <div class=" w-1/2 flex">
            <div class="half-icon-box ">
                <img src="<?php echo base_url() ?>/images/service/support/flexible-payment.svg" alt="">
            </div>
            <div class=" curve-div ">
                <div class="title">Flexible Payment Options</div>
                <p>Choose between pay-as-you-go or prepaid packs, empowering you to decide what suits your organization best.</p>
            </div>
        </div>


    </div>





</div>
<!-- section 4 -->


<!-- partner -->

<div class=" flex bg-secondary ">
    <div class="flex  big-screen">
        <div class=" hidden lg:block w-2/5 grow  bg-support-partner bg-cover rounded-tr-3xl tv:rounded-3xl"></div>
        <div class="p-16 w-full lg:w-[60%] space-y-8">

            <h2 class=" heading-1">Why Our Microsoft Dynamics 365 Support System is Your Best Choice??</h2>
            <div class="space-y-4 w-5/6">

                <ul class=" list-disc text-sm space-y-2 ml-6">
                    <li><b>Seasoned Professionals:</b> Experienced and certified professionals.</li>
                    <li><b>Global Reach:</b> 24/7 support catering to global organizations with operations worldwide.</li>
                    <li><b>Extensive Expertise:</b> In-depth understanding of products, industries, and solutions.</li>
                    <li><b>Streamlined Approach:</b> Methodical approach for enhanced collaboration and delivery.</li>
                    <li><b>Reputation:</b> Acknowledged as a trusted and reliable industry leader for over a decade.</li>
                    <li><b>Tailored Solutions:</b> Customized approaches aligned with specific organizational requirements.</li>
                    <li><b>Reliable Support and Maintenance:</b> AMC contracts for extended ERP assistance and dependable maintenance.</li>

                </ul>

                <p>At Dynamic Netsoft, we thrive on tackling limitations head-on and uncovering boundless opportunities for every business we partner with. Join us today and step into a world where limitations no longer hold you back.</p>

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
<?= $this->include('/layouts/success') ?>





<?= $this->endSection() ?>