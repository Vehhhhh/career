<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <head>
        <nav class=" border-gray-200 py-2.5 bg-[#1D5D9B] fixed left-0 right-0 z-10 top-0 font-NotoSerifKhmer">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <img src="{{asset('asset/logo.png')}}" class="h-6 mr-3 sm:h-9" alt=" Logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap text-white">CareerQuest</span>
                <div class="flex items-center lg:order-2">
                    <div class="hidden mt-2 mr-4 sm:inline-block"></div>
                    <a href="#" class="text-white bg-yellow-500 hover:bg-amber-400 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-yellow-500 focus:outline-none ">Sign In</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="true">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4  hover:text-yellow-300  rounded lg:bg-transparent  lg:p-0 text-white" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-amber-300  border-b border-gray-100 hover:bg-yellow-300 lg:hover:bg-transparent lg:border-0  lg:p-0 dark:text-gray-100 lg:dark:hover:text-yellow-300 dark:hover:bg-yellow-300 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Job</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-yellow-300 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-300 lg:p-0 dark:text-gray-100 lg:dark:hover:text-yellow-300 dark:hover:bg-yellow-300 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Test</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-yellow-300 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-300 lg:p-0 dark:text-gray-100 lg:dark:hover:text-yellow-300 dark:hover:bg-yellow-300 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="mt-20 ml-10">
            <ul class="flex flex-col font-medium lg:flex-row lg:space-x-2 ">
                <li>
                    <a href="#" class=" lg:hover:text-purple-700 ">Home</a>
                </li>
                <li>
                    <a href="#" class=" lg:hover:text-purple-700 ">/ Job</a>
                </li>
                <li>
                    <a href="#" class="text-blue-500 lg:hover:text-purple-700 ">/ IT Engineering</a>
                </li>
            </ul>
        </div>
        <p class="m-[0_50px_50px_50px]  ">
        </p>
    </head>
    <main>
        <section>
            <div class="shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] bg-[#BCE1FB] flex flex-row p-[50px_30px_10px_12px] box-sizing-border ml-10 mr-10">
                <img class="rounded-[10px] m-[10px_30px_20px_0] h-[300px] " src="https://refile.tnaot.com/image/2019/03/14/040d538a9e4f493daed216808d7fcd37.jpg?x-oss-process=image/watermark,image_RS5wbmc_eC1vc3MtcHJvY2Vzcz1pbWFnZS9yZXNpemUsUF8yMA" />

                <div class="m-[0_40.9px_0_0] flex flex-col grow basis-[388.1px] box-sizing-border">
                    <div class="m-[0_0_15px_0] inline-block self-start break-words font-['Inter'] font-semibold text-[35px] text-[#000000]">IT Engineering</div>
                    <span class="break-words font-['Inter'] font-normal text-[20px] text-[#000000]">
                        Industry: Information Technology<br />
                        Salary: $500<br />
                        Job type: Full time<br />
                        Level: Junior level<br />
                        Age : 20-40<br />
                        Gender: Female/Male<br />
                        Qualification: Bachelor<br />
                        Language: <br />
                        . Khmer-Native<br />
                        . English-Intermediate <br />
                        <br />
                        <br />
                    </span>
                </div>
                <p class="m-[78px_0_82px_0] break-words font-['Inter'] font-normal text-[20px] text-[#000000]">
                    <span>
                        Category: Network Engineering<br />
                        Location: Phnom Penh<br />
                        Available Position: 5px<br />
                        <br />
                        Required Skills:Network, Testing<br />
                        <br />
                        <span class="text-[20px] font-semibold  text-[#000000]">
                            Public date: March 11, 2024<br />
                            Close date: March 31, 2024
                        </span>
                    </span>
                </p>
            </div>
        </section>
    </main>
    <section>
        <div class="ml-10 mt-20 font-semibold text-[20px] text-[#000000]">
            <span className="">Job Requirement</span>
        </div>
        <div class="ml-10 mt-5 text-[20px] text-[#000000]">
            <span>
                . Knowledge of basic programing, database administration<br />
                . IN-depth knowledge in hardware and peripheral devices setup, configuration, and troubleshooting<br />
                . Experir=enced Software/networking installation and trouble-shooting<br />
                . Familiar with English and Chinese version of operation system and general-purpose applications <br />
                . Good command of English<br />
                . Basic oral communication in Chinese a plus<br />
                . Bachelor degree or equivalent diploma in related fields<br />
                . Self-motivated, responsible, good team spirit, adaptive in working hour and culture<br />
                . Being able to work under minimum guidance and assistance<br />
                . At least 1-year Experience in related work
            </span>
        </div>
        <div class="ml-10 mt-5 font-semibold text-[20px] text-[#000000]">
            <span className="">Job Responsiblities</span>
        </div>
        <div class="ml-10 mt-5 text-[20px] text-[#000000]">
            <span>
                . Provide maintenance of Hardware, Sofeware, networks, and security updates to customers<br />
                . Prepare Planning for Project installation<br>
                . Handle System configuration, implementation, and troubleshooting<br />
                . System delivery and User training<br />
                . Provide on-site customer support in Phnom Penh or other provinces<br />
                . Involve with other departments for system improvement testing
            </span>
        </div>
        <div class="ml-10 mt-5 font-semibold text-[20px] text-[#000000]">
            <span className="">Employee Benefit</span>
        </div>
        <div class="ml-10 mt-5 text-[20px] text-[#000000]">
            <span>
                . Insurance<br />
                . Petrol allowance<br>
                . 13th-month salary<br />
                . Annual leave, bonus & other<br />
                . The company will train new technology to the candidate
            </span>
        </div>
        <div class="ml-10 mt-5 font-semibold text-[20px] text-[#000000]">
            <span className="">How to apply</span>
        </div>
        <div class="ml-10 mt-5 text-[20px] text-[#000000]">
            <span>
                1. Please register CareerQuest Account<br />
            </span>
            <span>
                2. Click
                <a href="#" class="text-blue-500">create CV<br /></a>
            </span>
            <span>
                3. After creating your CV, apply for a job by clicking the 'Apply Now' button.<br />
                CareerQuest will review your CV.
            </span>
        </div>
    </section>
    <section class="flex ml-30">
        <div class=" mt-10 rounded-[10px] bg-[#1D5D9B] relative m-[0_0_128px_550px] flex justify-center  p-[20px_5px_20px_5px] w-[350px] ">
            <button class="  font-medium text-[25px] text-[#FFFFFF]">Upload CV </button>
        </div>
    </section>
</body>
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</html>