<div class="card !border-0 card-border">
    <div class="card-body card-gutterless p-4">
        <span class="text-2xl font-bold">Finacal Statement</span>
        <hr class="my-3" />
        <form id="form-filter" class="grid grid-cols-4 gap-4">
            <div class="col-span-4 lg:col-span-1">
                <select name="pos" class="input">
                    <option value="">All</option>
                    <option value="1">POS 1</option>
                    <option value="2">POS 2</option>
                </select>
            </div>
            <div class="col-span-4 lg:col-span-3">
                <div class="input-group w-full lg:w-auto flex-0 lg:flex-1">
                    <span class="input-wrapper">
                        <input datepicker="" class="input pr-8 datepicker-input" type="text" placeholder="Start Date" name="date_from" datepicker-format="dd/mm/yyyy" autocomplete="off" value="">
                        <div class="input-suffix-end">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </span>
                    <div class="input-addon">To</div>
                    <span class="input-wrapper">
                        <input datepicker="" class="input pr-8 datepicker-input" type="text" placeholder="End Date" name="date_to" datepicker-format="dd/mm/yyyy" autocomplete="off" value="">
                        <div class="input-suffix-end">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </span>
                </div>
            </div>
            <div class="col-span-4">
                <button class="btn btn-two-tune">
                    <span class="flex items-center justify-center gap-2">
                        <span class="text-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                            </svg>
                        </span>
                        <span>Filter</span>
                    </span>
                </button>
            </div>
        </form>
    </div>
    <div class="px-4 py-6">
        <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
            <div class="font-semibold">Cash Fuel Sale: </div>
            <div class="col-span-2">
                <div class="form-item vertical mb-0 max-w-[700px]">
                    <label class="form-label"></label>
                    <div>
                        <span class="input-wrapper">
                            <div class="input-suffix-start">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <input class="input pl-10" type="text" autocomplete="off" placeholder="Cash Fuel Sale" value="" readonly id="cash-input">
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
            <div class="font-semibold">Final Dry State</div>
            <div class="col-span-2">
                <div class="form-item vertical mb-0 max-w-[700px]">
                    <label class="form-label"></label>
                    <div>
                        <span class="input-wrapper">
                            <div class="input-suffix-start">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <input class="input pl-10" type="text" name="email" autocomplete="off" placeholder="Final Dry State" value="" readonly id="final-input">
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
            <div class="font-semibold">Whole Sale:</div>
            <div class="col-span-2">
                <div class="form-item vertical mb-0 max-w-[700px]">
                    <label class="form-label"></label>
                    <div>
                        <span class="input-wrapper">
                            <div class="input-suffix-start">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <input class="input pl-10" type="text" autocomplete="off" placeholder="Whole Sale" value="" readonly id="whole-input">
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
            <div class="font-semibold">Total CDM:</div>
            <div class="col-span-2">
                <div class="form-item vertical mb-0 max-w-[700px]">
                    <label class="form-label"></label>
                    <div>
                        <span class="input-wrapper">
                            <div class="input-suffix-start">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <input class="input pl-10" type="text" autocomplete="off" placeholder="Total CDM" readonly id="total-cdm-input">
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-danger mt-5" style="display: none;">
            <div class="alert-content">
                <span class="alert-icon">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                    </svg>
                </span>
                <div>Different amount.</div>
            </div>
        </div>
        <div class="alert alert-success" style="display: none;">
            <div class="alert-content">
                <span class="alert-icon">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </span>
                <div>Good!</div>
            </div>
        </div>
    </div>
</div>
</div>