<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Microsoft Dynamics Partner | D365 F&O - Dynamics NetSoft <?= $this->endSection("title") ?>
<?= $this->section("description") ?>Stuck with multiple legacy systems? Evolve with Dynamic Netsoft, a Microsoft Dynamics 365 Gold partner offering ERP & CRM solutions for Property & Construction industries.<?= $this->endSection("description") ?>
<?= $this->section("content") ?>

<!--banner-->


<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-cover bg-about-banner">
    <div class="max-w-container mx-auto h-full big-screen">
        <div class="banner-space"></div>

        <div class="  w-full  h-[500px]">


            <!-- inner banner -->
            <div class=" mx-auto max-w-container big-screen  h-full flex items-center ">
                <div class=" space-y-8">
                    <h1 class="text-[2rem] font-bold max-w-3xl flex-1 ">
                        <span class="display-lg text-primary  !leading-[5rem]">Contact Us
                    </h1>


                </div>
            </div>

        </div>
    </div>
</header>
<!--banner /-->

<!-- section2 -->
<section class="max-w-container py-16">
    <div class="flex justify-between items-center">
        <div class="w-1/2 space-y-6">
            <div class="display-2 text-primary">Let’s Connect</div>
            <div class="flex flex-col ">
                <a href="mailto:enquiry@dnetsoft.com">enquiry@dnetsoft.com</a>
                <a href="mailto:sales@dnetsoft.com.com">sales@dnetsoft.com</a>
            </div>
            <div class="md: w-2/3">
                Our team of experts would love to hear from you to discuss all our services in more detail and how they can make a difference to your business.
            </div>
        </div>

        <div class="relative w-1/3 z-40">
            <div class=" -mt-72 bg-gray-100 w-full bg-form-2 bg-cover rounded-3xl px-6 py-4 space-y-4 ">


                <form class=" space-y-5">
                    <div>
                        <label for="username" class="sr-only">Name:</label>
                        <input type="text" id="username" name="username" placeholder="Name" required>
                    </div>
                    <div>
                        <label for="username" class="sr-only">Company Name:</label>
                        <input type="text" id="username" name="username" placeholder="Company Name" required>
                    </div>
                    <div>
                        <label for="username" class="sr-only">Designation:</label>
                        <input type="text" id="username" name="username" placeholder="Designation" required>
                    </div>
                    <div>
                        <label for="username" class="sr-only">E-Mail ID:</label>
                        <input type="email" id="username" name="username" placeholder="E-Mail ID" required>
                    </div>
                    <div>
                        <label for="username" class="sr-only">Phone Number:</label>
                        <input type="text" id="phone" name="username" placeholder="Phone Number" required>
                    </div>

                    <div>
                        <label for="username" class="sr-only">Requirment</label>
                        <textarea rows="4"></textarea>
                    </div>

                    <div class=" text-center">
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
    <div class=" max-w-container space-y-16">
        <div class=" heading-1 text-center">Global Reach</div>
        <div class=" md:w-4/5 mx-auto">
            <div class=" grid grid-cols-3">
                <div class=" border-r border-b  h-56 px-8 items-center">
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
                <div class=" border-r border-b  px-8 h-56">
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
                <div class="   border-b h-56">
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
                <div class=" border-r   h-56">
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
                <div class=" border-r   h-56">
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