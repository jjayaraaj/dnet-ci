<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Microsoft Dynamics Partner | D365 F&O - Dynamics NetSoft <?= $this->endSection("title") ?>
<?= $this->section("description") ?>Stuck with multiple legacy systems? Evolve with Dynamic Netsoft, a Microsoft Dynamics 365 Gold partner offering ERP & CRM solutions for Property & Construction industries.<?= $this->endSection("description") ?>
<?= $this->section("content") ?>

<!--banner-->


<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-cover bg-contact" x-data="{contact: false}">
    <div class="mx-auto h-full big-screen">
        <div class="lg:banner-space bg-white fixed w-full left-0 top-0 lg:-top-0 h-14 " @scroll.window="contact = (window.pageYOffset < 5) ? false: true" :class="{ 'lg:h-[75px]': contact, 'lg:h-24': !contact }"></div>

        <div class=" w-full lg:h-[500px]">
            <div class="h-10 lg:hidden "></div>

            <!-- inner banner -->
            <div class=" inner-banner w-full justify-center lg:justify-start  text-center lg:text-left">
                <div class=" first div  ">
                    <h1 class="h1 flex lg:flex-col">
                        <span class="display-lg text-white  !leading-[5rem]">Contact Us
                    </h1>


                </div>
            </div>

        </div>
    </div>
</header>
<!--banner /-->

<!-- section2 -->
<section class="max-w-container py-16 big-screen">
    <div class="lg:flex justify-between items-center">
        <div class="lg:w-1/3 lg:pl-28  space-y-6 text-center lg:text-left ">
            <div class="display-2 text-primary">Let’s Connect</div>
            <div class="flex flex-col space-y-2 items-center lg:items-start">
                <a href="mailto:enquiry@dnetsoft.com" class=" inline-flex items-center gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primary ">
                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                    </svg>

                    enquiry@dnetsoft.com</a>
                <a href="mailto:sales@dnetsoft.com.com" class=" inline-flex items-center gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primary ">
                        <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                        <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                    </svg>
                    sales@dnetsoft.com



                </a>
            </div>
            <div class="md:w-full px-6 lg:px-0 pb-6 lg:pb-0">
                Our team of experts would love to hear from you to discuss all our services in more detail and how they can make a difference to your business.
            </div>
        </div>

        <div class="relative lg:w-1/3 z-40">
            <div class=" lg:-mt-96 bg-gray-100 w-full bg-form-2 bg-cover rounded-3xl px-6 py-4 space-y-4 ">

                <form class=" space-y-5 p-8" action="<?php echo base_url() ?>/contact-request" method="POST" id="contactForm">
                    <div>

                        <input type="text" name="contactName" placeholder="Name" required>
                    </div>
                    <div>

                        <input type="text" name="contactCompany" placeholder="Company Name">
                    </div>
                    <div>

                        <input type="text" name="contactDesignation" placeholder="Designation">
                    </div>
                    <div>

                        <input type="email" name="contactEmail" placeholder="E-Mail ID" required>
                    </div>
                    <div>

                        <input type="text" id="contactPhone" name="contactPhone" placeholder="Phone Number">
                    </div>

                    <div>

                        <textarea rows="4" name="contactMessage"></textarea>
                    </div>

                    <div class=" text-center flex justify-center">
                        <button class="btn btn-primary">Submit <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg></button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</section>
<!-- section2 -->







<!--global-->
<div class=" bg-secondary py-16">
    <div class=" max-w-container space-y-16 big-screen">
        <div class=" heading-1 text-center">Global Reach</div>
        <div class=" mx-auto">
            <div class=" grid grid-cols-1 lg:grid-cols-4">
                <div class=" h-56 px-8 items-center">
                    <div class="flex flex-col justify-center h-full space-y-3">
                        <div class="flex items-center gap-x-3">
                            <div class="h-16 w-20 ">
                                <img src="<?php echo base_url() ?>/images/about/india.svg" alt="">
                            </div>
                            <div class="display-3 ">
                                India
                            </div>
                        </div>
                        <div class="">
                            10, 2nd street, RBI Colony, Thiruvanmiyur, Chennai – 600041, India.
                            Phone: +9144 4923 7777
                        </div>
                    </div>
                </div>
                <div class="  px-8 h-56">
                    <div class="flex flex-col justify-center h-full space-y-3">
                        <div class="flex items-center gap-x-3">
                            <div class="h-16 w-20 ">
                                <img src="<?php echo base_url() ?>/images/about/united-states.svg" alt="">
                            </div>
                            <div class="display-3 ">
                                United States
                            </div>
                        </div>
                        <div class="">
                            1201 North Market Street, Suite 11, Wilmington, DE 19801
                            Phone: + 1 (302) 202-9223
                            Fax: +1 (302) 202-9225
                        </div>
                    </div>
                </div>
                <div class="    h-56">
                    <div class="flex flex-col justify-center h-full px-8 space-y-3">
                        <div class="flex items-center gap-x-3">
                            <div class="h-16 w-20 ">
                                <img src="<?php echo base_url() ?>/images/about/singapore.svg" alt="">
                            </div>
                            <div class="display-3 ">
                                Singapore
                            </div>
                        </div>
                        <div class="">
                            10, Anson Road, #27-15 International Plaza, Singapore, 079903
                        </div>
                    </div>
                </div>
                <div class="   h-56">
                    <div class="flex flex-col justify-center h-full px-8 space-y-3">
                        <div class="flex items-center gap-x-3">
                            <div class="h-16 w-20 ">
                                <img src="<?php echo base_url() ?>/images/about/dubai-flag.svg" alt="">
                            </div>
                            <div class="display-3 ">
                                Dubai
                            </div>
                        </div>
                        <div class="">
                            SAIF Zone – R2-2622 PO Box 123695 Sharjah – U.A.E
                            Phone: +971 43216563
                        </div>
                    </div>
                </div>
                <div class="  h-56">
                    <div class="flex flex-col justify-center h-full px-8 space-y-3">
                        <div class="flex items-center gap-x-3">
                            <div class="h-16 w-20 ">
                                <img src="<?php echo base_url() ?>/images/about/ghana.svg" alt="">
                            </div>
                            <div class="display-3 ">
                                Ghana
                            </div>
                        </div>
                        <div class="">
                            Africa operations
                        </div>
                    </div>
                </div>
                <div class="   h-56">
                    <div class="flex flex-col justify-center h-full px-8 space-y-3">
                        <div class="flex items-center gap-x-3">
                            <div class="h-16 w-20 ">
                                <img src="<?php echo base_url() ?>/images/about/saudi-arabia.svg" alt="">
                            </div>
                            <div class="display-3 ">
                                Saudi Arabia
                            </div>
                        </div>
                        <div class="">
                            PO Box 90706, Riyadh – 11623 Kingdom of Saudi Arabia.
                            Phone: +966 11 2926043
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--global ends-->



<?= $this->endSection() ?>