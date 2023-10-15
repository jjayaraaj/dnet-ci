<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Microsoft Dynamics Partner | D365 F&O - Dynamics NetSoft <?= $this->endSection("title") ?>
<?= $this->section("description") ?>Stuck with multiple legacy systems? Evolve with Dynamic Netsoft, a Microsoft Dynamics 365 Gold partner offering ERP & CRM solutions for Property & Construction industries.<?= $this->endSection("description") ?>
<?= $this->section("content") ?>

<!--banner-->


<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-cover bg-about-banner">
    <div class="max-w-container mx-auto h-full big-screen">
        <div class="banner-space"></div>

        <div class="  w-full  lg:h-[500px]">


            <!-- inner banner -->
            <div class=" inner-banner">
                <div class=" first div">
                    <h1 class="h1 flex flex-col">
                        <span class="display-lg text-primary  !leading-[5rem]">About Us
                    </h1>


                </div>
            </div>

        </div>
    </div>
</header>
<!--banner /-->

<!-- section-1 -->
<div class="max-w-container pt-16">
    <div class=" bg-secondary-dark p-10  lg:w-4/5 rounded-tr-[3em]">
        <div class="lg:flex  w-full items-center gap-x-10">
            <div class=" display-lg text-primary  !leading-[5rem] lg:w-1/4">WHO WE ARE?</div>
            <div class="flex-1 space-y-5">
                <p>Dynamic Netsoft Technologies stands at the forefront of excellence as a leading Microsoft Dynamics 365 implementation and ERP consulting services firm. With a decade-long legacy, we've been persistent in our mission to refine business processes and facilitate operational automation through our specialized expertise and innovative solutions.</p>
                <p>Presently, we are the most preferred partner for Property and construction enterprises, guiding them through a holistic digital transformation. Our global team of seasoned experts has consistently elevated process management, boosting productivity, and curbing operational expenses for organizations across the globe. Our top-tier Microsoft ISV solutions, meticulously designed for industry verticals, have been awarded and recognized for their ability to address the nuanced challenges posed by demanding customers.

                </p>
            </div>

        </div>
    </div>
</div>
<!-- section-1 ends-->

<!-- section-2 -->
<div class="max-w-container pb-16">
    <div class=" bg-secondary p-10  lg:w-4/5 rounded-bl-[3em] ml-auto">
        <div class="lg:flex  w-full items-center gap-x-10">
            <div class=" lg:hidden display-lg text-primary  !leading-[5rem] lg:w-1/4">WHAT WE DO?</div>
            <div class="flex-1 space-y-5">
                <p>We are committed to enhancing the time-to-value of our clients, throughout the application life cycle. We are dedicated to technological advancements that streamline the entire application journey, ranging from installation, configuration, integration, deployment, utilization, and upgrades. Our comprehensive services, meticulously designed at Dynamic Netsoft, revolve around optimizing your solution's value, safeguarding investments, and elevating organizational productivity. Our service plans entail valuable benefits, such as access to software updates, including hotfixes, service packs, tax and regulatory updates, and major releases. Furthermore, we commit to ensuring the compatibility of our Vertical Solution with all Microsoft Dynamics AX releases, allowing our clients to align upgrades with their strategic business objectives effectively.
                </p>
            </div>
            <div class="hidden lg:block display-lg text-primary  !leading-[5rem] lg:w-1/4">WHAT WE DO?</div>
        </div>
    </div>
</div>
<!-- section-2 ends-->

<!-- section 3 -->
<div class=" bg-secondary pt-16 " x-data="{property: 1}">
    <div class=" max-w-container space-y-8 big-screen">

        <!-- dynamic -->
        <div class="flex items-end">
            <div class=" w-96 hidden lg:block  ">
                <img src="<?php echo base_url() ?>/images/about/our-vision.svg" x-show="property === 1">
                <img src="<?php echo base_url() ?>/images/about/our-mission.svg" x-show="property === 2">
            </div>
            <div class=" flex-1 space-y-8">
                <div class=" inline-flex gap-4 pl-8">
                    <button class="btn " :class="property === 1 ? 'property-active' : 'btn-primary'" @click="property = 1">
                        <h4>Our Vision</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>

                    </button>

                    <button class="btn btn-primary" @click="property = 2" :class="property === 2 ? 'property-active' : 'btn-primary'">
                        <h4>Our Mission</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>

                    </button>
                </div>

                <div class="bg-primary p-6 space-y-8 md:h-64 flex items-center rounded-tr-[4em]" x-show="property === 1">
                    <p class="text-blue-50 ">We aspire to redefine digital transformation, particularly within the Property and construction industry, by guiding our clients in adopting cutting-edge trends and best practices across Microsoft platforms and services. Our vision is clear: to be recognized worldwide as the leader in enabling and catalyzing the digital transformation of the Property and Construction Industry, setting new standards of excellence along the way.</p>


                </div>

                <div class="bg-primary p-6 space-y-8  md:h-64 flex items-center rounded-tr-[4em]" x-show="property === 2">
                    <p class="text-blue-50">Our mission at Dynamic Netsoft is to empower enterprises with exceptional operational capabilities. Our primary focus is on delivering excellence through advanced ERP/CRM solutions and next-generation SaaS services, to elevate organizational functionalities to extraordinary levels. We achieve this mission by leveraging the collective expertise of world-class professionals and adhering to the highest implementation standards. With a persistent focus on excellence, innovation, and client-centricity, we strive to be the driving force behind enterprises' journeys to achieve remarkable operational excellence, sustaining growth and success in an ever-evolving business landscape.</p>


                </div>


            </div>
        </div>

    </div>
</div>
<!-- section 3 ends`` -->


<!-- section 4 -->
<div class=" max-w-container space-y-8 py-16 big-screen">
    <h3 class="heading-1 text-center w-4/6 mx-auto">
        Our Methodology
    </h3>

    <div class=" flex flex-col lg:flex-row gap-10 px-6 lg:px-0">
        <div class=" w-full lg:w-1/2 flex">
            <div class="half-icon-box ">
                <img src="<?php echo base_url() ?>/images/about/design-phase.svg" alt="">
            </div>
            <div class=" curve-div">
                <div class="title">Diagnostic Phase</div>
                <p>This initial stage involves understanding business needs, assessing current systems, and identifying key stakeholders to pinpoint areas for improvement.</p>
            </div>
        </div>

        <div class=" w-full lg:w-1/2 flex">
            <div class="half-icon-box ">
                <img src="<?php echo base_url() ?>/images/about/analysis-phase.svg" alt="">
            </div>
            <div class=" curve-div !bg-secondary">
                <div class="title">Analysis Phase</div>
                <p>Here, we dive deeper into business requirements and create a solution plan. We also develop a project timeline, clarify roles, and estimate costs.</p>
            </div>
        </div>


    </div>


    <div class=" flex flex-col lg:flex-row gap-10 px-6 lg:px-0">
        <div class=" w-full lg:w-1/2 flex">
            <div class="half-icon-box  "> <img src="<?php echo base_url() ?>/images/about/design-phase.svg" alt=""></div>
            <div class=" curve-div !bg-secondary">
                <div class="title">Design Phase</div>
                <p>During this phase, we design the solution and document its requirements. We also plan testing, outline training needs, and identify customizations.</p>
            </div>
        </div>

        <div class=" w-full lg:w-1/2 flex">
            <div class="half-icon-box "><img src="<?php echo base_url() ?>/images/about/development-phase.svg" alt=""></div>
            <div class=" curve-div ">
                <div class="title">Development Phase</div>
                <p>Now, we build the solution and any necessary custom features. We rigorously test it to ensure it meets business requirements. </p>
            </div>
        </div>


    </div>


    <div class=" flex flex-col lg:flex-row gap-10 px-6 lg:px-0">
        <div class=" w-full lg:w-1/2 flex">
            <div class="half-icon-box "><img src="<?php echo base_url() ?>/images/about/deployment-phase.svg" alt=""></div>
            <div class=" curve-div">
                <div class="title">Deployment Phase</div>
                <p>This phase includes installing the solution, migrating data, and final testing by users. We also carry out training and complete the deployment.</p>
            </div>
        </div>

        <div class=" w-full lg:w-1/2 flex">
            <div class="half-icon-box "><img src="<?php echo base_url() ?>/images/about/operation-phase.svg" alt=""></div>
            <div class=" curve-div !bg-secondary">
                <div class="title">Operation Phase</div>
                <p>In this ongoing phase, we provide continuous support, maintenance, and improvements to keep the solution running smoothly.</p>
            </div>
        </div>


    </div>


</div>
<!-- section 4 -->


<!-- section 3 -->
<div class=" md:bg-secondary bg-white py-16" x-data="{feature: 1}">
    <div class="max-w-container ">

        <h3 class="heading-1 text-center w-4/6 mx-auto">
            Our Journey
        </h3>
        <p class="text-center py-6">Our journey at Dynamic Netsoft has been a series of deliberate and transformative phases, each marked by significant milestones and achievements.</p>


        <div class="inner-section-box lg:h-[300px] ">
            <div class="tab overflow-y-auto">
                <div class="item" @click="feature = 1" :class="feature === 1 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/about/inception.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 1 ? 'active' : 'default'">Phase 1: Inception</div>
                    </div>
                </div>


                <div class="item" @click="feature = 2" :class="feature === 2 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/about/investment.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 2 ? 'active' : 'default'">Phase 2: Investment</div>
                    </div>
                </div>

                <div class="item" @click="feature = 3" :class="feature === 3 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/about/growth.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 3 ? 'active' : 'default'">Phase 3: Growth</div>
                    </div>
                </div>

                <div class="item" @click="feature = 4" :class="feature === 4 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/about/consolidation.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 4 ? 'active' : 'default'">Phase 4: Consolidation</div>
                    </div>
                </div>

                <div class="item" @click="feature = 5" :class="feature === 5 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/about/expansion.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 5 ? 'active' : 'default'">Phase 5: Expansion</div>
                    </div>
                </div>


                <div class="item" @click="feature = 6" :class="feature === 6 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/about/aspiration.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 6 ? 'active' : 'default'">Phase 6: Aspiration</div>
                    </div>
                </div>





            </div>
            <div class="content  lg:h-[300px]">
                <!-- content 1  -->

                <div class="mobile-tab " @click="feature = 1">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Phase 1: Inception</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 1">
                    <div class=" heading-1 hidden md:block ">Phase 1: Inception</div>
                    <p class="lg:text-white">We commenced this voyage in 2011, with the opening of our R&D Centre in Chennai, India. This marked the inception of our ISV solutions, laying the foundation for what would become our hallmark of innovation.</p>


                </div>



                <!-- content 2  -->

                <div class="mobile-tab " @click="feature = 2">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Phase 2: Investment</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class=" desktop-content" x-show="feature=== 2">
                    <div class=" heading-1 hidden md:block ">Phase 2: Investment</div>
                    <p class="lg:text-white">Our horizons expanded as we ventured into Riyadh in 2013, extending our operations to the Middle East. During this phase, we welcomed key customers onboard, building vital relationships that continue to thrive.</p>


                </div>



                <!-- content 3  -->

                <div class="mobile-tab " @click="feature = 3">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Phase 3: Growth</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 3">
                    <div class=" heading-1 hidden md:block ">Phase 3: Growth</div>
                    <p class="lg:text-white">We achieved coveted milestones, including Microsoft Gold certification and CfMD recognition for our ISV products in 2015. </p>


                </div>



                <!-- content 4  -->

                <div class="mobile-tab " @click="feature = 4">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Phase 4: Consolidation</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 4">
                    <div class=" heading-1 hidden md:block ">Phase 4: Consolidation</div>
                    <p class="lg:text-white">A significant leap, as we obtained D365 certification and attained CSP T1 status in 2019. Our ISV products found a home on Microsoft App Source, making them more accessible to our global audience.</p>


                </div>


                <!-- content 5  -->

                <div class="mobile-tab " @click="feature = 5">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Phase 5: Expansion
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 5">
                    <div class=" heading-1 hidden md:block ">
                        Phase 5: Expansion
                    </div>
                    <p class="lg:text-white">Our journey culminated in global recognition as a Microsoft One Commercial Partner in 2020. Our ISV products achieved MS co-sell readiness, reflecting our commitment to excellence and innovation.</p>


                </div>



                <!-- content 6  -->

                <div class="mobile-tab " @click="feature = 6">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Phase 6: Aspiration
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 6">
                    <div class=" heading-1 hidden md:block ">
                        Phase 6: Aspiration
                    </div>
                    <p class="lg:text-white">We continue to evolve, now pioneering the development of new SaaS products for the Property Sector, utilizing a subscription-based model. This phase represents our unwavering dedication to meeting evolving market demands and driving industry transformation.</p>


                </div>



                <!-- content 7  -->

                <div class="mobile-tab " @click="feature = 7">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Agreement Execution Function
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 7">
                    <div class=" heading-1 hidden md:block ">
                        Agreement Execution Function
                    </div>
                    <ul>
                        <li>Our software for Property Leasing on Dynamics 365 effortlessly generates invoices periodically and efficiently manages payments receivables.</li>
                        <li>Monthly unearned and accrued revenue calculation, with accuracy and precision, on a straight-line basis. </li>
                        <li>Allows you to view revenue based on the multiple components that the agreement comprises, facilitating a smooth revenue generation process.</li>
                        <li>Flexibility to renew agreements with modified terms and conditions for a defined period ensuring a smooth transition.</li>
                        <li>Close an agreement as per the mutually agreed upon terms and dates, with additional charges levied once that date is crossed.</li>
                        <li>Post invoices for recovery claims on furniture or any other repairs or damages that may have been incurred during the agreement.</li>
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
                            Rent Appraisal
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 8">
                    <div class=" heading-1 hidden md:block ">
                        Rent Appraisal
                    </div>
                    <ul>
                        <li>periodically appraise the rent and associated components to stay aligned with the ever-changing market conditions.</li>
                        <li>Our Property Lease Management software also maintains a comprehensive history of rent appraisals, facilitating a better understanding of market trends.</li>
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
                            Analytics
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 9">
                    <div class=" heading-1 hidden md:block ">
                        Analytics
                    </div>
                    <ul>
                        <li>Our Property Leasing Management Solution on Microsoft Dynamics features a range of analytics and reporting modules that enable you to customize reports.</li>
                        <li>Offers aging analyses of tenants, with the ability to analyze multiple levels of data, facilitating better decision-making processes.</li>
                        <li>Allows access to historical data on accounts receivable and unearned revenue, including as-of records, facilitating the financial performance of your properties.</li>
                        <li>Offers a dashboard that provides an overview of occupancy, vacancy, collections, gross revenue, and rent per unit area, allowing for effective monitoring and coherent analysis of key performance indicators.</li>
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

<div class="bg-secondary">
    <div class="flex">
        <div class=" hidden lg:block w-2/5 grow  bg-about-digital bg-cover rounded-tr-3xl tv:rounded-3xl"></div>
        <div class="p-16 w-full lg:w-[60%] space-y-8">

            <h2 class=" heading-1">Why Dynamic Netsoft Technologies</h2>
            <div class="space-y-4 w-5/6">
                <ul class=" list-disc pl-8 space-y-4">
                    <li><b>Extensive Experience:</b> Over a decade of global ERP implementation expertise.</li>
                    <li><b>Microsoft Gold Partner:</b> Recognized for excellence in Dynamics 365 solutions and services.</li>
                    <li><b>ISV and Cloud Expertise:</b>Distinguished as a Microsoft Independent Software Vendor (ISV) and Cloud Service Provider.</li>
                    <li><b>Proven Success:</b> Demonstrated track record of customer satisfaction and success with medium to large enterprises.</li>
                    <li><b>Milestone Approach:</b> A systematic approach to achieving benefits through carefully planned implementation milestones.</li>
                    <li><b>User-Centric Pioneers:</b> Leading the way in enhancing customer adoption and end-user productivity.</li>
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


<!--global-->
<div class=" bg-primary py-16">
    <div class=" max-w-container space-y-16">
        <div class=" heading-1 text-center !text-white">Global Reach</div>
        <div class=" md:w-4/5 mx-auto">
            <div class=" grid grid-cols-1 lg:grid-cols-3">
                <div class=" border-r border-b border-white h-56 px-8 items-center">
                    <div class="flex flex-col justify-center h-full space-y-3">
                        <div class="flex items-center gap-x-3">
                            <div class="h-16 w-20 ">
                                <img src="<?php echo base_url() ?>/images/about/india.svg" alt="">
                            </div>
                            <div>
                                <div class="display-3 text-white ">
                                    India
                                </div>
                                <div class="text-white ">R&D Centre</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" border-r border-b border-white px-8 h-56">
                    <div class="flex flex-col justify-center h-full space-y-3">
                        <div class="flex items-center gap-x-3">
                            <div class="h-16 w-20 ">
                                <img src="<?php echo base_url() ?>/images/about/united-states.svg" alt="">
                            </div>
                            <div>
                                <div class="display-3 text-white ">
                                    USA
                                </div>
                                <div class="text-white ">US & Canada</div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="   border-b h-56">
                    <div class="flex flex-col justify-center h-full px-8 space-y-3">
                        <div class="flex items-center gap-x-3">
                            <div class="h-16 w-20 ">
                                <img src="<?php echo base_url() ?>/images/about/singapore.svg" alt="">
                            </div>
                            <div>
                                <div class="display-3 text-white ">
                                    Singapore
                                </div>
                                <div class="text-white ">SE Asia & ANZ</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" border-r  border-white h-56">
                    <div class="flex flex-col justify-center h-full px-8 space-y-3">
                        <div class="flex items-center gap-x-3">
                            <div class="h-16 w-20 ">
                                <img src="<?php echo base_url() ?>/images/about/dubai-flag.svg" alt="">
                            </div>
                            <div>
                                <div class="display-3 text-white ">
                                    Dubai
                                </div>
                                <div class="text-white ">Europe, CIS & Levant</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" border-r  border-white h-56">
                    <div class="flex flex-col justify-center h-full px-8 space-y-3">
                        <div class="flex items-center gap-x-3">
                            <div class="h-16 w-20 ">
                                <img src="<?php echo base_url() ?>/images/about/ghana.svg" alt="">
                            </div>
                            <div>
                                <div class="display-3 text-white ">
                                    Ghana
                                </div>
                                <div class="text-white ">Africa operations</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="   h-56">
                    <div class="flex flex-col justify-center h-full px-8 space-y-3">
                        <div class="flex items-center gap-x-3">
                            <div class="h-16 w-20 ">
                                <img src="<?php echo base_url() ?>/images/about/saudi-arabia.svg" alt="">
                            </div>
                            <div>
                                <div class="display-3 text-white ">
                                    KSA
                                </div>
                                <div class="text-white ">Middle East</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--global ends-->

<!-- section-5 -->
<div class="bg-about-promise bg-cover">
    <div class=" max-w-container space-y-8 py-16 big-screen">
        <div class="flex">
            <div class=" md:w-3/5 space-y-8 text-center md:text-left px-16 ">
                <div>

                    <div class=" text-3xl font-bold text-primary">
                        Our Promise
                    </div>
                </div>
                <p>At Dynamic Netsoft Technologies, our promise is to simplify the application lifecycle for your organization. We are committed to delivering the highest quality solutions and support, ensuring that your business can thrive in today's dynamic and competitive environment. Whether you're considering a move to cloud computing or seeking to optimize your operations, we are here to guide you every step of the way. Your success is our ultimate goal, and we look forward to initiating this transformative journey with you. We will persistently innovate to empower digital transformation around the world.</p>


            </div>
        </div>
    </div>
</div>
<!-- section 5 -->


<?= $this->endSection() ?>