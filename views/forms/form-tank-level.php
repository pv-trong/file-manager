<div class="card !border-0 card-border mb-3">
    <div class="card-body card-gutterless p-4">
        <form class="needs-validation" method="POST" action="<?= isset($dataView) ? url('backend/tank-level/update/' . $dataView->id) : url('backend/tank-level/store') ?>">
            <div class="form-container vertical">
                <div class="form-item vertical">
                    <label class="form-label mb-2">Time</label>
                    <span class="input-wrapper" id="time-picker-wrapper">
                        <input name="time" id="time-picker" class="input pr-8" placeholder="Pick time" value="<?= isset($dataView->time) ? $dataView->time : '' ?>" readonly required>
                        <input name="date" type="hidden" value="<?= isset($dataView->date) ? DateTime::createFromFormat('Y-m-d H:i:s', $dataView->date)->format('d/m/Y') : date('d/m/Y') ?>" readonly required>
                        <div class="input-suffix-end">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
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