<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Investment Portfolio Management Software on Dynamics 365
<?= $this->endSection("title") ?>
<?= $this->section("description") ?>Juggling with multiple investment systems? Manage all your investments on a single platform with Dynamic Netsoft’s Investment Portfolio Management Software.<?= $this->endSection("description") ?>

<?= $this->section("content") ?>

<div class="max-w-container ">
    <div class=" flex flex-col md:flex-row h-full items-center">
        <div class=" w-full md:w-1/2">
            <img src="<?php echo base_url() ?>/images/thankyou/mail.svg" alt="">
        </div>
        <div class=" space-y-6 p-8 md:p-0 text-center md:text-left">
            <div class=" display-2 w-full md:w-1/2 leading-snug">
                <input type="hidden" name="downloadInputUrl" id="downloadInputUrl" value="<?php echo session()->get('downloadFile')  ?>">
                Thank you for accessing the brochure. It will be received to your email shortly
            </div>
            <div class=" flex justify-center md:justify-start">



                <?= $this->include('/layouts/back-home') ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>