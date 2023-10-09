<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Not Found <?= $this->endSection("title") ?>
<?= $this->section("description") ?>Seeking to optimize your real estate sales strategy? Unleash the potential of Dynamics 365 for property sales management – Make your vision a reality! <?= $this->endSection("description") ?>

<?= $this->section("content") ?>

<div class=" max-w-container">
    <div class=" h-40"></div>

    <div class="flex items-center justify-between">
        <div class=" space-y-4">
            <div class=" display-1">OOPS, LOOK LIKE YOU’RE LOST</div>
            <div>
                <img src="<?php echo base_url() ?>/images/404/404-page-not-found.svg" class=" w-4/5" alt="">
            </div>
            <div class=" display-1 text-primary text-center">PAGE NOT FOUND</div>
        </div>




        <div class=" space-y-5">
            <div class=" flex bg-secondary  rounded-3xl px-5 py-2 items-center gap-x-6 w-96">
                <img src="<?php echo base_url() ?>/images/404/real-estate-pro.svg" class=" " alt="">

                <a class=" text-primary font-semibold text-xl">RealEstatePro</a>
            </div>


            <div class=" flex bg-secondary  rounded-3xl px-5 py-2 items-center gap-x-6 w-96">
                <img src="<?php echo base_url() ?>/images/404/contract-management.svg" class=" " alt="">

                <a class=" text-primary font-semibold text-xl">Contract Management</a>
            </div>

            <div class=" flex bg-secondary  rounded-3xl px-5 py-2 items-center gap-x-6 w-96">
                <img src="<?php echo base_url() ?>/images/404/bid-management.svg" class=" " alt="">

                <a class=" text-primary font-semibold text-xl">Bid Management</a>
            </div>

            <div class=" flex bg-secondary  rounded-3xl px-5 py-2 items-center gap-x-6 w-96">
                <img src="<?php echo base_url() ?>/images/404/treasury-management.svg" class=" " alt="">

                <a class=" text-primary font-semibold text-xl">Treasury Management</a>
            </div>

            <div class=" flex bg-secondary  rounded-3xl px-5 py-2 items-center gap-x-6 w-96">
                <img src="<?php echo base_url() ?>/images/404/investment-portfolio-management.svg" class=" " alt="">

                <a class=" text-primary font-semibold text-xl">Investment Portfolio
                    Management</a>
            </div>

            <div class=" flex bg-secondary  rounded-3xl px-5 py-2 items-center gap-x-6 w-96">
                <img src="<?php echo base_url() ?>/images/404/ax-one-pay.svg" class=" " alt="">

                <a class=" text-primary font-semibold text-xl">AXOnePay</a>
            </div>
        </div>

    </div>
    <div class="h-24"></div>
    <div class="flex gap-x-4 justify-center">
        <div class=" flex items-center">

            <a href="<?php echo base_url() ?>" class="btn btn-primary flex">
                <img src="<?php echo base_url() ?>/images/404/home.svg" alt="">
                Back to home
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>

            </a>
        </div>

        <div class=" flex">

            <a href="tel:" class="btn btn-primary flex items-center">
                <img src="<?php echo base_url() ?>/images/404/phone.svg" alt="">
                Contact us
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>

            </a>
        </div>


    </div>
</div>
<div class="h-24"></div>
<?= $this->endSection() ?>