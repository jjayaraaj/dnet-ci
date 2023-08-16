<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Home <?= $this->endSection("title") ?>

<?= $this->section("content") ?>

<!--banner-->


<header class="relative z-50 flex-none text-sm font-semibold leading-6 text-slate-900 bg-cover bg-banner">
    <div class="max-w-container mx-auto h-full ">
        <nav aria-label="Global" class="mx-auto  px-4 sm:px-6 lg:px-8 ">
            <div class="relative flex items-center py-[2.125rem]"><img src="<?php echo base_url() ?>/images/dnet-logo.svg" alt="">
                <div class="menu">
                    <a href="/components">Home

                    </a>
                    <a href="#">Industries <img src="<?php echo base_url() ?>/images/down-arow.svg" alt=""></a>
                    <a href="#">Solutions <img src="<?php echo base_url() ?>/images/down-arow.svg" alt=""></a>
                    <a href="#">Services <img src="<?php echo base_url() ?>/images/down-arow.svg" alt=""></a>
                    <a href="#">Blog</a>
                    <a href="#">Contact us</a>

                </div><button type="button" class="-my-1 -mr-1 ml-6 h-8 w-8 flex items-center justify-center lg:hidden"><span class="sr-only">Open navigation</span><svg viewBox="0 0 24 24" class="h-6 w-6 stroke-slate-900">
                        <path d="M3.75 12h16.5M3.75 6.75h16.5M3.75 17.25h16.5" fill="none" stroke-width="1.5" stroke-linecap="round"></path>
                    </svg></button>
                <div class="hidden lg:ml-4 lg:flex lg:items-center  lg:pl-4">
                    <a class="btn btn-primary" href="#">
                        <span>Enquire Now</span>
                    </a>
                </div>
            </div>
        </nav>

        <div class="  w-full  h-[602px]">


            <!-- inner banner -->
            <div class=" mx-auto max-w-container px-4 sm:px-6 lg:px-8 h-full flex items-center ">
                <div class=" space-y-8">
                    <div class="display-2 !leading-[4rem] max-w-5xl flex-1 ">
                        Accelerate your business velocity with <br><span class="display-lg text-primary">Dynamic Netsoft</span>, a Microsoft
                        Dynamics 365 partner
                    </div>
                    <div class=" text-lg font-semibold">
                        Level up your digital transformation process
                    </div>

                    <button class="btn btn-primary">Connect with Us</button>

                </div>
            </div>

        </div>
    </div>
</header>
<!--banner /-->

<!-- services -->
<div class="">
    <div class=" py-16 max-w-container mx-auto">
        <div class="grid grid-cols-5 gap-4">
            <div class="service">
                <div class="circle">
                    <img src="<?php echo base_url() ?>/images/industry-pioneers.svg" alt="">
                </div>
                <div class="title">Industry<br>Pioneers</div>
            </div>

            <div class="service">
                <div class="circle">
                    <img src="<?php echo base_url() ?>/images/80-customers-worldwide.svg" alt="">
                </div>
                <div class="title">80+ <br> Customers
                    Worldwide</div>
            </div>

            <div class="service">
                <div class="circle">
                    <img src="<?php echo base_url() ?>/images/6-ISV-solutions.svg" alt="">
                </div>
                <div class="title">6<br>
                    ISV Solutions</div>
            </div>

            <div class="service">
                <div class="circle">
                    <img src="<?php echo base_url() ?>/images/10-Industries.svg" alt="">
                </div>
                <div class="title">10+<br>
                    Industries</div>
            </div>

            <div class="service">
                <div class="circle">
                    <img src="<?php echo base_url() ?>/images/worldwide-operations.svg" alt="">
                </div>
                <div class="title">Worldwide<br>
                    Operations</div>
            </div>


        </div>

    </div>
</div>

<!-- dynamics -->
<div class=" bg-secondary py-8 space-y-8">
    <h1 class=" heading-1 text-center">Microsoft Dynamics 365 ISV solutions popular among our clients</h1>

    <div class=" flex gap-16 items-center">
        <div class=" w-2/3 flex ">
            <div class=" relative  ">
                <div class=" h-[30rem] w-[30rem] bg-primary-gradient rounded-full p-14">
                    <div class=" rounded-full w-full h-full bg-white"></div>
                </div>


            </div>

            <div class="relative flex-1 flex flex-col space-y-5 -left-14 ">
                <div class=" dynamics-strip active  right-0 ">
                    <div class="circle"></div>
                    <div class="title">RealEstatePro</div>
                </div>
                <div class=" dynamics-strip default  ">
                    <div class="circle"></div>
                    <div class="title">RealEstatePro</div>
                </div>
                <div class=" dynamics-strip default  ">
                    <div class="circle"></div>
                    <div class="title">Contract Management</div>
                </div>
                <div class=" dynamics-strip default  ">
                    <div class="circle"></div>
                    <div class="title">Bid Management</div>
                </div>
                <div class=" dynamics-strip default">
                    <div class="circle"></div>
                    <div class="title">Treasury Management</div>
                </div>
                <div class="dynamics-strip default  ">
                    <div class="circle"></div>
                    <div>
                        <div class="title">Investment Portfolio
                            Management</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" w-1/2 bg-primary-gradient py-10 px-20 rounded-tl-[3.5rem] border border-l-8 border-l-slate-300">
            <div class="">
                <div class=" text-white space-y-6">

                    <div>RealEstatePro</div>

                    <div class=" space-y-4">
                        <p> The one-stop flagship product for the entire Real Estate
                            and Property Management sector</p>
                        <p> Dynamic Netsoft has led the way in offering ERP and CRM solutions for leading Real Estate and Property businesses worldwide since its inception in 2011. Strategically fabricated with high-priority real estate components, our leading flagship Microsoft Dynamics 365 ISV solution, RealEstatePro, delivers value in automating business processes from commercial to Enterprise customers</p>
                    </div>

                    <div class=" flex gap-6">
                        <button class=" btn btn-yellow">Download Brochure</button>

                        <button class=" btn btn-yellow">Read More</button>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>

<!-- redefine -->

<div class="bg-redefine bg-cover ">
    <div class="py-16 max-w-container mx-auto space-y-24">
        <div class=" flex flex-col gap-2">
            <div class=" text-3xl font-bold">Redefine excellence with Dynamic Netsoft,</div>
            <div class="display-2"><span class="font-medium">a worldwide</span> Microsoft Dynamics 365 - ISV Partner
            </div>
        </div>

        <div class=" flex justify-between items-center">
            <div class="w-1/2 text-xl">
                Specifically designed and pre-configured to streamline Real Estate
                business operations to achieve enhanced productivity
            </div>
            <div><button class="btn btn-primary">Connect with Us</button></div>
        </div>
    </div>
</div>

<!-- idustry vertical -->
<div class="flex items-center bg-primary-gradient">
    <div class="w-2/3 bg-secondary py-16 h-full">
        <div class="px-16">

            <div class=" text-3xl font-bold">Industry Vertical solutions include</div>

            <div class="flex gap-x-6 items-center w-[110%] solution relative z-40 py-16">
                <div class="default">
                    <div class=" image "></div>
                    <div class="  title ">RealEstate</div>
                </div>

                <div class="active">
                    <div class="image"></div>
                    <div class=" title">Construction</div>
                </div>

                <div class="default">
                    <div class=" image"></div>
                    <div class=" title">Retail</div>
                </div>

                <div class="default">
                    <div class=" image"></div>
                    <div class=" title  ">Finance &
                        Investment</div>
                </div>

            </div>
        </div>
    </div>

    <div class=" w-1/2  py-16 h-full">
        <div class="px-16 text-white space-y-8 w-4/5">
            <div class="text-xl font-bold ">RealEstate</div>
            <p class="  ">Microsoft accredited and industry benchmark solutions to manage your real estate business with enhanced operational efficiency, improved customer experience, and structured property leasing and sales management</p>
            <button class="btn btn-yellow">Read More</button>
        </div>

    </div>
</div>


<!-- succsess stories -->
<div class=" bg-success bg-cover ">
    <div class="max-w-container mx-auto">
        <div class="flex justify-between p-16">
            <div class=" space-y-10">
                <div class="text-3xl font-bold">
                    Success Stories
                </div>
                <div class=" space-y-1">
                    <div class="display-2 text-primary">
                        GRIDCo
                    </div>
                    <div class=" text-3xl font-semibold">Ghana Grid Company:</div>
                    <p>Electricity transmission company in Ghana</p>
                </div>
                <button class="btn btn-primary">Read More</button>
            </div>
            <div class="">
                <div class="h-60 w-60 bg-gray-200"></div>
            </div>
        </div>
    </div>
</div>

<!-- testimonial -->
<div class=" max-w-container mx-auto p-16">
    <div class="text-3xl font-bold text-center">Client Testimonials</div>
</div>

<!-- Accreditation -->
<div class=" max-w-container mx-auto p-16">
    <div class="text-3xl font-bold text-center">Accreditation</div>
</div>

<!-- digital partner -->
<div class=" flex bg-secondary">
    <div class=" w-2/5 grow  bg-digital bg-cover rounded-tr-3xl"></div>
    <div class="p-16 w-[60%] space-y-8">
        <div class=" text-3xl font-bold">Why choose Dynamic Netsoft as your digital partner?</div>
        <div class="space-y-4">
            <p>Dynamic Netsoft is a leading Microsoft Dynamics 365 partner and a global ISV, providing vertical-specific solutions built on the Microsoft ecosystem. We are a team of passionate and dedicated professionals working towards a single goal – your business growth.

            <p>Every day we earn our customers' trust by taking their business from survival to growth. Our top-ranked Microsoft Dynamics 365 ISV solutions for Industry verticals have been recognized and rewarded for their feature-rich capabilities and ability to address specific pain points of our customers</p>

            <p>Trusted by more than 100 satisfied customers, our main objective is to bring every aspect of your business on a single platform so you can have a 360⁰ view and 100% visibility. Dynamic Netsoft offers a comprehensive suite of services to enhance the crucial facets of your business.</p>

            <p>So, what are you waiting for?</p>
        </div>
        <button class="btn btn-primary">
            Reach Our Experts
        </button>
    </div>
</div>

<!-- blogs -->
<div class="max-w-container mx-auto py-16">
    <div class=" space-y-8">
        <div class=" text-3xl font-bold text-center">Recent Blog</div>
        <div class=" grid grid-cols-3 gap-8">
            <div class=" bg-gray-200 h-60"></div>
            <div class=" bg-gray-200 h-60"></div>
            <div class=" bg-gray-200 h-60"></div>
        </div>
    </div>
</div>

<!-- faq -->
<div class="max-w-container mx-auto py-16">
    <div class=" space-y-8 max-w-4xl mx-auto">
        <div class=" text-3xl font-bold text-center">Frequently Asked Questions</div>
        <div class=" flex flex-col divide-y " x-data="{selected:1}">
            <div>
                <div class="faq" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Why should I opt for Microsoft Dynamics 365?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 1 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    You should choose Microsoft Dynamics 365 Partners due to the following reasons;
                    · Leader in ERP Software solutions
                    · Benchmark features
                    · Cloud-based products
                    · Centralized platform
                    · Business Analytics
                    · Sure-step implementation methodology
                    · Advanced data security
                    · Real-time business insights
                    · World-class support
                </div>
            </div>

            <div class="faq">
                <div class="icon ">
                    <div class="q">Q</div>

                    <div class="question">Why should I opt for Microsoft Dynamics 365?</div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>

            </div>

            <div class="faq">
                <div class="icon ">
                    <div class="q">Q</div>

                    <div class="question">Why should I opt for Microsoft Dynamics 365?</div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>

            </div>

            <div class="faq">
                <div class="icon ">
                    <div class="q">Q</div>

                    <div class="question">Why should I opt for Microsoft Dynamics 365?</div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>

            </div>
        </div>
    </div>

</div>
<div class=" h-24"></div>
<!-- form -->
<div class=" relative bg-form bg-cover">
    <div class=" max-w-container mx-auto h-full">
        <div class="flex justify-end h-[115%]">
            <div class=" -mt-16 w-2/5 h-full bg-[url(/images/form-bg-2.svg)] bg-cover rounded-3xl p-10">
                <div class="heading-1 text-center !text-primary">Schedule a Demo</div>
                <div class="h-5"></div>
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
                        <input type="text" id="username" name="username" placeholder="Phone Number" required>
                    </div>
                    <div>
                        <label for="username" class="sr-only">Which solution do you want?</label>
                        <input type="text" id="username" name="username" placeholder="Which solution do you want?" required>
                    </div>
                    <div>
                        <label for="username" class="sr-only">Requirment</label>
                        <textarea rows="4"></textarea>
                    </div>

                    <div class=" text-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- footer -->
<div class="bg-primary bg-footer bg-cover ">
    <div class="max-w-container mx-auto py-16 space-y-6">
        <div class=" flex justify-between w-full ">
            <div class=" w-1/3">
                <img src="<?php echo base_url() ?>/images/dnet-logo.svg" alt="">
            </div>
            <div class="flex-1 flex justify-evenly">
                <div class="">
                    <div class="text-xl font-bold text-white">COMPANY OVERVIEW</div>
                    <div class=" flex flex-col footer-link">
                        <a>About us</a>
                        <a>Contact us</a>
                        <a>Blog</a>
                        <a>Become a partner</a>
                        <a>Careers</a>
                        <a>Privacy policy</a>
                        <a>Events</a>
                    </div>
                </div>

                <div class="">
                    <div class="text-xl font-bold text-white">SOLUTIONS</div>
                    <div class=" flex flex-col footer-link">
                        <a>RealEstatePro</a>
                        <a>Contract Management</a>
                        <a> Bid Management</a>
                        <a> Treasury Management</a>
                        <a>Investment Portfolio Management</a>
                        <a>AXOnePay</a>
                        <a>Annata 365</a>
                    </div>
                </div>

                <div class="">
                    <div class="text-xl font-bold text-white">SERVICES</div>
                    <div class=" flex flex-col footer-link">
                        <a>ERP Implementation</a>
                        <a> Upgrade</a>
                        <a>Support</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex justify-between items-center">
            <div class=" text-sm text-white font-light">Copyright © All Rights Reserved by Dynamic Netsoft Technologies Pvt Ltd</div>
            <div class=" flex flex-col">
                <div class="text-xl text-white font-bold">CONNECT WITH US</div>
                <div class="flex">

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>