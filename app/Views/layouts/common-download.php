<template x-teleport="body">
    <div x-show="commonDownloadDivOpen" x-transition id="downloadDiv" class="fixed h-screen  w-screen top-0 left-0 bg-slate-600 z-[9999] bg-opacity-80 flex items-center justify-center">
        <div class=" bg-white   w-[60%]  bg-formBg3 bg-cover rounded-3xl flex" @click.outside="commonDownloadDivOpen = false">
            <div class="w-1/2  bg-commonDownloadImg bg-cover rounded-tl-3xl rounded-bl-3xl">
            </div>
            <div class=" w-1/2 p-8 ">


                <div class="heading-1 text-center ">Download Brochure</div>
                <div class="h-5"></div>

                <form class="space-y-3" action="<?php echo base_url() ?>/common-download" method="POST" id="commonDownloadForm">
                    <input type="hidden" id="commonDownloadFlag" name="commonDownloadFlag" x-model="commonFormData.commonDownloadFlag" value="" />
                    <div>
                        <label for="name" class="sr-only">Name:</label>
                        <input type="text" id="name" name="commonFormName" x-model="commonFormData.name.value" placeholder="Name" data-error="#errNm1">
                        <!-- <div class="errorTxt">
                            <span id="errNm1"></span>
                        </div> -->

                    </div>
                    <div>
                        <label for="company" class="sr-only">Company Name:</label>
                        <input type="text" id="company" name="commonFormCompany" x-model="commonFormData.company.value" placeholder="Company Name">
                        <div x-show="commonFormData.company.error" class="text-sm text-red-500">Enter name</div>
                    </div>
                    <div>
                        <label for="designation" class="sr-only">Designation:</label>
                        <input type="text" id="designation" name="commonFormDesignation" x-model="commonFormData.designation" placeholder="Designation">
                    </div>
                    <div>
                        <label for="email" class="sr-only">E-Mail ID:</label>
                        <input type="email" id="email" name="commonFormEmail" x-model="commonFormData.email" placeholder="E-Mail ID">
                    </div>
                    <div>
                        <label for="phone4" class="sr-only">Phone Number:</label>
                        <input type="text" id="phone4" name="commonFormPhone4" x-model="commonFormData.phone4" placeholder="Phone Number">
                    </div>

                    <div class=" bg-white rounded-3xl p-6 relative ">
                        <div class=" font-semibold">Solution you are interested?</div>
                        <div class="flex gap-x-4 pt-3">
                            <div class="space-y-3">
                                <div class="flex items-center gap-x-2">

                                    <input type="radio" id="propMan1" name="solution" value="Property Management">
                                    <label for="propMan1" class="text-xs">Property Management</label>
                                </div>
                                <div class="flex items-center gap-x-2">

                                    <input type="radio" id="propMan2" name="solution" value="Bid Management">
                                    <label for="propMan2" class="text-xs">Bid Management</label>
                                </div>
                                <div class="flex items-center gap-x-2">

                                    <input type="radio" id="propMan3" name="solution" value="Treasury Management">
                                    <label for="propMan3" class="text-xs">Treasury Management</label>
                                </div>
                            </div>


                            <div class=" space-y-3 ">

                                <div class="flex items-center gap-x-2">

                                    <input type="radio" id="propMan4" name="solution" value="Contract Management">
                                    <label for="propMan4" class="text-xs">Contract Management</label>
                                </div>
                                <div class="flex items-center gap-x-2">

                                    <input type="radio" id="propMan5" name="solution" value="Investment Portfolio
                                    Management">
                                    <label for="propMan5" class="text-xs">Investment Portfolio
                                        Management</label>
                                </div>
                                <div class="flex items-center gap-x-2">

                                    <input type="radio" id="propMan6" name="solution" value="AXOnePay">
                                    <label for="propMan6" class="text-xs">AXOnePay</label>
                                </div>
                            </div>
                        </div>
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
</template>