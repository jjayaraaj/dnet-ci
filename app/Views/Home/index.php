<?= $this->extend("layouts/default") ?>

<?= $this->section("content") ?>

<!--banner-->


<header class="relative z-50 flex-none text-sm font-semibold leading-6 text-slate-900  bg-secondary">
    <div class="max-w-container mx-auto h-full border">
        <nav aria-label="Global" class="mx-auto  px-4 sm:px-6 lg:px-8 ">
            <div class="relative flex items-center py-[2.125rem]"><a class="flex-none text-slate-900" href="/"><span class="sr-only">Tailwind UI</span><svg class="h-6 w-auto" aria-hidden="true" viewBox="0 0 160 24" fill="none">
                        <path d="M18.724 1.714c-4.538 0-7.376 2.286-8.51 6.857 1.702-2.285 3.687-3.143 5.957-2.57 1.296.325 2.22 1.271 3.245 2.318 1.668 1.706 3.6 3.681 7.819 3.681 4.539 0 7.376-2.286 8.51-6.857-1.701 2.286-3.687 3.143-5.957 2.571-1.294-.325-2.22-1.272-3.245-2.32-1.668-1.705-3.6-3.68-7.819-3.68zM10.214 12c-4.539 0-7.376 2.286-8.51 6.857 1.701-2.286 3.687-3.143 5.957-2.571 1.294.325 2.22 1.272 3.245 2.32 1.668 1.705 3.6 3.68 7.818 3.68 4.54 0 7.377-2.286 8.511-6.857-1.702 2.286-3.688 3.143-5.957 2.571-1.295-.326-2.22-1.272-3.245-2.32-1.669-1.705-3.6-3.68-7.82-3.68z" class="fill-sky-400"></path>
                        <path d="M51.285 9.531V6.857h-3.166v-3.6l-2.758.823v2.777h-2.348v2.674h2.348v6.172c0 3.343 1.686 4.526 5.924 4.011V17.22c-2.094.103-3.166.129-3.166-1.517V9.53h3.166zm12.087-2.674v1.826c-.97-1.337-2.476-2.16-4.468-2.16-3.472 0-6.357 2.931-6.357 6.763 0 3.805 2.885 6.763 6.357 6.763 1.992 0 3.498-.823 4.468-2.186v1.851h2.758V6.857h-2.758zM59.338 17.4c-2.297 0-4.034-1.723-4.034-4.114 0-2.392 1.736-4.115 4.034-4.115s4.034 1.723 4.034 4.115c0 2.391-1.736 4.114-4.034 4.114zM70.723 4.929c.97 0 1.762-.823 1.762-1.775 0-.977-.792-1.774-1.762-1.774s-1.762.797-1.762 1.774c0 .952.792 1.775 1.762 1.775zm-1.379 14.785h2.758V6.857h-2.758v12.857zm5.96 0h2.757V.943h-2.758v18.771zM95.969 6.857l-2.502 8.872-2.655-8.872h-2.63L85.5 15.73l-2.477-8.872h-2.91l4.008 12.857h2.707l2.68-8.665 2.656 8.665h2.706L98.88 6.857h-2.911zm6.32-1.928c.97 0 1.762-.823 1.762-1.775 0-.977-.792-1.774-1.762-1.774s-1.762.797-1.762 1.774c0 .952.792 1.775 1.762 1.775zm-1.379 14.785h2.758V6.857h-2.758v12.857zm12.674-13.191c-1.736 0-3.115.643-3.957 1.98V6.857h-2.758v12.857h2.758v-6.891c0-2.623 1.43-3.703 3.242-3.703 1.737 0 2.86 1.029 2.86 2.983v7.611h2.757V11.82c0-3.343-2.042-5.297-4.902-5.297zm17.982-4.809v6.969c-.971-1.337-2.477-2.16-4.468-2.16-3.473 0-6.358 2.931-6.358 6.763 0 3.805 2.885 6.763 6.358 6.763 1.991 0 3.497-.823 4.468-2.186v1.851h2.757v-18h-2.757zM127.532 17.4c-2.298 0-4.034-1.723-4.034-4.114 0-2.392 1.736-4.115 4.034-4.115 2.297 0 4.034 1.723 4.034 4.115 0 2.391-1.737 4.114-4.034 4.114z" fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M145.532 3.429h8.511c.902 0 1.768.36 2.407 1.004.638.643.997 1.515.997 2.424v8.572c0 .909-.359 1.781-.997 2.424a3.394 3.394 0 01-2.407 1.004h-8.511a3.39 3.39 0 01-2.407-1.004 3.438 3.438 0 01-.997-2.424V6.857c0-.91.358-1.781.997-2.424a3.39 3.39 0 012.407-1.004zm-5.106 3.428c0-1.364.538-2.672 1.495-3.636a5.09 5.09 0 013.611-1.507h8.511c1.354 0 2.653.542 3.61 1.507a5.16 5.16 0 011.496 3.636v8.572a5.16 5.16 0 01-1.496 3.636 5.086 5.086 0 01-3.61 1.506h-8.511a5.09 5.09 0 01-3.611-1.506 5.164 5.164 0 01-1.495-3.636V6.857zm10.907 6.251c0 1.812-1.359 2.916-3.193 2.916-1.823 0-3.182-1.104-3.182-2.916v-5.65h1.633v5.52c0 .815.429 1.427 1.549 1.427 1.12 0 1.549-.612 1.549-1.428v-5.52h1.644v5.652zm1.72 2.748V7.457h1.644v8.4h-1.644z" fill="currentColor"></path>
                    </svg></a>
                <div class="ml-auto hidden lg:flex lg:items-center"><a href="/components">Components</a><a class="ml-8" href="/templates">Templates</a><a class="ml-8" href="/documentation">Docs</a></div><button type="button" class="-my-1 -mr-1 ml-6 flex h-8 w-8 items-center justify-center lg:hidden"><span class="sr-only">Open navigation</span><svg viewBox="0 0 24 24" class="h-6 w-6 stroke-slate-900">
                        <path d="M3.75 12h16.5M3.75 6.75h16.5M3.75 17.25h16.5" fill="none" stroke-width="1.5" stroke-linecap="round"></path>
                    </svg></button>
                <div class="hidden lg:ml-8 lg:flex lg:items-center lg:border-l lg:border-slate-900/15 lg:pl-8"><a class="inline-flex justify-center rounded-lg text-sm font-semibold py-2.5 px-4 bg-slate-900 text-white hover:bg-slate-700 -my-2.5 ml-8" href="/all-access"><span>Get all-access <span aria-hidden="true">→</span></span></a></div>
            </div>
        </nav>

        <div class="  w-full  h-[602px]">


            <!-- inner banner -->
            <div class=" mx-auto max-w-container px-4 sm:px-6 lg:px-8 h-full border flex items-center ">
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

                </div>
                <div class="title">Industry<br>Pioneers</div>
            </div>

            <div class="service">
                <div class="circle">

                </div>
                <div class="title">80+ <br> Customers
                    Worldwide</div>
            </div>

            <div class="service">
                <div class="circle">

                </div>
                <div class="title">6<br>
                    ISV Solutions</div>
            </div>

            <div class="service">
                <div class="circle">

                </div>
                <div class="title">10+<br>
                    Industries</div>
            </div>

            <div class="service">
                <div class="circle">

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
        <div class=" w-1/2">
            <div class=" relative -left-1/4">
                <div class=" h-[36rem] w-[36rem] bg-primary rounded-full p-24">
                    <div class=" rounded-full w-full h-full bg-white"></div>
                </div>
            </div>
        </div>
        <div class=" w-1/2 bg-primary py-10 px-20 rounded-tl-[3.5rem] border border-l-8 border-l-slate-300">
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

<div class=" bg-gray-100 ">
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
<div class="flex">
    <div class="w-1/2 bg-secondary py-16">
        <div class="px-16">
            <div class=" text-3xl font-bold">Industry Vertical solutions include</div>
        </div>
    </div>

    <div class=" w-1/2 bg-primary py-16">
        <div class="px-16 text-white space-y-8 w-4/5">
            <div class="text-xl font-bold ">RealEstate</div>
            <p class="  ">Microsoft accredited and industry benchmark solutions to manage your real estate business with enhanced operational efficiency, improved customer experience, and structured property leasing and sales management</p>
            <button class="btn btn-yellow">Read More</button>
        </div>

    </div>
</div>


<!-- succsess stories -->
<div class=" bg-blue-500">
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
    <div class=" w-2/5 grow bg-gray-300 rounded-tr-3xl"></div>
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


<?= $this->endSection() ?>