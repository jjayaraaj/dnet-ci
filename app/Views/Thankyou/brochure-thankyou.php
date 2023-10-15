<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Thankyou
<?= $this->endSection("title") ?>
<?= $this->section("description") ?>Juggling with multiple investment systems? Manage all your investments on a single platform with Dynamic Netsoft’s Investment Portfolio Management Software.<?= $this->endSection("description") ?>

<?= $this->section("content") ?>


<style>
    .bgThankYou1 {
        background-image: url('<?php echo base_url() . '/images/thankyou/inbox.svg'; ?>');
    }
</style>

<div class="max-w-container bgThankYou1">
    <div class=" flex h-screen items-center justify-center w-full">

        <div class=" space-y-6 text-center">
            <div class=" display-2 w-1/2 mx-auto leading-snug">
                We appreciate your interest in the brochures. It will be on its way to your inbox
            </div>
            <div class=" flex justify-center">

                <?= $this->include('/layouts/back-home') ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>