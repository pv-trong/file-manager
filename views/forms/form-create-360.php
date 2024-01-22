<div class="card !border-0 card-border mb-3">
    <div class="card-body card-gutterless p-4">
        <form class="needs-validation" method="POST" action="<?= isset($data) ? url('backend/safe360/update/' . $data->id) : url('backend/safe360/store') ?>">
            <div class="form-container vertical">
                <div class="form-item vertical">
                    <label class="form-label mb-2">Fuel</label>
                    <span class="input-wrapper">
                        <input name="feul" class="input form-control pr-8" type="number" placeholder="Enter fuel value" value="<?= @$data->feul ?>" required>
                    </span>
                </div>
                <div class="form-item vertical">
                    <label class="form-label mb-2">Dry Stock</label>
                    <span class="input-wrapper">
                        <input name="dry_stock" class="input form-control pr-8" type="number" placeholder="Enter dry stock value" value="<?= @$data->dry_stock ?>" required>
                    </span>
                </div>
                <div class="form-item vertical">
                    <label class="form-label mb-2">Total CDM</label>
                    <span class="input-wrapper">
                        <input name="total_cdm" class="input form-control pr-8" type="number" placeholder="Enter total cdm value" value="<?= @$data->total_cdm ?>" required>
                    </span>
                </div>
                <div class="form-item vertical">
                    <label class="form-label mb-2">Coin Shortage</label>
                    <span class="input-wrapper">
                        <input name="coin_shortage" class="input form-control pr-8" type="number" placeholder="Enter coin shortage value" value="<?= @$data->coin_shortage ?>" required>
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