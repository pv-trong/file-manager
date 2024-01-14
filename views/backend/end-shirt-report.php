<div class="flex justify-end mb-4">
    <button href="<?= url('backend/end-shift-report/create') ?>"
            class="btn btn-sm bg-emerald-500 hover:bg-emerald-400 active:bg-emerald-600 text-white">
        <span class="flex items-center justify-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
            </svg>
            <span>Create</span>
        </span>
    </button>
</div>
<div class="card !border-0 card-border mb-3">
    <div class="card-body card-gutterless p-4">
        <form method="POST" action="" id="form-search">
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1">
                    <label class="font-bold mb-3 block">POS: </label>
                    <select name="pos" class="input">
                        <option value="">All</option>
                        <option value="1" <?= @$old['pos'] == 1 ? 'selected' : ''?>>POS 1</option>
                        <option value="2" <?= @$old['pos'] == 2 ? 'selected' : ''?>>POS 2</option>
                    </select>
                </div>
                <div class="col-span-2">
                    <label class="font-bold mb-3 block">Range Date:</label>
                    <div class="input-group mb-4">
                        <span class="input-wrapper">
                            <input datepicker
                                   class="input pr-8"
                                   type="text"
                                   placeholder="Start Date"
                                   name="date_from"
                                   readonly=""
                                   datepicker-format="dd/mm/yyyy"
                                   autocomplete="off"
                                   value="<?= @$old['date_from']?>">
                            <div class="input-suffix-end">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"
                                     class="text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </span>
                        <div class="input-addon">To</div>
                        <span class="input-wrapper">
                            <input datepicker
                                   class="input pr-8"
                                   type="text"
                                   placeholder="End Date"
                                   name="date_to"
                                   readonly=""
                                   datepicker-format="dd/mm/yyyy"
                                   autocomplete="off"
                                   value="<?= @$old['date_to']?>">
                            <div class="input-suffix-end">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"
                                     class="text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <button class="btn btn-solid" type="submit">Search</button>
        </form>
    </div>
</div>
<div class="card !border-0 card-border">
    <div class="card-body card-gutterless p-4">
        <table id="data-table" class="table-default table-hover data-table">
            <thead>
            <tr>
                <th>#</th>
                <th>POS</th>
                <th>Safe Drop</th>
                <th>Wet Stock</th>
                <th>Dry Stock</th>
                <th>Payout</th>
                <th>Non Cash Payment</th>
                <th>Total</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($reports as $report) { ?>
                <tr>
                    <td><?= $report['id'] ?></td>
                    <td>POS <?= $report['pos'] ?></td>
                    <td><?= $report['safe_drop'] ?></td>
                    <td><?= $report['wet_stock'] ?></td>
                    <td><?= $report['dry_stock'] ?></td>
                    <td><?= $report['payout'] ?></td>
                    <td><?= $report['non_cash_payment'] ?></td>
                    <td><?= $report['total'] ?></td>
                    <td><?= $report['created_at'] ?></td>
                    <td>
                        <button class="btn btn-default btn-sm">
                            <a href="<?= url('backend/end-shift-report/edit/' . $report['id']) ?>"
                               class="flex items-center justify-center gap-2">
                                <span class="text-lg">
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                         aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </span>
                                <span>Edit</span>
                            </a>
                        </button>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
            <tfoot>
            <tr>
                <th>Total:</th>
                <th></th>
                <th class="px-6 py-4 text-left"></th>
                <th class="px-6 py-4 text-left"></th>
                <th class="px-6 py-4 text-left"></th>
                <th class="px-6 py-4 text-left"></th>
                <th class="px-6 py-4 text-left"></th>
                <th class="px-6 py-4 text-left"></th>
                <th class="px-6 py-4 text-left"></th>
                <th class="px-6 py-4 text-left"></th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>