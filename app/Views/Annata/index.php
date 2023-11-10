<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Annata 365
<?= $this->endSection("title") ?>
<?= $this->section("description") ?>Struggling with contract chaos? Uncover strategic solutions with Microsoft Dynamics 365 Contract Management. Optimize your construction and engineering projects.<?= $this->endSection("description") ?>

<?= $this->section("content") ?>

<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-right-bottom   bg-cover bg-annata1  ">
    <div class=" mobile-header-transparent">
        <div class="banner-space"></div>
        <div class="mx-auto h-full big-screen">


            <div class=" py-16 md:py-0   w-full h-auto  md:h-[500px]">


                <!-- inner banner -->
                <div class=" inner-banner ">
                    <div class=" first-div ">
                        <h1 class="h1">
                            <span class="span ">Annata 365</span><br>

                        </h1>
                        <!-- <div class=" text-base md:text-lg font-semibold">
                        Level up your digital transformation process
                    </div> -->

                        <div class="btn-div">
                            <?= $this->include('/layouts/request-demo') ?>
                        </div>

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
            <div class="img-section hidden md:block">
                <img src="<?php echo base_url() ?>/images/annata/annata-365-2.svg" alt="">
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












<?= $this->endSection() ?>