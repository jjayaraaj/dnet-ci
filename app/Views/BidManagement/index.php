<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> A Leading Bid Management Software on Microsoft Dynamics 365 <?= $this->endSection("title") ?>
<?= $this->section("description") ?>Tired of misjudged estimates and over-optimistic delivery projections? Choose the best Dynamics 365 Bid Management Software. Win lucrative contracts confidently! <?= $this->endSection("description") ?>

<?= $this->section("content") ?>

<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-right-bottom   bg-cover bg-realestatepro  ">
    <div class="banner-space"></div>
    <div class="max-w-container mx-auto h-full big-screen">


        <div class=" py-16 md:py-0   w-full h-auto  md:h-[500px]">


            <!-- inner banner -->
            <div class=" mx-auto max-w-container big-screen  h-full flex items-center ">
                <div class=" space-y-8 text-center md:text-left">
                    <h1 class="text-lg md:text-[2rem]  font-bold md:max-w-3xl flex-1 leading-tight">
                        <span class="display-lg text-primary  ">Bid Management</span><br>
                        Expedite operational success with Microsoft Dynamics 365 Bid Management Software
                    </h1>
                    <!-- <div class=" text-base md:text-lg font-semibold">
                        Level up your digital transformation process
                    </div> -->

                    <div class="flex  md:flex-row  gap-4 items-center">
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
                <h2>Boost your Business Competitiveness with <span class="text-d-yellow">Dynamic Netsoft’s Intelligent</span></h2>
                <div class="sub-content">
                    <p class="">
                        Dynamic Netsoft’s Bid Management software on Dynamics offers a comprehensive toolset to seamlessly navigate the intricate landscape of bid complexities, effortlessly streamline BOQ costing, and harness the power of our robust price simulator tools. </p>
                    <p>
                        With seamless integration to our procurement module, efficiently process RFQs and achieve unparalleled bid finalization. Elevate your bidding prowess and transcend industry standards with our sophisticated Bid Management Solution.
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
            <h2>Navigate the Complexities of Bidding with the Best Bid Management Software</h2>
        </div>

        <div class="content-div ">
            <p class="!text-white md:!text-black">With our Bid Management tools, you can wave goodbye to the risks and errors of using generic spreadsheets. This benchmark solution enables advanced and consistent Bid estimating processes, minimizing the complexity of Bid evaluation. The Bid Management software on Dynamics offers an array of advanced features that provides ease of use and speed of business in Bid tracking and analysis.</p>

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
                        <div :class="feature === 1 ? 'active' : 'default'">Bid Creation</div>
                    </div>
                </div>


                <div class="item" @click="feature = 2" :class="feature === 2 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div class="" :class="feature === 2 ? 'active' : 'default'">Bid Costing</div>
                    </div>
                </div>

                <div class="item" @click="feature = 3" :class="feature === 3 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div class="" :class="feature === 3 ? 'active' : 'default'">Price Simulation</div>
                    </div>
                </div>

                <div class="item" @click="feature = 4" :class="feature === 4 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div :class="feature === 4 ? 'active' : 'default'">Integration with Procurement</div>
                    </div>
                </div>

                <div class="item" @click="feature = 5" :class="feature === 5 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div :class="feature === 5 ? 'active' : 'default'">Bid Finalization & Project Contracts</div>
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
                        <div class=" heading-1 !text-white">Bid Creation</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 1">
                    <div class=" heading-1 hidden md:block ">Bid Creation</div>
                    <ul class=" ">
                        <li>Our simple and effective Microsoft Dynamics 365 Bid Management Software efficiently manages the Bid process’s complexity.</li>
                        <li>Features to track Bid submission date, closing date, and other relevant milestones with timely alerts.</li>
                        <li>Comprehensive tender evaluation with an in-depth analysis of the scope of work and bid bond details.</li>
                        <li>Thorough risk analysis, enabling clients to make informed decisions.</li>

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
                        <div class=" heading-1 !text-white">Bid Costing</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class=" desktop-content" x-show="feature=== 2">
                    <div class=" heading-1 hidden md:block ">Bid Costing</div>
                    <ul class=" space-y-4">
                        <li>Our high-performance Dynamics 365 Bid Management software offers convenient import utility of BOQ from Excel.</li>
                        <li>Detailed costing for each BOQ, accounting for labor, equipment, item, and other relevant expenses.</li>
                        <li>Advanced costing, markup, and pricing features of our Bid Management Software on Dynamics enable optimal cost allocation of indirect costs during project costing.</li>
                        <li>Robust workflow approvals for the cost sheets and bids before the bid submission.</li>

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
                        <div class=" heading-1 !text-white">Price Simulation</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 3">
                    <div class=" heading-1 hidden md:block ">Price Simulation</div>
                    <ul>
                        <li>Innovative mark-up and price simulator tools of our Bid Management Software on Dynamics empowers clients to simulate various scenarios.</li>
                        <li>Applying mark-up percentages for BOQ items until they achieve the desired level of price and margin.</li>
                        <li>Maintenance of revision history for cost sheets and bids, periodically.</li>

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
                        <div class=" heading-1 !text-white">Integration with Procurement</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 4">
                    <div class=" heading-1 hidden md:block ">Integration with Procurement</div>
                    <ul>
                        <li>Experience smooth integration with the procurement module to process RFQs with our Microsoft Dynamics 365 Bid Management Software.</li>
                        <li>Obtain quotations from vendors, facilitating an accurate estimation of the bid price.</li>

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
                            Bid Finalization & Project Contracts
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 5">
                    <div class=" heading-1 hidden md:block ">
                        Bid Finalization & Project Contracts
                    </div>
                    <ul>
                        <li>With our innovative Microsoft Dynamic 365 Bid Management Software, experience end-to-end process conversion of Bids in the Dynamics D365 project module.</li>
                        <li>Real-time update of the opportunity with bid details and tracking of Win-Loss ratio.</li>
                        <li>Seamless transfer of Bid details, including BOQ hierarchy, to Project WBS, Project Forecasts, and Item requirements by our Bid Management Software on Dynamics enhances efficiency and accuracy.</li>


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
                    <h3 class=" text-xl font-semibold">Master the Art of Winning Contracts with Dynamic Netsoft’s

                    </h3>
                    <div class=" text-3xl font-bold text-primary">
                        Bid Management Software
                    </div>
                </div>
                <p>Streamline your Bidding Process with the fastest and the most efficient Bid Management tool in the market. Your smart way to bid and win!!!</p>

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
        <h2 class="heading-1 text-left md:text-center !text-white md:!text-black">
            Discover the unmatched benefits of Choosing our Microsoft Dynamics 365 Bid Management Software
        </h2>
        <p class=" !text-white md:!text-black md:text-center">Experience advanced features of our bid management software, built on the market-leading Microsoft Dynamics 365. Maximize efficiency and effectiveness of integrated Project management features for business benefits.</p>

    </div>
    <div class="feature">
        <div class="box">
            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Enhance bid efficiency and effectiveness
                </div>
            </div>

            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Reduce the complexity of cost sheet analysis
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Streamline bid creation and submission process
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Efficiently manage customer RFQs/RFPs
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Access pre-existing or customized templates
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Automate workflow and milestone approvals
                </div>
            </div>

            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Gain visibility into historical bids and details
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Generate actionable reports and documents
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Convert estimates into projects seamlessly
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Achieve optimal pricing and margins
                </div>
            </div>

            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Integrate with the procurement module
                </div>
            </div>

            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Update opportunity details and win-loss ratio
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

                        <div class="question">What is bid management software?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 1 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Bid management software is a solution that assists users in managing and documenting customer RFQs/RFPs and developing accurate bids for material and service contracts. It aids in bid creation, costing, price simulation, risk analysis, and more.
                        </p>

                    </div>
                </div>
            </div>


            <div>
                <div class="faq" @click="selected !== 2 ? selected = 2 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Why Microsoft Dynamics 365 bid management Software is required for your industry?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 2 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Microsoft Dynamics 365 bid management software streamlines RFQs/RFPs processing develops accurate bids and effectively integrates with project accounting, supply chain, and sales & marketing modules ensuring optimized profits and minimized risks.
                        </p>


                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 3 ? selected = 3 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Who uses bid management software?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 3 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Bid management software is used by estimators, project managers, and business development teams in industries such as construction, engineering, architecture & planning, manufacturing, IT, and investment professionals for business clarity and more. </p>

                    </div>
                </div>
            </div>





        </div>
    </div>

</div>
<div class=" h-24">
</div><?= $this->endSection("faq") ?>

<?= $this->endSection() ?>