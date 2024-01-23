<div class="flex flex-wrap lg:flex-nowrap gap-4 lg:divide-x mb-3">
    <div class="flex-1">
        <form action="" id="form-filter-dd-account">
            <div class="flex flex-wrap lg:flex-nowrap gap-4">
                <div class="input-group w-full lg:w-auto flex-0 lg:flex-1">
                    <span class="input-wrapper">
                        <input datepicker class="input pr-8" type="text" placeholder="Start Date" name="date_from" datepicker-format="dd/mm/yyyy" autocomplete="off">
                        <div class="input-suffix-end">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </span>
                    <div class="input-addon">To</div>
                    <span class="input-wrapper">
                        <input datepicker class="input pr-8" type="text" placeholder="End Date" name="date_to" datepicker-format="dd/mm/yyyy" autocomplete="off">
                        <div class="input-suffix-end">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </span>
                </div>
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
    <div class="lg:pl-3 w-full lg:w-auto">
        <a href="<?= url('backend/dd-account/create') ?>" class="btn btn-solid inline-block">
            <span class="flex items-center justify-center gap-2">
                <span class="text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                    </svg>
                </span>
                <span>Create</span>
            </span>
        </a>
    </div>
</div>

<table id="dd-account-data-table" class="table-default table-hover data-table w-[auto]">
    <thead>
        <tr>
            <th>#</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>