<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Microsoft Dynamics 365 Implementation for Finance and Operations<?= $this->endSection("title") ?>
<?= $this->section("description") ?>Streamline business processes, reduce costs & reap high ROI with Microsoft Dynamics 365 Implementation services. Don’t let the outdated processes hold you back. <?= $this->endSection("description") ?>

<?= $this->section("content") ?>


<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-right-bottom   bg-cover bg-realestatepro  ">
    <div class="banner-space"></div>
    <div class="max-w-container mx-auto h-full big-screen">


        <div class=" py-16 md:py-0   w-full h-auto  md:h-[500px]">


            <!-- inner banner -->
            <div class=" inner-banner ">
                <div class=" first-div ">
                    <h1 class="h1">
                        Experience Business Transformation with Dynamic Netsoft’s Microsoft Dynamics 365
                        <span class="span ">Finance & Operations Implementation Services</span>
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
                <h2>Enhance operational efficiency & business potential with our<span class="text-d-yellow"> Dynamics 365 Finance & Operations Implementation Services</span></h2>
                <div class="sub-content">
                    <p class="">
                        Dynamic Netsoft's Microsoft Dynamics 365 Implementation team empowers enterprises to transcend their capabilities and attain business advantage in fiercely competitive marketplace. Our seasoned professionals excel in project management, implementation, data migration, upgrades, and training, ensuring an exceptional Dynamics 365 journey. </p>
                    <p>
                        With comprehensive solutions spanning Sales & Marketing, Customer Service, Field Service Management, Finance & Operations, Connected Commerce, and Human Resources, our Dynamics 365 F&O Implementation experts propel strategic and operational excellence to unparalleled heights.
                    </p>
                    <div class="flex gap-x-4 pt-4">


                        <!-- <div>
                            <button class=" btn btn-yellow">Download Brochure <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg></button>
                        </div> -->
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
            <h3 class=" text-xl font-semibold text-center">Discover the Benefits of Microsoft ERP for the Construction Industry</h3>
            <p class=" md:w-1/2 text-center mx-auto">Microsoft’s ERP – ISV solutions for Construction provide robust strategic planning tool that offers numerous
                benefits to drive your business toward remarkable growth. These advantages include:</p>
        </div>
        <div>
            <div class="md:w-3/4 mx-auto ">
                <div>
                    <div class="h-24"></div>
                    <div class="">
                        <div class="owl-carousel owl-theme owl-service">
                            <?php foreach ($benefits as $product) {
                            ?>
                                <div class=" default !h-auto ">
                                    <div class=" image ">
                                        <img src="<?php echo base_url() ?>/images/verticals/realestate.svg" alt="">
                                    </div>

                                    <div>
                                        <div class="  title !py-0 !h-auto !pt-3"><?= $product->heading ?></div>
                                        <p class=" p-3 text-center"><?= $product->content ?></p>
                                    </div>


                                </div>


                            <?php } ?>



                        </div>
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
                    <h3 class=" text-xl font-semibold">Supercharge your business with our
                    </h3>
                    <div class=" text-3xl font-bold">
                        Microsoft Dynamics 365 Implementation Services
                    </div>
                </div>
                <p>Connect with our expert team today to start your transformation journey. </p>

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


<!-- section2 -->
<div class=" bg-secondary">
    <div class="inner-section-2">
        <div class="h2-div">
            <h2>Vision to Reality with our Microsoft Dynamics 365 Implementation Services</h2>
        </div>

        <div class="content-div ">
            <p class="!text-white md:!text-black">We are committed to providing you with a comprehensive and personalized transformation experience. From requirement analysis to seamless deployment of solution, we ensure that every aspect of your implementation journey is diligently planned and sequentially executed.</p>

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
                    <div class=" circle"></div>
                    <div class="text">
                        <div :class="feature === 1 ? 'active' : 'default'">Requirement analysis</div>
                    </div>
                </div>


                <div class="item" @click="feature = 2" :class="feature === 2 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div class="" :class="feature === 2 ? 'active' : 'default'">Designing the modules by setup</div>
                    </div>
                </div>

                <div class="item" @click="feature = 3" :class="feature === 3 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div class="" :class="feature === 3 ? 'active' : 'default'">Configuration</div>
                    </div>
                </div>

                <div class="item" @click="feature = 4" :class="feature === 4 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div :class="feature === 4 ? 'active' : 'default'">Development of reports</div>
                    </div>
                </div>

                <div class="item" @click="feature = 5" :class="feature === 5 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div :class="feature === 5 ? 'active' : 'default'">Required customizations</div>
                    </div>
                </div>

                <div class="item" @click="feature = 6" :class="feature === 6 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div :class="feature === 6 ? 'active' : 'default'">End-User training</div>
                    </div>
                </div>

                <div class="item" @click="feature = 7" :class="feature === 7 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div :class="feature === 7 ? 'active' : 'default'">Deploying the solution</div>
                    </div>
                </div>

                <div class="item" @click="feature = 8" :class="feature === 8 ? 'active' : ''">
                    <div class=" circle"></div>
                    <div class="text">
                        <div :class="feature === 8 ? 'active' : 'default'">Go Live with post-implementation support</div>
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
                        <div class=" heading-1 !text-white">Requirement analysis</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 1">
                    <div class=" heading-1 hidden md:block ">Requirement analysis</div>
                    <p class="text-white">Through meticulous requirement analysis, our Microsoft Dynamics 365 Finance & Operations implementation team will assess your business needs and gather essential information to tailor the solution.</p>

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
                        <div class=" heading-1 !text-white">Designing the modules by setup</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class=" desktop-content" x-show="feature=== 2">
                    <div class=" heading-1 hidden md:block ">Designing the modules by setup</div>
                    <p class="text-white">Our expert team will design the modules, ensuring a seamless setup that aligns with your specific requirements. </p>

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
                        <div class=" heading-1 !text-white">Configuration</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 3">
                    <div class=" heading-1 hidden md:block ">Configuration</div>
                    <p class="text-white">With careful attention to detail, our Dynamics 365 Finance & Operations implementation specialists will configure the system, optimizing its performance to meet your unique business processes.</p>

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
                        <div class=" heading-1 !text-white">Development of reports</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 4">
                    <div class=" heading-1 hidden md:block ">Development of reports</div>
                    <p class="text-white">Our skilled developers will craft customized reports that provide valuable insights, enabling you to make data-driven decisions and drive business growth.</p>

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
                            Required customizations
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 5">
                    <div class=" heading-1 hidden md:block ">
                        Required customizations
                    </div>
                    <p class="text-white">Our Microsoft Dynamics 365 Implementation service team will implement necessary customizations, tailoring the solution to fit your organization's unique workflows and maximizing its efficiency.</p>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>


                <div class="desktop-content" x-show="feature=== 6">
                    <div class=" heading-1 hidden md:block ">
                        End-User training
                    </div>
                    <p class="text-white">End-user training programs led by our experienced trainers will equip your staff with the necessary knowledge and skills to effectively utilize the implemented solution.</p>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>

                <div class="desktop-content" x-show="feature=== 7">
                    <div class=" heading-1 hidden md:block ">
                        Deploying the solution
                    </div>
                    <p class="text-white">Leveraging their expertise, our team will deploy the solution across your organization, ensuring a smooth and efficient transition without disrupting your daily operations.</p>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>


                <div class="desktop-content" x-show="feature=== 8">
                    <div class=" heading-1 hidden md:block ">
                        Go Live with post-implementation support
                    </div>
                    <p class="text-white">our dedicated Dynamics 365 Implementation & support team will help and provide guidance, ensuring a successful Go Live.</p>

                    <div>
                        <button class=" btn btn-yellow">Book a Demo</button>
                    </div>
                </div>



            </div>
        </div>

    </div>
</div>
<!-- section -3 ends -->

<!-- section-6 -->
<div class="max-w-container py-16 bg-primary md:bg-white  md:px-0">
    <div class="md:w-4/6 mx-auto space-y-4 md:space-y-8 px-6 md:px-0">
        <h2 class="heading-1 text-left md:text-center !text-white md:!text-black">
            Advantages of Successful Dynamics 365 Finance & Operations Implementation on Your Business
        </h2>
        <!-- <p class=" !text-white md:!text-black md:text-center">Experience advanced features of our bid management software, built on the market-leading Microsoft Dynamics 365. Maximize efficiency and effectiveness of integrated Project management features for business benefits.</p> -->

    </div>
    <div class="feature">
        <div class="box">
            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Enhanced operational efficiency
                </div>
            </div>

            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Faster &
                    accurate decision-making
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Streamlined
                    workflows
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Scalable and
                    adaptable platform
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Comprehensive
                    data insights and
                    analytics
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Improved customer
                    engagement and
                    satisfaction
                </div>
            </div>

            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Enhanced
                    collaboration and
                    communication
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Robust security
                    and compliance
                    measures
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    Efficient automation
                    of functional
                    processes
                </div>
            </div>


            <div class="">
                <div class="top-div"></div>
                <div class="bottom-div ">
                    A holistic view
                    of business
                    operations
                </div>
            </div>








        </div>

    </div>
</div>
<!-- section-6 ends -->

<!-- partner -->

<div class=" flex bg-secondary ">
    <div class="flex  big-screen">
        <div class=" hidden lg:block w-2/5 grow  bg-digital bg-cover rounded-tr-3xl tv:rounded-3xl"></div>
        <div class="p-16 w-full lg:w-[60%] space-y-8">

            <h2 class=" heading-1">Why Choose Dynamic Netsoft as Your Microsoft Dynamics 365 Implementation Partner?</h2>
            <div class="space-y-4 w-5/6">

                <ul class=" list-disc text-sm space-y-2 ml-6">
                    <li>Dynamic Netsoft is a reputable Microsoft Gold Partner, authorized to provide dependable implementation services for Microsoft Dynamics 365.</li>
                    <li> We adhere to industry-standard practice and benchmark implementation methodologies to ensure optimal results.</li>
                    <li> Through a comprehensive review of your process flow and domain modules, we employ industry-tailored implementation methodologies to ensure optimal deployment.</li>
                    <li>We provide industry experts and experienced functional and technical consultants to ensure a fast, secure and successful implementation.</li>
                    <li> Our dedicated and professional support team offer unmatched support and services that match and exceed the best in the industry.</li>
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

                        <div class="question">Why should I consider a Dynamics 365 implementation partner?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 1 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">A Dynamics 365 implementation partner brings expertise, experience, and resources to ensure successful deployment, minimize risks, accelerate adoption, and maximize the value of your Dynamics 365 investment. </p>

                    </div>
                </div>
            </div>


            <div>
                <div class=" faq" @click="selected !== 2 ? selected = 2 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">How long does implementing Dynamics 365 take for an implementation partner?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 2 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">The duration of implementation varies based on project complexity, scope, and customization requirements. Our Dynamics 365 implementation team ensures efficient planning and execution to deliver timely and successful implementations. </p>

                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 3 ? selected = 3 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">How to choose the right Dynamics 365 Finance & Operations implementation partner?</div>
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

                        <div class="question"> What is the process of Dynamics 365 Finance & Operations </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 4 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">A. Dynamics 365 Finance & Operations implementation involves requirement analysis, module design and configuration, system setup, customization, data migration, end-user training, solution deployment, and post-implementation support to ensure a successful transition and optimal utilization of the platform.</p>


                    </div>
                </div>
            </div>




        </div>

    </div>

</div>
<div class=" h-24">
</div><?= $this->endSection("faq") ?>

<?= $this->endSection() ?>