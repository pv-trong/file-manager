<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
    <div class="flex flex-col gap-4 h-full">
        <div class="lg:flex items-center justify-between mb-4 gap-3">
            <div class="mb-4 lg:mb-0">
                <h3 class="text-2xl font-bold">Overview</h3>
            </div>
            <form action="" class="flex flex-col lg:flex-row lg:items-center gap-3" id="form-filter">
                <input id="filter-day" name="day" class="input input-sm pr-8" placeholder="Pick a date" autocomplete="off" value="<?= date('d/m/Y') ?>">
                <button class="btn btn-sm btn-default">
                    <span class="flex items-center justify-center">
                        <span class="text-lg">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                            </svg>
                        </span>
                        <span class="ltr:ml-1 rtl:mr-1">Filter</span>
                    </span>
                </button>
            </form>
        </div>
        <div class="grid grid-cols-1 md:lg-grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="card card-layout-frame">
                <div class="card-body">
                    <div class="flex justify-between">
                        <h6 class="font-semibold mb-4 text-base">Safe 360</h6>
                    </div>
                    <div>
                        <div class="flex items-center py-3 border-b border-gray-200 dark:border-gray-600">
                            <div class="flex items-center flex-1">
                                <span class="badge-dot bg-slate-500"></span>
                                <span class="ml-2 rtl:mr-2 capitalize font-semibold text-slate-500">FEUL: </span>
                            </div>
                            <div class="flex-[2]">
                                <span class="text-lg capitalize font-semibold text-slate-500" id="safe-feul">0</span>
                            </div>
                        </div>
                        <div class="flex items-center py-3 border-b border-gray-200 dark:border-gray-600">
                            <div class="flex items-center flex-1">
                                <span class="badge-dot bg-slate-500"></span>
                                <span class="ml-2 rtl:mr-2 capitalize font-semibold text-slate-500">DRY STOCK: </span>
                            </div>
                            <div class="flex-[2]">
                                <span class="text-lg capitalize font-semibold text-slate-500" id="safe-dry_stock">0</span>
                            </div>
                        </div>
                        <div class="flex items-center py-3 border-b border-gray-200 dark:border-gray-600">
                            <div class="flex items-center flex-1">
                                <span class="badge-dot bg-slate-500"></span>
                                <span class="ml-2 rtl:mr-2 capitalize font-semibold text-slate-500">TOTAL CDM: </span>
                            </div>
                            <div class="flex-[2]">
                                <span class="text-lg capitalize font-semibold text-slate-500" id="safe-total_cdm">0</span>
                            </div>
                        </div>
                        <div class="flex items-center py-3">
                            <div class="flex items-center flex-1">
                                <span class="badge-dot bg-slate-500"></span>
                                <span class="ml-2 rtl:mr-2 capitalize font-semibold text-slate-500">COIN SHORTAGE: </span>
                            </div>
                            <div class="flex-[2]">
                                <span class="text-lg capitalize font-semibold text-slate-500" id="safe-coin_shortage">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-layout-frame">
                <div class="card-body">
                    <div class="flex justify-between">
                        <h6 class="font-semibold mb-4 text-base">Direct Debit Account</h6>
                        <div>
                            <div class="tag">
                                <span class="tag-affix tag-prefix bg-emerald-500"></span>
                                <span id="date-dd-account"></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center py-3 border-b border-gray-200 dark:border-gray-600">
                            <div class="flex items-center flex-1">
                                <span class="badge-dot bg-slate-500"></span>
                                <span class="ml-2 rtl:mr-2 capitalize font-semibold text-slate-500">Amount: </span>
                            </div>
                            <div class="flex-[2]">
                                <span class="text-lg capitalize font-semibold text-slate-500" id="dd-amount">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-layout-frame">
                <div class="card-body">
                    <div class="flex justify-between">
                        <h6 class="font-semibold mb-4 text-base">Loading</h6>
                        <div>
                            <div class="tag">
                                <span class="tag-affix tag-prefix bg-emerald-500"></span>
                                <span id="date-loading"></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center py-3 border-b border-gray-200 dark:border-gray-600">
                            <div class="flex items-center flex-1">
                                <span class="badge-dot bg-slate-500"></span>
                                <span class="ml-2 rtl:mr-2 capitalize font-semibold text-slate-500">PREMIUM 95: </span>
                            </div>
                            <div class="flex-[2]">
                                <span class="text-lg capitalize font-semibold text-slate-500" id="loading-95">0</span>
                            </div>
                        </div>
                        <div class="flex items-center py-3 border-b border-gray-200 dark:border-gray-600">
                            <div class="flex items-center flex-1">
                                <span class="badge-dot bg-slate-500"></span>
                                <span class="ml-2 rtl:mr-2 capitalize font-semibold text-slate-500">PREMIUM 97: </span>
                            </div>
                            <div class="flex-[2]">
                                <span class="text-lg capitalize font-semibold text-slate-500" id="loading-97">0</span>
                            </div>
                        </div>
                        <div class="flex items-center py-3 border-b border-gray-200 dark:border-gray-600">
                            <div class="flex items-center flex-1">
                                <span class="badge-dot bg-slate-500"></span>
                                <span class="ml-2 rtl:mr-2 capitalize font-semibold text-slate-500">Diesel Bio: </span>
                            </div>
                            <div class="flex-[2]">
                                <span class="text-lg capitalize font-semibold text-slate-500" id="loading-bio">0</span>
                            </div>
                        </div>
                        <div class="flex items-center py-3">
                            <div class="flex items-center flex-1">
                                <span class="badge-dot bg-slate-500"></span>
                                <span class="ml-2 rtl:mr-2 capitalize font-semibold text-slate-500">Diesel Euro: </span>
                            </div>
                            <div class="flex-[2]">
                                <span class="text-lg capitalize font-semibold text-slate-500" id="loading-euro">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-layout-frame">
                <div class="card-body">
                    <div class="flex justify-between">
                        <h6 class="font-semibold mb-4 text-base">Tank Level</h6>
                        <div>
                            <div class="tag">
                                <span class="tag-affix tag-prefix bg-emerald-500"></span>
                                <span class="time-filter"></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center py-3 border-b border-gray-200 dark:border-gray-600">
                            <div class="flex items-center flex-1">
                                <span class="badge-dot bg-slate-500"></span>
                                <span class="ml-2 rtl:mr-2 capitalize font-semibold text-slate-500">PREMIUM 95: </span>
                            </div>
                            <div class="flex-[2]">
                                <span class="text-lg capitalize font-semibold text-slate-500" id="tank-95">0</span>
                            </div>
                        </div>
                        <div class="flex items-center py-3 border-b border-gray-200 dark:border-gray-600">
                            <div class="flex items-center flex-1">
                                <span class="badge-dot bg-slate-500"></span>
                                <span class="ml-2 rtl:mr-2 capitalize font-semibold text-slate-500">PREMIUM 97: </span>
                            </div>
                            <div class="flex-[2]">
                                <span class="text-lg capitalize font-semibold text-slate-500" id="tank-97">0</span>
                            </div>
                        </div>
                        <div class="flex items-center py-3 border-b border-gray-200 dark:border-gray-600">
                            <div class="flex items-center flex-1">
                                <span class="badge-dot bg-slate-500"></span>
                                <span class="ml-2 rtl:mr-2 capitalize font-semibold text-slate-500">Diesel Bio: </span>
                            </div>
                            <div class="flex-[2]">
                                <span class="text-lg capitalize font-semibold text-slate-500" id="tank-bio">0</span>
                            </div>
                        </div>
                        <div class="flex items-center py-3">
                            <div class="flex items-center flex-1">
                                <span class="badge-dot bg-slate-500"></span>
                                <span class="ml-2 rtl:mr-2 capitalize font-semibold text-slate-500">Diesel Euro 5: </span>
                            </div>
                            <div class="flex-[2]">
                                <span class="text-lg capitalize font-semibold text-slate-500" id="tank-euro">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            <div class="card card-layout-frame col-span-2">
                <div class="card-body">
                    <div class="flex items-center justify-between">
                        <h4 class="text-xl font-semibold">Sales Report</h4>
                        <span class="flex items-center">
                            <span class="mr-1 font-semibold">Demo Data:</span>
                            <span class="text-emerald-500 text-xl">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </span>
                    </div>
                    <div id="sales-report-chart"></div>
                </div>
            </div>
            <div class="card card-layout-frame">
                <div class="card-body">
                    <div class="flex items-center justify-between">
                        <h4 class="text-xl font-semibold">Categories</h4>
                        <span class="flex items-center">
                            <span class="mr-1 font-semibold">Demo Data:</span>
                            <span class="text-emerald-500 text-xl">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </span>
                    </div>
                    <div class="mt-6">
                        <div id="categories-chart"></div>
                    </div>
                    <div class="mt-6 grid grid-cols-2 gap-4 max-w-[180px] mx-auto">
                        <div class="flex items-center gap-1">
                            <span class="badge-dot" style="background-color: rgb(79, 70, 229);"></span>
                            <span class="font-semibold">Devices</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="badge-dot" style="background-color: rgb(59, 130, 246);"></span>
                            <span class="font-semibold">Watches</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="badge-dot" style="background-color: rgb(16, 185, 129);"></span>
                            <span class="font-semibold">Bags</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="badge-dot" style="background-color: rgb(245, 158, 11);"></span>
                            <span class="font-semibold">Shoes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>