window.addEventListener('load', () => {
    const recordHtml = `
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
                                    <input name="amount[]" class="input form-control pr-8" type="number" placeholder="Enter amount value" value="">
                                </span>
                            </div>
                        </div>
                    </div>
    `;
    $('#add-a-row').on('click', function () {
        const lastRecord = $('#list-record > div:last-child');
        const lastDate = lastRecord.find('input[datepicker]').val();
        const lastAmount = lastRecord.find('input[name="amount[]"]').val();
        if (!lastAmount || !lastDate) return
        $('#list-record').append(recordHtml);
        $('input[datepicker]').each(function (index, elm) {
            new Datepicker(elm);
        });
    })
})