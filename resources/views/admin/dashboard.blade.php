<x-base-layout>
    <div class="flex flex-col justify-between min-h-screen">
        <div>
            <!-- BEGIN: Header -->
            <!-- BEGIN: Header -->
            <x-dashboard.header></x-dashboard.header>
            <!-- END: Search Modal -->
            <!-- END: Header -->
            <!-- END: Header -->
            <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
                <div class="page-content">
                    <div class="transition-all duration-150 container-fluid" id="page_layout">
                        <div id="content_layout">

                            <div>
                                <div class="flex justify-between flex-wrap items-center mb-6">
                                    <h4
                                        class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">
                                        Dashboard</h4>
                                    <div
                                        class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
                                    </div>
                                </div>
                              
                                <div class="grid grid-cols-12 gap-5 mb-5">

                                    <div class="2xl:col-span-9 lg:col-span-8 col-span-12">
                                        <div class="p-4 card">
                                            <div class="grid md:grid-cols-3 col-span-1 gap-4">

                                                <!-- BEGIN: Group Chart2 -->


                                                <div
                                                    class="py-[18px] px-4 rounded-[6px] bg-[#E5F9FF] dark:bg-slate-900	 ">
                                                    <div class="flex items-center space-x-6 rtl:space-x-reverse">
                                                        <div class="flex-none">
                                                            <div id="wline1"></div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div
                                                                class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                                                Totel Blogs
                                                            </div>
                                                            <div
                                                                class="text-slate-900 dark:text-white text-lg font-medium">
                                                                {{ $blog }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="py-[18px] px-4 rounded-[6px] bg-[#FFEDE5] dark:bg-slate-900	 ">
                                                    <div class="flex items-center space-x-6 rtl:space-x-reverse">
                                                        <div class="flex-none">
                                                            <div id="wline2"></div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div
                                                                class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                                                Total Project
                                                            </div>
                                                            <div
                                                                class="text-slate-900 dark:text-white text-lg font-medium">
                                                                {{ $project }}
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="py-[18px] px-4 rounded-[6px] bg-[#EAE5FF] dark:bg-slate-900	 ">
                                                    <div class="flex items-center space-x-6 rtl:space-x-reverse">
                                                        <div class="flex-none">
                                                            <div id="wline3"></div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div
                                                                class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                                                Services
                                                            </div>
                                                            <div
                                                                class="text-slate-900 dark:text-white text-lg font-medium">
                                                                {{ $service  }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- END: Group Chart2 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="grid grid-cols-12 gap-5">
                                    <div class="lg:col-span-8 col-span-12">
                                        <div class="card">
                                            <div class="card-body p-6">
                                                <div class="legend-ring">
                                                    <div id="revenue-barchart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:col-span-4 col-span-12">
                                        <div class="card">
                                            <header class="card-header">
                                                <h4 class="card-title">Overview</h4>
                                                <div>
                                                    <!-- BEGIN: Card Dropdown -->
                                                    <div class="relative">
                                                        <div class="dropdown relative">
                                                            <button class="text-xl text-center block w-full "
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span
                                                                    class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                      rounded dark:text-slate-400">
                                                                    <iconify-icon
                                                                        icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                                                </span>
                                                            </button>
                                                            <ul
                                                                class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                  shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                <li>
                                                                    <a href="#"
                                                                        class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                          dark:hover:text-white">
                                                                        Last 28 Days</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                        class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                          dark:hover:text-white">
                                                                        Last Month</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                        class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                          dark:hover:text-white">
                                                                        Last Year</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- END: Card Droopdown -->
                                                </div>
                                            </header>
                                            <div class="card-body p-6">
                                                <div id="radial-bar"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="lg:col-span-4 col-span-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Overview</h4>
                                                <div>
                                                    <!-- BEGIN: Card Dropdown -->
                                                    <div class="relative">
                                                        <div class="dropdown relative">
                                                            <button class="text-xl text-center block w-full "
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span
                                                                    class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                      rounded dark:text-slate-400">
                                                                    <iconify-icon
                                                                        icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                                                </span>
                                                            </button>
                                                            <ul
                                                                class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                  shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                <li>
                                                                    <a href="#"
                                                                        class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                          dark:hover:text-white">
                                                                        Last 28 Days</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                        class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                          dark:hover:text-white">
                                                                        Last Month</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                        class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                          dark:hover:text-white">
                                                                        Last Year</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- END: Card Droopdown -->
                                                </div>
                                            </div>
                                            <div class="card-body p-6">
                                                <div id="radar-home-chart"></div>
                                                <div
                                                    class="bg-slate-50 dark:bg-slate-900 rounded p-4 mt-8 flex justify-between flex-wrap">
                                                    <div class="space-y-1">
                                                        <h4
                                                            class="text-slate-600 dark:text-slate-200 text-xs font-normal">
                                                            Invested amount
                                                        </h4>
                                                        <div class="text-sm font-medium text-slate-900 dark:text-white">
                                                            $8264.35
                                                        </div>
                                                        <div
                                                            class="text-slate-500 dark:text-slate-300 text-xs font-normal">
                                                            +0.001.23 (0.2%)
                                                        </div>
                                                    </div>
                                                    <div class="space-y-1">
                                                        <h4
                                                            class="text-slate-600 dark:text-slate-200 text-xs font-normal">
                                                            Invested amount
                                                        </h4>
                                                        <div class="text-sm font-medium text-slate-900 dark:text-white">
                                                            $8264.35
                                                        </div>
                                                    </div>
                                                    <div class="space-y-1">
                                                        <h4
                                                            class="text-slate-600 dark:text-slate-200 text-xs font-normal">
                                                            Invested amount
                                                        </h4>
                                                        <div class="text-sm font-medium text-slate-900 dark:text-white">
                                                            $8264.35
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BEGIN: Footer For Desktop and tab -->
        <x-dashboard.footer></x-dashboard.footer>
        <!-- END: Footer For Desktop and tab -->


    </div>
</x-base-layout>
