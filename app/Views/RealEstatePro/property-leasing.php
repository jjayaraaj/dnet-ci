<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Property Leasing Management Solution on Microsoft Dynamics 365 <?= $this->endSection("title") ?>
<?= $this->section("description") ?>Tired of managing property leases manually? Simplify workflows, enhance efficiency, and boost productivity with property lease management software on Dynamics. <?= $this->endSection("description") ?>

<?= $this->section("content") ?>

<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-cover bg-leasing1 bg-bottom">
    <div class="banner-space"></div>
    <div class="max-w-container mx-auto h-full big-screen">


        <div class="  w-full  h-[500px]">


            <!-- inner banner -->
            <div class=" inner-banner  ">
                <div class=" first-div">
                    <h1 class="h1 flex flex-col">
                        Achieve Streamlined Property Leasing
                        Processes with RealEstatePro’s
                        <span class="display-lg text-primary  "> Property Lease Management software on Dynamics</span>

                    </h1>
                    <!-- <div class=" text-lg font-semibold">
                    </div> -->

                    <?= $this->include('/layouts/banner-action') ?>

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
            <div class="img-section hidden md:flex justify-end">
                <img src="<?php echo base_url() ?>/images/leasing/property-lease-management-software-microsoft-dynamics.svg" alt="">
            </div>
            <div class="content-section pt-16 lg:pt-0">
                <!-- <h2><span class="text-d-yellow">Annata 365</span></h2> -->
                <div class="sub-content">
                    <p class="">
                        Dynamic Netsoft brings a reliable software solution that can adeptly navigate you through the intricacies of mission-critical property leasing management. Our Property Lease Management solution for Dynamics 365 offers a comprehensive suite of features that streamline all aspects of the property leasing process. Manage your property leasing operations with ease and convenience.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- section 1 ends -->

<!-- section 3 -->
<div class=" md:bg-secondary bg-white py-16" x-data="{feature: 1}">
    <div class="max-w-container ">

        <div class="inner-section-box ">
            <div class="tab md:h-[550px]  overflow-y-auto">
                <div class="item" @click="feature = 1" :class="feature === 1 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/leasing/property-creation.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 1 ? 'active' : 'default'">Property Creation</div>
                    </div>
                </div>


                <div class="item" @click="feature = 2" :class="feature === 2 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/leasing/property-information-management.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 2 ? 'active' : 'default'">Property Information Management</div>
                    </div>
                </div>

                <div class="item" @click="feature = 3" :class="feature === 3 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/leasing/presales-management.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 3 ? 'active' : 'default'">Presales Management</div>
                    </div>
                </div>

                <div class="item" @click="feature = 4" :class="feature === 4 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/leasing/quotation.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 4 ? 'active' : 'default'">Quotation</div>
                    </div>
                </div>

                <div class="item" @click="feature = 5" :class="feature === 5 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/leasing/reservations-management.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 5 ? 'active' : 'default'">Reservations Management</div>
                    </div>
                </div>


                <div class="item" @click="feature = 6" :class="feature === 6 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/leasing/rent-lease-agreements.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 6 ? 'active' : 'default'">Rent & Lease Agreements</div>
                    </div>
                </div>


                <div class="item" @click="feature = 7" :class="feature === 7 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/leasing/agreement-execution-function.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="default" :class="feature === 7 ? 'active' : 'default'">Agreement Execution Function</div>
                    </div>
                </div>

                <div class="item" @click="feature = 8" :class="feature === 8 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/leasing/rent-appraisal.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="default" :class="feature === 8 ? 'active' : 'default'">Rent Appraisal</div>
                    </div>
                </div>

                <div class="item" @click="feature = 9" :class="feature === 9 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/leasing/analytics.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="default" :class="feature === 9 ? 'active' : 'default'">Analytics</div>
                    </div>
                </div>


            </div>
            <div class="content md:[h-550px] overflow-y auto ">
                <!-- content 1  -->

                <div class="mobile-tab " @click="feature = 1">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Property Creation</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 1">
                    <div class=" heading-1 hidden md:block ">Property Creation</div>
                    <ul class=" ">
                        <li>Our Property Lease Management software allows you to create a property hierarchy with blocks, floors, and units under each property.</li>
                        <li>Enables a detailed view of the property and unit layout, making it easier to track and manage properties in real-time.</li>
                        <li>Helps maintain consistency in area and measurements across property units.</li>
                        <li>The solution key features help to quickly identify occupied units Vs available.</li>

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
                        <div class=" heading-1 !text-white">Property Information Management</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class=" desktop-content" x-show="feature=== 2">
                    <div class=" heading-1 hidden md:block ">Property Information Management</div>
                    <ul class=" space-y-4">
                        <li>Our Property Lease Management software on Microsoft Dynamics maintains all property information in one consolidated location. </li>
                        <li>The solution allows easy retrieval and quick responses to customer-related information with accuracy and speed.</li>
                        <li>Manages the furnishings provided to the units and links them to Fixed Assets.</li>
                        <li>Easy to define and maintain rent values, standard charges, and rates applicable to the agreements.</li>
                        <li>The solution helps maintain unlimited Unit types such as apartments, villas, office shops, kiosks, etc.</li>

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
                        <div class=" heading-1 !text-white">Presales Management</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 3">
                    <div class=" heading-1 hidden md:block ">Presales Management</div>
                    <ul>
                        <li>Our advanced software on Property Lease Management allows you to swiftly search for the availability of properties. </li>
                        <li>Search functions are based on customer specifications and unit availability through an intuitive and user-friendly interface.</li>
                        <li>Empowers the marketing and sales team to handle a high volume of inquiries from potential clients and customers with a quick turnaround time.</li>
                        <li>Optimizes lead and opportunity management by using an integrated suite of sales and marketing tools.</li>
                        <li>Allows opportunity management, reservation analysis, and measure rental revenues against targets.</li>

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
                        <div class=" heading-1 !text-white">Quotation</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 4">
                    <div class=" heading-1 hidden md:block ">Quotation</div>
                    <ul>
                        <li>Generates professional property rent quotations, catering to multiple needs of prospective clients.</li>
                        <li>The solution can make amendments to the quotation during the negotiation process, which can be tracked in the system.</li>
                        <li>Ability to revise and resend the quotation to your customers ensuring accurate and up-to-date information, enhancing the overall leasing experience.</li>
                        <li>Update quotations based on the sales stages, with ‘created’, ‘confirmed’, ‘canceled’, and ‘lost’ statuses, allowing the sales team to make informed decisions.</li>

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
                            Reservations Management
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 5">
                    <div class=" heading-1 hidden md:block ">
                        Reservations Management
                    </div>
                    <ul>
                        <li>Our Property Lease Management software on Dynamics 365 manages diverse aspects and functions associated with the property unit’s reservation.</li>
                        <li>You can receive customer payments against reservations made and knock off the payments against the agreement.</li>
                        <li>Easy to cancel reservations and refund the payments received after deducting cancellation charges.</li>
                        <li>Flexibility to convert reservations into agreements once the deal is firmed up.</li>
                        <li>Handle reservation extensions and changes using a configured workflow setup.</li>
                        <li>Facilitates easy tracking and accounting for multiple reservation payments made by your customers.</li>


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
                            Rent & Lease Agreements
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 6">
                    <div class=" heading-1 hidden md:block ">
                        Rent & Lease Agreements
                    </div>
                    <ul>
                        <li>Create property rent agreements or contracts with various terms and conditions with our Property Lease Management solution on Microsoft Dynamics. </li>
                        <li>Create agreements with parameters such as duration, applicable calendar, payment terms, invoicing frequency, activity association, and more.</li>
                        <li>Modifying agreement value and rent components based on multiple parameters to suit specific customer requirements. </li>
                        <li>The Property Lease Management software enables workflows and manages approvals based on the defined hierarchy.</li>
                        <li>Ability to amend agreements with reasons and re-trigger the workflow process for better control mechanisms.</li>

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




<!-- section-5 -->
<div class="  bg-leasing4 bg-cover">
    <div class=" max-w-container space-y-8 py-16 big-screen">
        <div class="flex">
            <div class=" w-full lg:w-2/5 space-y-8 px-6 lg:px-0 text-center lg:text-left">
                <div>
                    <!-- <h3 class=" text-xl font-semibold">
                    </h3> -->
                    <div class=" text-3xl font-bold text-primary">
                        Contact us to make your vision a reality! </div>
                </div>
                <p> Reach out to our devoted team today for prompt and personalized assistance with all your inquiries. Let’s craft a path that aligns with your strategic goals.
                </p>

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






<?= $this->endSection() ?>