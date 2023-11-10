<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Microsoft Dynamics 365 Solution for Property Sales Management <?= $this->endSection("title") ?>
<?= $this->section("description") ?>Seeking to optimize your real estate sales strategy? Unleash the potential of Dynamics 365 for property sales management – Make your vision a reality! <?= $this->endSection("description") ?>

<?= $this->section("content") ?>

<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-cover bg-sale1">
    <div class=" mobile-header-transparent">
        <div class="banner-space"></div>
        <div class=" mx-auto h-full big-screen">


            <div class="  w-full h-full  lg:h-[500px]">


                <!-- inner banner -->
                <div class="header-1 ">
                    <div class=" header-2">
                        <h1 class="header-3">
                            <span class="header-blue-text">Property Sales Management Solution on Dynamics 365 </span>
                            <div class="leading-tight">Enhanced Operational Capabilities and Streamlined Processes for Business Efficiency</div>
                        </h1>
                        <!-- <div class=" text-lg font-semibold">
                    </div> -->

                        <?= $this->include('/layouts/banner-action') ?>

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
            <div class="img-section hidden md:flex justify-end">
                <img src="<?php echo base_url() ?>/images/sale/property-management-for-sale.svg" alt="">
            </div>
            <div class="content-section pt-16 lg:pt-0">
                <!-- <h2><span class="text-d-yellow">Annata 365</span></h2> -->
                <div class="sub-content">
                    <p class="">
                        The property sales management module of RealEstatePro offers unparalleled functionality and customizability, allowing streamlined sales processes and executing faster deal closures with greater accuracy. Its intuitive interface allows easy maneuvering, while the advanced reporting and analytics provide valuable insights into sales performance, enabling faster and more accurate decision-making </p>

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
                        <img src="<?php echo base_url() ?>/images/sale/property-creation.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 1 ? 'active' : 'default'">Property Creation</div>
                    </div>
                </div>


                <div class="item" @click="feature = 2" :class="feature === 2 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/sale/template-definition.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 2 ? 'active' : 'default'">Template Definition</div>
                    </div>
                </div>

                <div class="item" @click="feature = 3" :class="feature === 3 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/sale/property-information-management.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 3 ? 'active' : 'default'">Property Information Management</div>
                    </div>
                </div>

                <div class="item" @click="feature = 4" :class="feature === 4 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/sale/presales-management.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 4 ? 'active' : 'default'">Presales Management</div>
                    </div>
                </div>

                <div class="item" @click="feature = 5" :class="feature === 5 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/sale/quotation.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 5 ? 'active' : 'default'">Quotation</div>
                    </div>
                </div>


                <div class="item" @click="feature = 6" :class="feature === 6 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/sale/reservations-management.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 6 ? 'active' : 'default'">Reservations Management</div>
                    </div>
                </div>


                <div class="item" @click="feature = 7" :class="feature === 7 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/sale/agreement-execution-function.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="default" :class="feature === 7 ? 'active' : 'default'">Sales Agreements</div>
                    </div>
                </div>

                <div class="item" @click="feature = 8" :class="feature === 8 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/sale/change-orders.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="default" :class="feature === 8 ? 'active' : 'default'">Change Orders</div>
                    </div>
                </div>

                <div class="item" @click="feature = 9" :class="feature === 9 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/sale/agreement-execution-function.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="default" :class="feature === 9 ? 'active' : 'default'">Agreement Execution Functions</div>
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

                    <svg x-show="feature=== 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>

                </div>

                <div class="desktop-content" x-show="feature=== 1">
                    <div class=" heading-1 hidden md:block ">Property Creation</div>
                    <ul class=" ">
                        <li>Our advanced property management software for sales allows centralized property data storage by creating a hierarchy with blocks, floors, and individual unit. </li>
                        <li>With the hierarchical structure easily determine occupied and available units, saving time, and resource allocation, and improving business transactions.</li>
                    </ul>

                    <div>
                        <button @click="openFormDemoDiv('<?= uri_string() ?>/Property Creation')" class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>



                <!-- content 2  -->

                <div class="mobile-tab " @click="feature = 2">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Template Definition</div>
                    </div>

                    <svg x-show="feature=== 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>

                </div>

                <div class=" desktop-content" x-show="feature=== 2">
                    <div class=" heading-1 hidden md:block ">Template Definition</div>
                    <ul class=" space-y-4">
                        <li>Our property sales management software on Dynamics offers the ability to create customizable templates to define these essential parameters for consistent and uniform pricing strategies.</li>
                        <li>It simplifies data entry by retrieving the pre-defined template at the property unit level, improving decision-making ability.</li>
                    </ul>

                    <div>
                        <button @click="openFormDemoDiv('<?= uri_string() ?>/Template Definition')" class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>



                <!-- content 3  -->

                <div class="mobile-tab " @click="feature = 3">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Property Information Management</div>
                    </div>

                    <svg x-show="feature=== 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 3">
                    <div class=" heading-1 hidden md:block ">Property Information Management</div>
                    <ul>
                        <li>Our Property sales management solution manages property information with a comprehensive array of details required for seamless transactions.</li>
                        <li>Stipulate specifications that are pertinent to the property unit and integrate them into the finalized sale agreement.</li>
                        <li>Formulate and maintain a sale price for the property unit, along with the contract details of each component of the sale. </li>
                        <li>Manage a range of unit types such as apartments, villas, row houses, office spaces, retirement homes, malls, kiosks, etc.</li>
                        </li>

                    </ul>

                    <div>
                        <button @click="openFormDemoDiv('<?= uri_string() ?>/Property Information Management')" class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>



                <!-- content 4  -->

                <div class="mobile-tab " @click="feature = 4">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Presales Management</div>
                    </div>

                    <svg x-show="feature=== 4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 4">
                    <div class=" heading-1 hidden md:block ">Presales Management</div>
                    <ul>
                        <li>Our cutting-edge solution for Property management for sales enables the marketing and sales team to promptly address inquiries from potential clients and existing customers.</li>
                        <li>Leverage the integrated suite of Sales & Marketing functions for proficient management and analysis of leads and opportunities.</li>
                        <li>Effectively manage opportunities and analyze reservations while precisely measuring property sale revenues against targets. </li>

                    </ul>

                    <div>
                        <button @click="openFormDemoDiv('<?= uri_string() ?>/Presales Management')" class=" btn btn-yellow">Book a Demo</button>
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
                            Quotation
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
                        Quotation
                    </div>
                    <ul>
                        <li>Our precisely designed Property sales Management software on Dynamics effortlessly creates multiple sales quotations for associated leads or opportunity.</li>
                        <li>Ability to amend quotations and track progress, providing seamless transparency and control over the entire sales process.</li>
                        <li>enables the capability to resend a revised quotation to a customer, providing greater flexibility and agility in negotiations.</li>
                        <li>Effortlessly update the status of quotations as created, confirmed, cancelled, or lost, based on the sales stages, allowing precise tracking.</li>


                    </ul>

                    <div>
                        <button @click="openFormDemoDiv('<?= uri_string() ?>/Quotation')" class=" btn btn-yellow">Book a Demo</button>
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
                            Reservations Management
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
                        Reservations Management
                    </div>
                    <ul>
                        <li>Our solution for property sales management empowers property managers to save time and effort in managing reservations made by prospects.</li>
                        <li>Efficiently handle customer payments made against property reservations and effortlessly manage against signed contract.</li>
                        <li>Cancel reservations and maintain the accountability of payment refunds to the customer including cancellation charges.</li>
                        <li>Converts reservations into agreements on the deal confirmation, eliminating any potential gaps and delays. </li>
                        <li>Facilitate reservation extensions and changes through a meticulously designed and customized workflow configuration.</li>
                        <li>simplifies the intricate task of accounting for multiple reservation payments made by the customers.</li>
                        <li>Upon generating a reservation, an opportunity is concurrently created, allowing for an in-depth analysis of potential customers for future reference.</li>

                    </ul>

                    <div>
                        <button @click="openFormDemoDiv('<?= uri_string() ?>/Reservations Management')" class=" btn btn-yellow">Book a Demo</button>
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
                            Sales Agreements
                        </div>
                    </div>

                    <svg x-show="feature=== 7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 7">
                    <div class=" heading-1 hidden md:block ">
                        Sales Agreements
                    </div>
                    <ul>
                        <li>Create property sales agreements with various terms and conditions tailored to the unique needs of customers.</li>
                        <li>Enter and maintain standard statutory information about the sales agreement.</li>
                        <li>Tailor the agreement's value and sale price constituents to align with various parameters based on the diverse customer requirements.</li>
                        <li>Enable workflows and manage approvals based on the defined hierarchy.</li>
                        <li>Finalize agreement once approved.</li>
                    </ul>

                    <div>
                        <button @click="openFormDemoDiv('<?= uri_string() ?>/Sales Agreements')" class=" btn btn-yellow">Book a Demo</button>
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
                            Change Orders
                        </div>
                    </div>

                    <svg x-show="feature=== 8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>

                </div>

                <div class="desktop-content" x-show="feature === 8">
                    <div class=" heading-1 hidden md:block ">
                        Change Orders
                    </div>
                    <ul>
                        <li>Generate change orders tailored to the unique needs of each customer.</li>
                        <li>Each change order is attached with corresponding pricing and a carefully crafted billing schedule.</li>
                    </ul>

                    <div>
                        <button @click="openFormDemoDiv('<?= uri_string() ?>/Change Orders')" class=" btn btn-yellow">Book a Demo</button>
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
                            Agreement Execution Functions
                        </div>
                    </div>

                    <svg x-show="feature=== 9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 9">
                    <div class=" heading-1 hidden md:block ">
                        Agreement Execution Functions
                    </div>
                    <ul>
                        <li>Our Property sales management software offers end-to-end monitoring of all activities encompassing the entire agreement lifecycle, starting from the contract execution to the handover of the property.</li>
                        <li>Create billing schedules based on predetermined amounts or percentages, with prospective invoicing dates to ensure efficient financial management.</li>
                        <li>Invoicing against an agreement's payment schedule and related change orders' payment schedule can be effortlessly accomplished through our property sales management software on Dynamics 365.</li>
                        <li>Cancellation of both individual change orders and the sale agreement, ensuring accurate financial recovery and reimbursement from the customer.</li>
                    </ul>

                    <div>
                        <button @click="openFormDemoDiv('<?= uri_string() ?>/Agreement Execution Functions')" class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>
<!-- section -3 ends -->




<!-- section-5 -->
<div class="bg-sale2 bg-cover">
    <div class=" max-w-container space-y-8 py-16 big-screen">
        <div class="flex">
            <div class="w-full lg:w-2/5 text-center lg:text-left px-6 lg:px-0 space-y-8">
                <div>
                    <!-- <h3 class=" text-xl font-semibold">
                    </h3> -->
                    <div class=" text-3xl font-bold text-primary">
                        Don’t wait, reach out to us today! </div>
                </div>
                <p> Our dedicated team is ready to assist and address any inquiries you may have. Contact us to discover how we can propel your digital transformation goals forward. Let’s embark on this journey together and get started on your success story! </p>

                <div class=" inline-flex">
                    <?= $this->include('/layouts/connect') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section 5 -->






<?= $this->endSection() ?>