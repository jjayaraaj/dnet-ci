<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Microsoft Dynamics 365 F&O Upgrade Services - DNETSOFT<?= $this->endSection("title") ?>
<?= $this->section("description") ?>Are the limitations in Dynamics AX 2012 holding you back? Explore the new features of Dynamics 365 with our F&O Upgrade Services to enhance business operations capabilities. <?= $this->endSection("description") ?>

<?= $this->section("content") ?>


<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-right-bottom   bg-cover bg-upgrade-banner  ">
    <div class="banner-space"></div>
    <div class="max-w-container mx-auto h-full big-screen">


        <div class=" py-16 md:py-0   w-full h-auto  md:h-[500px]">


            <!-- inner banner -->
            <div class=" inner-banner ">
                <div class=" first-div ">
                    <h1 class="h1">
                        Embrace the Technological Resurgence with Dynamic Netsoft’s Dynamics 365
                        <span class="span ">Finance & Operations Upgrade Services</span>
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



<!-- section2 -->
<div class=" bg-white">
    <div class="inner-section-2">
        <div class="h2-div">
            <h2>Why Dynamics 365 Upgradation is Crucial for Your Business?</h2>
        </div>

        <div class="content-div ">
            <p class="!text-white md:!text-black">Comparative analysis of Dynamics AX and Dynamics 365 functionalities, for evident and practical benefits and significant of Dynamics 365 upgradation benefits.</p>

        </div>
    </div>
</div>
<!-- section2 ends -->

<div class=" max-w-container pb-16">
    <div class="flex justify-center gap-10">
        <div class=" w-1/4 bg-secondary">
            <div class="h-14 bg-primary-light flex justify-center items-center text-white">Features</div>
            <ul class="p-6 space-y-3 list-disc ml-4">
                <li>Deployment</li>
                <li>Capabilities</li>
                <li>Licensing</li>
                <li>Integration capabilities</li>
                <li>Customizations</li>
                <li>Upgrade process</li>
                <li>Testing and Analytics</li>
                <li>Infrastructure</li>
            </ul>
        </div>

        <div class="  bg-secondary">
            <div class="h-14 bg-primary-light flex justify-center items-center text-white">Dynamics AX</div>
            <ul class="p-6 space-y-3 list-disc ml-4">
                <li>Desktop-based application</li>
                <li>Limited modern and intelligent capabilities</li>
                <li>Traditional models</li>
                <li>Limited </li>
                <li>Overlaying method for customizations</li>
                <li>Complicated </li>
                <li>Manual testing and limited analytics support</li>
                <li>physical infrastructure</li>
            </ul>
        </div>


        <div class="  bg-secondary">
            <div class="h-14 bg-primary-light flex justify-center items-center text-white">Dynamics 365</div>
            <ul class="p-6 space-y-3 list-disc ml-4">
                <li>Web and cloud-based solution</li>
                <li>wide range of modern and intelligent features</li>
                <li>Subscription-based </li>
                <li>Seamless integration with various applications </li>
                <li>Extensions via LCS for customizations</li>
                <li>Smaller and easy upgrades </li>
                <li>Built-in testing tools and analytics support</li>
                <li>Hosted in Azure</li>
            </ul>
        </div>
    </div>
</div>

<div class="max-w-container text-center pb-16">
    <p>Upgrading to Dynamics 365 guarantees access to a robust and future-ready solution. Invest now in this business transformation to experience a world of business possibilities!</p>

</div>


<!-- section2 -->
<div class=" bg-secondary">
    <div class="inner-section-2">
        <div class="h2-div">
            <h2>Experience distinctive Advantages of Dynamics 365 Upgrades with Dynamic Netsoft</h2>
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
                        <img src="<?php echo base_url() ?>/images/service/upgrade/functional-enhancements.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 1 ? 'active' : 'default'">Functional Enhancements and Embedded BI:</div>
                    </div>
                </div>


                <div class="item" @click="feature = 2" :class="feature === 2 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/service/upgrade/improved-accessibility.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 2 ? 'active' : 'default'"> Improved Accessibility</div>
                    </div>
                </div>

                <div class="item" @click="feature = 3" :class="feature === 3 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/service/upgrade/unification-of-erp.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 3 ? 'active' : 'default'"> Unification of ERP and CRM</div>
                    </div>
                </div>

                <div class="item" @click="feature = 4" :class="feature === 4 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/service/upgrade/seamless-integration.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 4 ? 'active' : 'default'"> Seamless Integration Opportunities</div>
                    </div>
                </div>

                <div class="item" @click="feature = 5" :class="feature === 5 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/service/upgrade/real-time.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 5 ? 'active' : 'default'"> Real-time Business Intelligence</div>
                    </div>
                </div>


                <div class="item" @click="feature = 6" :class="feature === 6 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/service/upgrade/reduced-maintenance.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 6 ? 'active' : 'default'"> Reduced Maintenance</div>
                    </div>
                </div>

                <div class="item" @click="feature = 7" :class="feature === 7 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/service/upgrade/regular-updates.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 7 ? 'active' : 'default'"> Regular Updates</div>
                    </div>
                </div>

                <div class="item" @click="feature = 8" :class="feature === 8 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/service/upgrade/modern-day.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 8 ? 'active' : 'default'"> Modern-day Marketplace Demands</div>
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
                        <div class=" heading-1 !text-white"> Functional Enhancements and Embedded BI</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 1">
                    <div class=" heading-1 hidden md:block "> Functional Enhancements and Embedded BI</div>
                    <ul class=" list-inside list-disc">
                        <li>Unlock new features and capabilities with our Microsoft Dynamics 365 Finance & Operations upgrade services.</li>
                        <li>Leverage embedded Business Intelligence (BI) tools.</li>
                    </ul>
                    <button class=" btn btn-yellow">Book a Demo</button>
                </div>


                <!-- content 2  -->

                <div class="mobile-tab " @click="feature = 2">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white"> Improved Accessibility</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class=" desktop-content" x-show="feature=== 2">
                    <div class=" heading-1 hidden md:block "> Improved Accessibility</div>
                    <ul class=" list-inside list-disc">
                        <li>Dynamics 365 upgrades allow seamless accessibility on various devices, platforms, and browsers.</li>
                        <li>Native HTML5 browser-based user interface.</li>
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
                        <div class=" heading-1 !text-white"> Unification of ERP and CRM</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 3">
                    <div class=" heading-1 hidden md:block "> Unification of ERP and CRM</div>
                    <ul class=" list-inside list-disc">
                        <li>Integrate ERP, CRM, BI, and IoT under a common data model.</li>
                        <li>Simplify data management and streamline operations.</li>

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
                        <div class=" heading-1 !text-white"> Seamless Integration Opportunities</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 4">
                    <div class=" heading-1 hidden md:block "> Seamless Integration Opportunities</div>
                    <ul class=" list-inside list-disc">
                        <li>Our Dynamics 365 Upgrade service team enables smooth integration between different applications.</li>
                        <li>Enhance collaboration across sales, customer service, field service, operations, financials, marketing, and project service automation.</li>

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
                            Real-time Business Intelligence:
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 5">
                    <div class=" heading-1 hidden md:block ">
                        Real-time Business Intelligence:
                    </div>
                    <ul class=" list-inside list-disc">
                        <li>Access up-to-the-minute insights for informed decision-making.</li>
                        <li>Leverage in-memory BI solutions and visualization tools like Power BI.</li>

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
                            Reduced Maintenance
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 6">
                    <div class=" heading-1 hidden md:block ">
                        Reduced Maintenance
                    </div>
                    <ul class=" list-inside list-disc">
                        <li>Eliminate on-premise servers and system maintenance with our Microsoft Dynamics 365 Upgrade services.</li>
                        <li>Microsoft takes responsibility for monitoring and updating the platform and applications.</li>

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
                            Regular Updates
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 7">
                    <div class=" heading-1 hidden md:block ">
                        Regular Updates
                    </div>
                    <ul class=" list-inside list-disc">
                        <li>Stay up to date with platform updates every 3 months.</li>
                        <li>Receive application updates every 6 months.</li>

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
                            Modern-day Marketplace Demands
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 8">
                    <div class=" heading-1 hidden md:block ">
                        Modern-day Marketplace Demands
                    </div>
                    <ul class=" list-inside list-disc">
                        <li>Meet the evolving demands of the marketplace with Dynamic Netsoft’s Microsoft Dynamics Upgrades.</li>
                        <li>Optimize functional capabilities and feature enhancements.</li>

                    </ul>
                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>



            </div>







        </div>
    </div>

</div>
</div>
<!-- section -3 ends -->

<!-- section -3 -->
<div class="  bg-upgrade-connect bg-cover">
    <div class=" max-w-container space-y-8 py-16 big-screen">
        <div class="flex">
            <div class=" w-2/5 space-y-8">
                <div>
                    <h3 class=" text-xl font-semibold">Unlock the Limitless Potential of Your Business with Our
                    </h3>
                    <div class=" text-3xl font-bold">
                        Microsoft Dynamics 365 Upgrade Services
                    </div>
                </div>
                <p>Embrace the change to Reinvent Success! Partner with the best! Sign-up TODAY!</p>

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




<!-- partner -->

<div class=" flex bg-secondary ">
    <div class="flex  w-full big-screen">
        <div class=" hidden lg:block w-2/5 grow bg-upgrade-partner bg-cover rounded-tr-3xl tv:rounded-3xl"></div>
        <div class="p-16 w-full lg:w-[60%] space-y-8">

            <h2 class=" heading-1">Why Dynamic Netsoft as Your Dynamics 365 Upgradation Partner?</h2>
            <div class="space-y-4 w-5/6">

                <ul class=" list-disc text-sm space-y-2 ml-6">
                    <li>Team of skilled professionals with deep knowledge of Dynamics 365 upgrades and benefits implementation experience.</li>
                    <li>Our Dynamics 365 Upgrade Service experts work closely with end-users to analyse specific business needs to implement the most effective processes.</li>
                    <li>Professional and guaranteed migration process, minimizing downtime and disruptions to ensure a seamless transition.</li>
                    <li>Proactive support, to address customer concerns that may arise after the transition.</li>
                    <li>Dynamics 365 Finance & Operations Upgrade Services assurance by experts to ensure timely updates, for business continuity.</li>
                    <li>Secure and seamless data migration process, ensuring data accuracy and consistency.</li>

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

                        <div class="question">What are the steps involved in the Dynamics 365 F&O upgradation process?  </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 1 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <ul class=" list-decimal list-inside space-y-3">
                            <li> Assess the current Dynamics AX 2009/AX 2012 environment, including data size, customizations, integrations, and third-party solutions.</li>
                            <li>Plan migration strategy, considering options like the direct upgrade, phased approach, or re-implementation.</li>
                            <li>Prepare data for migration.</li>
                            <li>Migrate data, conducting thorough testing to verify correctness and eliminate errors.</li>
                            <li>Migrate customizations and integrations.</li>
                            <li>User training.</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div>
                <div class=" faq" @click="selected !== 2 ? selected = 2 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Why upgrade to Dynamics 365?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 2 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Dynamics 365 upgrades offers enhanced support, regular updates, advanced features, improved security, better scalability, and lower cost of ownership. </p>

                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 3 ? selected = 3 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">What is included in Dynamics 365 Finance & Operations?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 3 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">When choosing a Dynamics 365 Finance & Operations implementation partner, consider their expertise, track record, certifications, industry experience, and ability to understand your unique business needs. Evaluate their support, customization capabilities, and client testimonials for informed decision-making.</p>

                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 4 ? selected = 4 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">How to upgrade Dynamics AX 2009/AX 2012 to D365 F&O?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 4 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Dynamics 365 Finance & Operations Upgrade is a systematic approach that involves steps such as assessing the current environment, planning the migration strategy, preparing data for migration, migrating data, migrating customizations and integrations, and training users. The specialists at Dynamic Netsoft follow best practices to ensure a smooth and successful upgrade process.</p>


                    </div>
                </div>
            </div>




        </div>

    </div>

</div>
<div class=" h-24">
</div><?= $this->endSection("faq") ?>


<?= $this->endSection() ?>