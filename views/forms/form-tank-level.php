<div class="card !border-0 card-border mb-3">
    <div class="card-body card-gutterless p-4">
        <form class="needs-validation" method="POST" action="<?= isset($dataView) ? url('backend/tank-level/update/' . $dataView->id) : url('backend/tank-level/store') ?>">
            <div class="form-container vertical">
                <div class="form-item vertical">
                    <label class="form-label mb-2">Date</label>
                    <span class="input-wrapper">
                        <input datepicker datepicker-orientation="bottom" name="date" class="input pr-8" datepicker-format="dd/mm/yyyy" placeholder="Pick a date"
                                 value="<?= isset($dataView->date) ? DateTime::createFromFormat('Y-m-d H:i:s',$dataView->date)->format('d/m/Y') : '' ?>"
                                  readonly required
                                  >
                        <div class="input-suffix-end">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </span>
                </div>
                <div class="form-item vertical">
                    <label class="form-label mb-2">Premium 95</label>
                    <span class="input-wrapper">
                        <input name="premium95" class="input form-control pr-8" type="number" placeholder="Enter Premium 95 value" value="<?= @$dataView->premium95 ?>" required>
                    </span>
                </div>
                <div class="form-item vertical">
                    <label class="form-label mb-2">Premium 97</label>
                    <span class="input-wrapper">
                        <input name="premium97" class="input form-control pr-8" type="number" placeholder="Enter Premium 97 value" value="<?= @$dataView->premium97 ?>" required>
                    </span>
                </div>
                <div class="form-item vertical">
                    <label class="form-label mb-2">Diesel Bio</label>
                    <span class="input-wrapper">
                        <input name="diesel_bio" class="input form-control pr-8" type="number" placeholder="Enter Diesel Bio value" value="<?= @$dataView->diesel_bio ?>" required>
                    </span>
                </div>
                <div class="form-item vertical">
                    <label class="form-label mb-2">Diesel Euro 5</label>
                    <span class="input-wrapper">
                        <input name="diesel_euro5" class="input form-control pr-8" type="number" placeholder="Enter Diesel Euro 5" value="<?= @$dataView->diesel_euro5 ?>" required>
                    </span>
                </div>
                <div class="form-item vertical">
                    <label class="form-label"></label>
                    <div>
                        <button class="btn btn-solid" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>