<div class="card !border-0 card-border mb-3">
    <div class="card-body card-gutterless p-4">
        <form class="needs-validation" method="POST" action="<?= !empty($dataView) ? url('backend/safe360/update/' . $dataView->id) : url('backend/safe360/store') ?>">
            <div class="form-container vertical">
                <div class="grid grid-cols-1 divide-y" id="list-record">
                    <div class="flex py-3">
                        <div class="form-item horizontal flex-1">
                            <label class="form-label ltr:pr-2 rtl:pl-2 min-w-[100px]">Date:</label>
                            <div class="w-full flex flex-col justify-center relative">
                                <span class="input-wrapper">
                                    <input datepicker datepicker-orientation="bottom" name="date[]" class="input pr-8" placeholder="Pick a date" readonly>
                                    <div class="input-suffix-end">
                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="form-item horizontal flex-1">
                            <label class="form-label ltr:pr-2 rtl:pl-2 min-w-[100px]">Amount:</label>
                            <div class="w-full flex flex-col justify-center relative">
                                <span class="input-wrapper">
                                    <input name="amount[]" class="input form-control pr-8" type="number" placeholder="Enter wet stock value" value="" required="">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-item vertical">
                    <div class="flex items-center gap-3">
                        <button class="btn btn-solid btn-sm" type="submit">
                            Submit
                        </button>
                        <button type="button" class="btn btn-sm bg-emerald-500 hover:bg-emerald-400 active:bg-emerald-600 text-white" id="add-a-row">
                            <span class="flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                                </svg>
                                <span>Add a row</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>