<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Investment Portfolio Management Software on Dynamics 365
<?= $this->endSection("title") ?>
<?= $this->section("description") ?>Juggling with multiple investment systems? Manage all your investments on a single platform with Dynamic Netsoft’s Investment Portfolio Management Software.<?= $this->endSection("description") ?>

<?= $this->section("content") ?>

<div class="max-w-container ">
    <div class=" flex h-full items-center">
        <div class=" w-1/2">
            <img src="<?php echo base_url() ?>/images/thankyou/mail.svg" alt="">
        </div>
        <div class=" space-y-6">
            <div class=" display-2 w-1/2 leading-snug">
                Thank you for accessing the brochure. It will be received to your email shortly
            </div>
            <div class=" flex">

                <?= $this->include('/layouts/back-home') ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>