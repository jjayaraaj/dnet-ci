<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Annata 365
<?= $this->endSection("title") ?>
<?= $this->section("description") ?>Struggling with contract chaos? Uncover strategic solutions with Microsoft Dynamics 365 Contract Management. Optimize your construction and engineering projects.<?= $this->endSection("description") ?>

<?= $this->section("content") ?>

<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-right-bottom   bg-cover bg-realestatepro  ">
    <div class="banner-space"></div>
    <div class="max-w-container mx-auto h-full big-screen">


        <div class=" py-16 md:py-0   w-full h-auto  md:h-[500px]">


            <!-- inner banner -->
            <div class=" inner-banner ">
                <div class=" first-div ">
                    <h1 class="h1">
                        <span class="span ">Annata 365</span><br>
                        Better manage Projects with Microsoft Dynamics 365 Contract Management Software
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

<!-- section 1 -->
<div class=" md:bg-primary md:py-16">
    <div class=" max-w-container big-screen">
        <div class=" inner-section-blue">
            <div class="img-section hidden md:block">

            </div>
            <div class="content-section">
                <h2><span class="text-d-yellow">Annata 365</span></h2>
                <div class="sub-content">
                    <p class="">
                        Annata 365 is a modern, scalable, cloud-based management solution tailor-made for businesses in this digital age. Tools are provided in the fully integrated solution to transform existing business processes and embrace new opportunities through artificial intelligence, machine learning and IoT technologies. Annata’s data-driven business platform covers industry-specific needs throughout the entire lifecycle of the device and creates a customer-centric approach in all areas of the dealership.
                    </p>
                    <p>
                        There are a wide variety of features that support crucial processes within dealers and importers in different industries. The Annata solution draws from years of experience and best practice knowledge gained from working with leading industry experts to optimize the business performance of users.

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section 1 ends -->

<!-- section2 -->
<div class=" bg-secondary">
    <div class="inner-section-2">
        <div class="h2-div">
            <h2>Experience integrated and comprehensive Features of Dynamic Netsoft’s Contract Management Software</h2>
        </div>

        <div class="content-div ">
            <p class="!text-white md:!text-black">Our contract management software on Dynamics presents a comprehensive portal that offers unparalleled visibility, affording both customers and contractors a 360-degree vantage point to closely monitor the progress of projects. This state-of-the-art solution promotes effective communication and collaboration, enabling stakeholders to work harmoniously toward project success, with the following core features. </p>
        </div>
    </div>
</div>
<!-- section2 ends -->

<!-- section 3 -->
<div class=" md:bg-secondary bg-white pb-16" x-data="{feature: 1}">
    <div class="max-w-container ">

        <div class="inner-section-box">
            <div class="tab">
                <div class="item" @click="feature = 1" :class="feature === 1 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div :class="feature === 1 ? 'active' : 'default'">Contract Order</div>
                    </div>
                </div>


                <div class="item" @click="feature = 2" :class="feature === 2 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div class="" :class="feature === 2 ? 'active' : 'default'">Budget Control</div>
                    </div>
                </div>

                <div class="item" @click="feature = 3" :class="feature === 3 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div class="" :class="feature === 3 ? 'active' : 'default'">Submittals/Deliverables Management</div>
                    </div>
                </div>

                <div class="item" @click="feature = 4" :class="feature === 4 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div :class="feature === 4 ? 'active' : 'default'">Request for Inspection (RFI) Tracking</div>
                    </div>
                </div>

                <div class="item" @click="feature = 5" :class="feature === 5 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div :class="feature === 5 ? 'active' : 'default'">Work Completion Tracking</div>
                    </div>
                </div>


                <div class="item" @click="feature = 6" :class="feature === 6 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div :class="feature === 6 ? 'active' : 'default'">Dispute Tracking</div>
                    </div>
                </div>


                <div class="item" @click="feature = 7" :class="feature === 7 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div class="default" :class="feature === 7 ? 'active' : 'default'">Contract Invoicing</div>
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
                        <div class=" heading-1 !text-white">Contract Order</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 1">
                    <div class=" heading-1 hidden md:block ">Contract Order</div>
                    <ul class=" ">
                        <li>Dynamics 365 Contract Management software enables efficient contract execution tracking in project management.</li>
                        <li>Solution provides integrated and convenient features for letters of award to contractors.</li>
                        <li>Manage payment terms flexibility, including quantity-based or milestone-based options, with linked deliverables/submittals.</li>
                        <li>Create contract order activities accurately and monitor contractor work progress.</li>
                        <li>Execute work orders/contract orders with diverse options such as labor, material, or both for holistic project control.</li>

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
                        <div class=" heading-1 !text-white">Budget Control</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class=" desktop-content" x-show="feature=== 2">
                    <div class=" heading-1 hidden md:block ">Budget Control</div>
                    <ul class=" space-y-4">
                        <li>Our comprehensive ISV solution of Microsoft Dynamics 365 Contract Management facilitates prudent budget management through the allocation and revision of resources for contracted work.</li>
                        <li>Experience seamless integration with the project management and accounting module to facilitate comprehensive and effective budget management.</li>

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
                        <div class=" heading-1 !text-white">Submittals/Deliverables Management</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 3">
                    <div class=" heading-1 hidden md:block ">Submittals/Deliverables Management</div>
                    <ul>
                        <li>Dynamics 365 Contract Management software enables efficient contract execution tracking in project management.</li>
                        <li>Solution provides integrated and convenient features for letters of award to contractors.</li>
                        <li>Manage payment terms flexibility, including quantity-based or milestone-based options, with linked deliverables/submittals.</li>
                        <li>Create contract order activities accurately and monitor contractor work progress.</li>
                        <li>Execute work orders/contract orders with diverse options such as labor, material, or both for holistic project control.</li>

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
                        <div class=" heading-1 !text-white">Request for Inspection (RFI) Tracking</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 4">
                    <div class=" heading-1 hidden md:block ">Request for Inspection (RFI) Tracking</div>
                    <ul>
                        <li> With our comprehensive suite of Dynamics 365 Contract Management Software, you can record and track the details of inspections performed by project managers, quality inspectors, third-party consultants, etc. </li>
                        <li>Manage requests to customers for inspection and associated feedback to uphold superior project quality standards. </li>

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
                            Work Completion Tracking
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 5">
                    <div class=" heading-1 hidden md:block ">
                        Work Completion Tracking
                    </div>
                    <ul>
                        <li> Our software built on Microsoft Dynamics 365 for Contract Management allows effective contract documentation for evaluation and records.</li>
                        <li>Solution helps diligently update the progress of work completed on a percentage basis.</li>
                        <li>Meticulously manage and record delivery of materials by contractors.</li>
                        <li>Record Invoices and payments of work completion, benchmarked with agreed-upon terms and conditions.</li>


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
                            Dispute Tracking
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 6">
                    <div class=" heading-1 hidden md:block ">
                        Dispute Tracking
                    </div>
                    <ul>
                        <li>Our Microsoft Dynamics 365 Contract Management Software tracks and manages disputes arising due to contractors’ work, quality, performance, payments, and other related matters.</li>
                        <li>Enables proper tracking of any internal disputes that may arise during the project development phase, allowing efficient resolution and management.</li>
                        <li>Leverages advanced case management and case process for precise tracking, ensuring optimal project outcomes.</li>



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
                            Contract Invoicing
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 7">
                    <div class=" heading-1 hidden md:block ">
                        Contract Invoicing
                    </div>
                    <ul>
                        <li>Our Dynamics 365 Contract Management software aids in invoice submission and detailed validation against payment terms, submittals/deliverables, and achieved milestones.</li>
                        <li>Scrutinize validation with the thorough inspection process to ensure accuracy and compliance.</li>
                        <li>Prudent retention and release of funds based on retention terms for optimal financial management.</li>
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
<div class="  bg-cloud bg-cover">
    <div class=" max-w-container space-y-8 py-16 big-screen">
        <div class="flex">
            <div class=" md:w-2/5 space-y-8 text-center md:text-left px-16 ">
                <div>
                    <h3 class=" text-xl font-semibold">Ensure Compliance and Mitigate Risk with DNETSOFT’s

                    </h3>
                    <div class=" text-3xl font-bold text-primary">
                        Contract Management Software
                    </div>
                </div>
                <p>The complete Contract Management Solution for your Business</p>

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

<!-- section-6 -->
<div class="max-w-container py-16 bg-primary md:bg-white  md:px-0">
    <div class="md:w-4/6 mx-auto space-y-4 md:space-y-8 px-6 md:px-0">
        <h2 class="heading-1 text-left md:text-center !text-white md:text-black">
            Discover How Our Contract Management Software Can Benefit Your Business
        </h2>
        <p class=" !text-white md:text-black md:text-center">Endowed with the trust of numerous accomplished enterprises, our all-encompassing solution for contract management on Microsoft Dynamics 365 finance and operations, serves as a panacea for the complex task of contract management. It enables you to simplify your contract management processes, resulting in the efficacious completion of your projects, with its manifold benefits and streamlined approaches such as.</p>

    </div>
    <div class="feature">
        <div class="box">
            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Advanced project management system
                </div>
            </div>

            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Multilevel work breakdown structures
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Robust resource scheduling
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Project document management
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Role-based dashboards and reports
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    360-degree project visibility
                </div>
            </div>

            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Powerful search and filter functions
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Contractor portal for updates
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Accurate contract order activities
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Effective budget management
                </div>
            </div>

            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Payment control for submittals
                </div>
            </div>

            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Inspection tracking by managers
                </div>
            </div>

            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Periodic work completion tracking
                </div>
            </div>

            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Dispute tracking for contractor issues
                </div>
            </div>

            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Detailed contract invoicing tracking
                </div>
            </div>





        </div>

    </div>
</div>
<!-- section-6 ends -->


<?= $this->section("faq") ?><div class="max-w-container mx-auto py-16">
    <div class=" space-y-8 max-w-4xl mx-auto">
        <div class=" heading-1 text-center">Frequently Asked Questions</div>
        <div class=" flex flex-col divide-y " x-data="{selected:1}">
            <div>
                <div class="faq" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">What does contract management software do?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 1 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Our Dynamics 365 Contract Management Software
                        </p>
                        <ul class=" list-disc pl-8">
                            <li> Efficiently manages contractual agreements</li>
                            <li>Offers a centralized platform</li>
                            <li>Automated processes</li>
                            <li>Streamline communication among stakeholders</li>
                            <li>Ensures compliance with legal and regulatory requirements</li>

                        </ul>

                    </div>
                </div>
            </div>


            <div>
                <div class="faq" @click="selected !== 2 ? selected = 2 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">How does contract management software help your business?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 2 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">The manual system of the contract management process is highly cumbersome and time-consuming. Our contract management software on Microsoft Dynamics 365 finance & operations empowers your organization to optimize contract processes, mitigate risks, and enhance your competitive edge.
                        </p>


                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 3 ? selected = 3 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">What kinds of businesses need Contract Management Software?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 3 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">In today’s business world, where contracts serve as the backbone of agreements between parties, it is imperative that all types of businesses, from startups to Fortune 500 companies, need powerful contract management software to streamline their contract-related processes and enhance overall operational efficiency.

                        </p>

                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 4 ? selected = 4 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Who offers the best Contract Management Solution in Microsoft Dynamics 365?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 4 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Multiple vendors offer contract management solutions on Microsoft Dynamics, each with its unique features and benefits. Dynamic Netsoft offers comprehensive contract management software on Dynamics 365, which is widely recognized as one of the best in the market.</p>

                    </div>
                </div>
            </div>




        </div>
    </div>

</div>
<div class=" h-24">
</div><?= $this->endSection("faq") ?>

<?= $this->endSection() ?>