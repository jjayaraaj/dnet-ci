<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Microsoft Dynamics 365 HR and Payroll Management - AXOnePay
<?= $this->endSection("title") ?>
<?= $this->section("description") ?>Simplify your payroll process & enhance employee service capabilities with our Microsoft Dynamics 365 Payroll Solution. <?= $this->endSection("description") ?>

<?= $this->section("content") ?>

<header class="relative z-40 flex-none text-sm font-semibold leading-6 text-slate-900 bg-right-bottom   bg-cover bg-axone-1  ">
    <div class=" mobile-header-transparent">

        <div class="banner-space"></div>
        <div class=" mx-auto h-full big-screen">


            <div class=" py-16 md:py-0   w-full h-auto  md:h-[500px]">


                <!-- inner banner -->
                <div class=" inner-banner ">
                    <div class=" first-div ">
                        <h1 class="h1">
                            Experience simplified and faster Payroll Management with
                            <span class="span ">AXOnePay</span>
                            leading HR & Payroll Solution on<span class="span"> Microsoft Dynamics 365</span>
                        </h1>
                        <!-- <div class=" text-base md:text-lg font-semibold">
                        Level up your digital transformation process
                    </div> -->

                        <div class="btn-div">
                            <?= $this->include('/layouts/download') ?>
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
                <img src="<?php echo base_url() ?>/images/axone/microsoft-dynamics-365-hr-and-payroll.svg" alt="">
            </div>
            <div class="content-section ">
                <h2>Optimize Your HR Operations with Our Advanced <span class="text-d-yellow">Payroll Solution on Microsoft Dynamics 365</span></h2>
                <div class="sub-content">
                    <p class="">
                        AXOnePay, our cloud-based tax-compliant Payroll software on Microsoft Dynamics 365 allows you to effortlessly manage and track all employee details, including employee dependents, family members, and their relevant information. The system empowers you to efficiently handle attendance, overtime, performance-linked incentives, leaves, expense reimbursements, and various deductions mandated by labor and tax laws.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section 1 ends -->

<!-- section2 -->
<div class=" bg-secondary">
    <div class="inner-section-2">
        <div class="h2-div">
            <h2>Client-centric Features of Microsoft Dynamics HR Management Solution to Amplify Your Operational Efficiency</h2>
        </div>

        <div class="content-div ">
            <p class="!text-white md:!text-black">The robust features of our Payroll Solution on Microsoft Dynamics Finance & Operations act as catalysts for your business growth by streamlining HR and payroll operations, ensuring compliance, enhancing efficiency, and enabling strategic decision-making. </p>
        </div>
    </div>
</div>
<!-- section2 ends -->

<!-- section 3 -->
<div class=" md:bg-secondary bg-white pb-16" x-data="{feature: 1}">
    <div class="max-w-container ">

        <div class="inner-section-box">
            <div class="tab h-[550px] overflow-y-auto">
                <div class="item" @click="feature = 1" :class="feature === 1 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/axone/company-parameters.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 1 ? 'active' : 'default'">Company Parameters</div>
                    </div>
                </div>


                <div class="item" @click="feature = 2" :class="feature === 2 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/axone/vacation.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 2 ? 'active' : 'default'">Vacation</div>
                    </div>
                </div>

                <div class="item" @click="feature = 3" :class="feature === 3 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/axone/employee-loans.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="" :class="feature === 3 ? 'active' : 'default'">Employee Loans</div>
                    </div>
                </div>

                <div class="item" @click="feature = 4" :class="feature === 4 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/axone/employee-transactions.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 4 ? 'active' : 'default'">Employee transactions</div>
                    </div>
                </div>

                <div class="item" @click="feature = 5" :class="feature === 5 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/axone/employee-payments.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 5 ? 'active' : 'default'">Employee Payments</div>
                    </div>
                </div>


                <div class="item" @click="feature = 6" :class="feature === 6 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/axone/salary-processing.svg" alt="">
                    </div>
                    <div class="text">
                        <div :class="feature === 6 ? 'active' : 'default'">Salary Processing</div>
                    </div>
                </div>


                <div class="item" @click="feature = 7" :class="feature === 7 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/axone/consolidated-reports-for-finance-and-payroll.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="default" :class="feature === 7 ? 'active' : 'default'">Consolidated Reports for Finance and Payroll</div>
                    </div>
                </div>

                <div class="item" @click="feature = 8" :class="feature === 8 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/axone/document-management.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="default" :class="feature === 8 ? 'active' : 'default'">Document Management</div>
                    </div>
                </div>

                <div class="item" @click="feature = 9" :class="feature === 9 ? 'active' : ''">
                    <div class=" circle">
                        <img src="<?php echo base_url() ?>/images/axone/employee-self-service.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="default" :class="feature === 9 ? 'active' : 'default'">Employee self-service</div>
                    </div>
                </div>




            </div>
            <div class="content md:h-[550px]">
                <!-- content 1  -->

                <div class="mobile-tab " @click="feature = 1">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Company Parameters</div>
                    </div>

                    <svg x-show="feature=== 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 1">
                    <div class=" heading-1 hidden md:block ">Company Parameters</div>
                    <ul>
                        <li>Our advanced Dynamics 365 Payroll Module aids in setting up company parameters based on the specific Labour Law requirements of each country.</li>
                        <li>Ability to define Employee Master based on Employee types, Employee Groups, and other customizable criteria, Configuring Departments, contract Profession, Iqama Profession, Nationalities, Religion, Job positions, Relation Types, and other intricate aspects.</li>
                        <li>Flexibility in defining End of Service Ranges for all employees, ensuring compliance and setup of essential Company documents, with a well-documented and organized system.</li>
                    </ul>


                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
                    </div>
                </div>



                <!-- content 2  -->

                <div class="mobile-tab " @click="feature = 2">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Vacation</div>
                    </div>

                    <svg x-show="feature=== 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>

                </div>

                <div class="desktop-content" x-show="feature===2">
                    <div class=" heading-1 hidden md:block ">Vacation</div>
                    <ul>
                        <li>Our Dynamics 365 HR Management Software allows the configuration of multiple annual vacation types, including precise durations such as 21 days, 30 days, and more.</li>
                        <li>Provides flexibility to define distinct calculation methodologies for vacation pay, catering to both collective and individual employee requirements.</li>
                        <li>Enables accurate calculation of vacation balances for different types, with customizable options for carry-forward or non-carry-forward policies.</li>
                        <li>Ensures meticulous validation of employee leave balances during leave transactions, eliminating errors and maintaining accurate records.</li>
                    </ul>


                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
                    </div>
                </div>




                <!-- content 3  -->

                <div class="mobile-tab " @click="feature = 3">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Employee Loans</div>
                    </div>

                    <svg x-show="feature=== 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 3">
                    <div class=" heading-1 hidden md:block ">Employee Loans</div>
                    <ul>
                        <li>
                            The all-in-one Microsoft Dynamics 365 Hr & Payroll Solution facilitates the setting of a diverse range of loan types, encompassing personal loans, salary advances, car loans, and more.
                        </li>
                        <li>
                            Empowers the inclusion or exclusion of loan deductions during the monthly payroll calculation, ensuring meticulous customization and precision.
                        </li>
                        <li>
                            Offers the flexibility to suspend loans for a specified period, allowing for temporary relief or adjustment as needed.
                        </li>
                    </ul>


                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
                    </div>
                </div>



                <!-- content 4  -->

                <div class="mobile-tab " @click="feature = 4">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">Employee transactions</div>
                    </div>
                    <svg x-show="feature=== 4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 4">
                    <div class=" heading-1 hidden md:block ">Employee transactions</div>
                    <ul>
                        <li>
                            Our Microsoft Payroll Software allows the configuration of additional transactions related to overtime, loss of pay, and various other intricate additions or deductions to the monthly payroll.
                        </li>
                        <li>
                            Offers the capability to meticulously record and track Government Relation Officer Transactions, ensuring compliance and efficient follow-up actions.
                        </li>
                        <li>
                            Enables the seamless recording and tracking of Business Trip transactions, facilitating accurate expense management and reimbursement processes.
                        </li>
                        <li>
                            Provides the ability to define and manage fixed assets issued to employees, ensuring proper documentation and tracking of valuable resources.
                        </li>
                    </ul>


                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
                    </div>
                </div>


                <!-- content 5  -->

                <div class="mobile-tab " @click="feature = 5">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Employee Payments
                        </div>
                    </div>

                    <svg x-show="feature=== 5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature=== 5">
                    <div class=" heading-1 hidden md:block ">
                        Employee Payments
                    </div>
                    <ul>
                        <li>The Microsoft Dynamics 365 HR & Payroll Solution facilitates the posting of payment vouchers to employees through diligently designed workflows, offering versatile options such as Bank transfer, check, cash, and more.</li>
                        <li>Enables the comprehensive recording of payments related to loans, loans repayment, vacation pay, monthly salary, and other financial aspects through streamlined Payroll Disbursements.</li>

                    </ul>

                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
                    </div>
                </div>



                <!-- content 6  -->

                <div class="mobile-tab " @click="feature = 6">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Salary Processing
                        </div>
                    </div>

                    <svg x-show="feature=== 6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>

                </div>

                <div class="desktop-content" x-show="feature=== 6">
                    <div class=" heading-1 hidden md:block ">
                        Salary Processing
                    </div>
                    <ul>
                        <li>
                            Our advanced solution of HR & Payroll on Microsoft Dynamics 365 Finance & Operations offers sophisticated salary processing options, allowing customization by employee, department, and employee groups for precise and tailored remuneration management.
                        </li>
                        <li>
                            Provides the flexibility to halt salary payments for specific employees, ensuring control and accuracy in the disbursement process, and enables seamless integration of vacation pay with the monthly payroll, simplifying the handling of comprehensive employee compensation.
                        </li>
                        <li>
                            Offers convenient email options to effortlessly send pay slips to employees, ensuring efficient and secure communication of sensitive information and integrates seamlessly with banking systems by generating the required Bank file format for swift and error-free salary transfers.
                        </li>
                    </ul>

                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
                    </div>
                </div>



                <!-- content 7  -->

                <div class="mobile-tab " @click="feature = 7">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Consolidated Reports for Finance and Payroll
                        </div>
                    </div>

                    <svg x-show="feature=== 7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 7">
                    <div class=" heading-1 hidden md:block ">
                        Consolidated Reports for Finance and Payroll
                    </div>
                    <ul>
                        <li>
                            Our innovative Payroll Solution on Dynamics 365 provides an integrated platform to access comprehensive and consolidated payroll and accounting reports, enabling a holistic view of financial and payroll data in a centralized location.
                        </li>
                        <li>
                            Enhances visibility into payroll expenses, offering a deeper understanding and analysis of financial implications associated with remuneration.
                        </li>
                        <li>
                            Empowers businesses with actionable insights by presenting critical financial and payroll information in a coherent and organized manner.
                        </li>
                    </ul>


                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
                    </div>
                </div>

                <!-- content 8  -->

                <div class="mobile-tab " @click="feature = 8">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Document Management
                        </div>
                    </div>

                    <svg x-show="feature=== 8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 8">
                    <div class=" heading-1 hidden md:block ">
                        Document Management
                    </div>
                    <ul>
                        <li>
                            This sophisticated HR & Payroll Solution on Dynamics 365 allows you to effortlessly generate customized letters, encompassing bank loans, account openings, and letters of experience, utilizing the versatile document template feature, enhanced by configurable approval levels facilitated through intricate workflows.
                        </li>
                        <li>
                            Seamlessly receive notifications and obtain approvals via email, ensuring efficient collaboration and streamlined document management processes.
                        </li>
                    </ul>


                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
                    </div>
                </div>

                <!-- content 9  -->

                <div class="mobile-tab " @click="feature = 9">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Employee self-service
                        </div>
                    </div>

                    <svg x-show="feature=== 9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>

                    <svg x-show="feature !== 9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 9">
                    <div class=" heading-1 hidden md:block ">
                        Employee self-service
                    </div>
                    <ul>
                        <li>Our Market-leading Payroll software on Dynamics 365 enables convenient access to comprehensive employee information, including payslips, via the Enterprise Portal.</li>
                        <li>Empower employees to effortlessly generate payslips for any desired month, further enhancing transparency and autonomy in their financial management.</li>
                        <li>Facilitate the seamless initiation of requests for leaves and loans directly from the portal, ensuring a streamlined workflow process for approval.</li>
                        <li>Generate automated leave and loan transactions based on the approved requests, thus maximizing efficiency and minimizing administrative burden.</li>
                    </ul>


                    <div>
                        <?= $this->include('/layouts/book-demo') ?>
                    </div>
                </div>

                <!-- content 10  -->

                <!-- <div class="mobile-tab " @click="feature = 10">
                    <div class="left-container">
                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                                <path d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                            </svg>
                        </div>
                        <div class=" heading-1 !text-white">
                            Open Platform for Integration
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z" clip-rule="evenodd" />
                    </svg>


                </div>

                <div class="desktop-content" x-show="feature === 10">
                    <div class=" heading-1 hidden md:block ">
                        Open Platform for Integration
                    </div>
                    <ul>
                        <li>Our Investment Portfolio Management software provides an open platform for seamless integration with a range of MS Windows applications and third-party software.</li>
                        <li>Open architecture facilitates integration with any tool to push and/or pull data enabling the flow of information across functions.</li>

                    </ul>

                    <div>
                       
                    </div>
                </div> -->


            </div>
        </div>

    </div>
</div>
<!-- section -3 ends -->



<!-- section-5 -->
<div class="  bg-axone-4 bg-cover">
    <div class=" max-w-container space-y-8 py-16 big-screen">
        <div class="flex">
            <div class=" md:w-2/5 space-y-8 text-center md:text-left px-16 ">
                <div>
                    <h3 class=" text-xl font-semibold">Set New Standards in </h3>
                    <div class=" text-3xl font-bold text-primary">
                        in HR & Payroll Functions with Our Cutting-edge Software on Dynamics 365
                    </div>
                </div>
                <p>AXOnePay: A Fusion of Uncompromised Precision & Unmatched Expertise in Payroll Management!</p>

                <div class=" inline-flex">
                    <?= $this->include('/layouts/connect') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section 5 -->

<!-- section-6 -->
<div class="max-w-container py-16 bg-primary md:bg-white  md:px-0">
    <div class="md:w-4/6 mx-auto space-y-4 md:space-y-8 px-6 md:px-0">
        <h2 class="heading-1 text-left md:text-center !text-white md:!text-black">
            How Can Our Microsoft-powered Payroll Software Drive Your Business Growth?
        </h2>
        <p class=" !text-white md:!text-black md:text-center">As your business grows, so do the complexities of managing your employee information and payroll requirements. Discover the benefits of our Payroll management Solution on Microsoft Dynamics 365 that delivers actionable insights to build better workplaces.</p>

    </div>
    <div class="feature">
        <div class="box">
            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/axone/faster-accurate.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Faster & accurate payroll execution
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/axone/customized-payment.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Customized payment analysis & reports
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/axone/accurate-vacation.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Accurate vacation calculations and tracking
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/axone/save-time.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Save time with pre-configured workflows
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/axone/eliminate-errors.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Eliminate errors from manual & legacy systems
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/axone/quick-tracking.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Quick tracking of historical payroll information
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/axone/manage-all-pay.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Manage all pay groups from a single window.
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/axone/regional-norms.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Regional Norms & legal compliance
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/axone/quick-workflow.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Quick workflow for leave management
                </div>
            </div>


            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/axone/advanced-salary.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Advanced salary processing options
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/axone/eliminate-errors.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Efficient document management
                </div>
            </div>

            <div class="">
                <div class="top-div">
                    <img src="<?php echo base_url() ?>/images/axone/manage-all-pay.svg" alt="">
                </div>
                <div class="bottom-div ">
                    Secured & advanced self-service portal (ESS)
                </div>
            </div>









        </div>

    </div>
</div>
<!-- section-6 ends -->


<?= $this->section("faq") ?><div class="max-w-container mx-auto py-16">
    <div class=" space-y-8 max-w-4xl mx-auto px-6 lg:px-0">
        <div class=" heading-1 text-center">Frequently Asked Questions</div>
        <div class=" flex flex-col divide-y " x-data="{selected:1}">
            <div>
                <div class="faq" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Why do companies need Microsoft Dynamics payroll software?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 1 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Microsoft Dynamics 365 Payroll Software empowers enterprises by effectively managing, automating, and maintaining accurate employee payments. Through its robust integration and meticulous configuration, this comprehensive software helps organizations reduce cost, save time and maintain compliance with tax laws and other financial regulations.
                        </p>


                    </div>
                </div>
            </div>


            <div>
                <div class="faq" @click="selected !== 2 ? selected = 2 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Can multiple users operate on Microsoft Payroll Software?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 2 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Yes, Our Dynamics 365 Payroll Software supports multiple users, allowing different individuals within an organization to access and utilize the software simultaneously. This enables efficient collaboration, streamlined workflows, and secure access control, ensuring that authorized users can effectively manage and process payroll data.
                        </p>


                    </div>
                </div>
            </div>

            <div>
                <div class="faq" @click="selected !== 3 ? selected = 3 : selected = null">
                    <div class="icon ">
                        <div class="q">Q</div>

                        <div class="question">Can I create multiple companies and multiple branches with the Microsoft Dynamics 365 Payroll Solution?</div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" :class="selected == 3 ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700 " x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                    <div class="pl-12 pb-8 space-y-2">
                        <p class="">Certainly! Our Payroll Management Software provides the flexibility to create and manage multiple companies and branches within the system. You can easily set up separate entities, define specific parameters and configurations, and effectively handle payroll operations for each company and branch individually. This ensures seamless management and accurate processing across your organization’s diverse structure.

                        </p>

                    </div>
                </div>
            </div>



        </div>
    </div>

</div>
<div class=" h-24">
</div><?= $this->endSection("faq") ?>

<?= $this->endSection() ?>