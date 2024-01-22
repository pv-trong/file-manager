<div class="card !border-0 card-border mb-3">
    <div class="card-body card-gutterless p-4">
        <form class="needs-validation" method="POST" action="<?= isset($report) ? url('backend/end-shift-report/update/' . $report->id) : url('backend/end-shift-report/store') ?>">
            <div class="form-container vertical">
                <div class="form-item vertical">
                    <label class="form-label mb-2" for="pos-input">POS</label>
                    <div class="relative">
                        <select name="pos" class="input" id="pos-input">
                            <option value="1" <?= @$report->pos == 1 ? 'selected' : '' ?>>POS 1</option>
                            <option value="2" <?= @$report->pos == 2 ? 'selected' : '' ?>>POS 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-item vertical">
                    <label class="form-label mb-2">Safe Drop</label>
                    <span class="input-wrapper">
                        <input name="safe_drop" class="input form-control pr-8" type="number" placeholder="Enter safe drop value" value="<?= @$report->safe_drop ?>" required>
                    </span>
                </div>
                <div class="form-item vertical">
                    <label class="form-label mb-2">Wet Stock</label>
                    <span class="input-wrapper">
                        <input name="wet_stock" class="input form-control pr-8" type="number" placeholder="Enter wet stock value" value="<?= @$report->wet_stock ?>" required>
                    </span>
                </div>
                <div class="form-item vertical">
                    <label class="form-label mb-2">Dry Stock</label>
                    <span class="input-wrapper">
                        <input name="dry_stock" class="input form-control pr-8" type="number" placeholder="Enter dry stock value" value="<?= @$report->dry_stock ?>" required>
                    </span>
                </div>
                <div class="form-item vertical">
                    <label class="form-label mb-2">Payout</label>
                    <span class="input-wrapper">
                        <input name="payout" class="input form-control pr-8" type="number" placeholder="Enter payout value" value="<?= @$report->payout ?>" required>
                    </span>
                </div>
                <div class="form-item vertical">
                    <label class="form-label mb-2">Non Cash Payment:</label>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                        <div class="form-item horizontal">
                            <label class="form-label ltr:pr-2 rtl:pl-2 min-w-[100px]">E-Wallet:</label>
                            <div class="w-full flex flex-col justify-center relative">
                                <input name="e-wallet" class="input form-control pr-8" type="number" placeholder="E-Wallet" value="<?= @$report->non_cash_payment['e-wallet'] ?>">
                            </div>
                        </div>
                        <div class="form-item horizontal">
                            <label class="form-label ltr:pr-2 rtl:pl-2 min-w-[100px]">Credit Card:</label>
                            <div class="w-full flex flex-col justify-center relative">
                                <input name="credit-card" class="input form-control pr-8" type="number" placeholder="Credit Card" value="<?= @$report->non_cash_payment['credit-card'] ?>">
                            </div>
                        </div>
                        <div class="form-item horizontal">
                            <label class="form-label ltr:pr-2 rtl:pl-2 min-w-[100px]">Voucher:</label>
                            <div class="w-full flex flex-col justify-center relative">
                                <input name="voucher" class="input form-control pr-8" type="number" placeholder="Voucher" value="<?= @$report->non_cash_payment['voucher'] ?>">
                            </div>
                        </div>
                    </div>
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