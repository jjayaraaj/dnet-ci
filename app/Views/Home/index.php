<?= $this->extend("layouts/default") ?>

<?= $this->section("content") ?>

<!--banner-->
    <div class="h-[550px] bg-primary w-full">
        <div class="max-w-screen-2xl w-full mx-auto">
            <div class="flex w-full justify-between">
                <div class=" w-1/3"></div>
            <!--nav-->
                <nav class="flex gap-x-6    ">
                    <a href="#">Homes</a>
                    <a href="#">Industry</a>
                    <a href="#">Solution</a>
                    <a href="#">Service</a>
                    <a href="#">About us</a>
                    <a href="#">Conatact us</a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>
</a>
                </nav>
            <!--nav/-->
            </div>
        </div>

        <!-- inner banner -->
        <div>
            <div class="display-1">
            Accelerate your business velocity with
            </div>
        </div>

    </div>
<!--banner /-->

<?= $this->endSection() ?>