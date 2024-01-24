window.addEventListener('load', () => {
    let safe360Table = $("#safe-360-data-table").DataTable(
        {
            responsive: true,
            processing: true,
            serverSide: true,
            destroy: true,
            searching: false,
            bAutoWidth: false,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, 'All'],
            ],
            order: [[0, 'desc']],
            ajax: {
                url: '/backend/ajax/safe360',
                type: 'POST',
                data: function (d) {
                    const dataForm = $('#form-filter-safe360').serializeArray();
                    $.each(dataForm, function (key, val) {
                        d[val.name] = val.value;
                    });
                }
            },
            columns: [
                {
                    data: 'id',
                    title: '#'
                },
                {
                    data: 'feul',
                    orderable: false,
                    title: 'Feul',
                },
                {
                    data: 'dry_stock',
                    title: 'Dry Stock',
                },
                {
                    data: 'total_cdm',
                    title: 'Total CDM',
                },
                {
                    data: 'coin_shortage',
                    title: 'Coin Shortage',
                },
                {
                    data: 'created_at',
                    title: 'Created at',
                    render: function (data) {
                        return moment(data).format('DD-MM-YYYY HH:mm:ss')
                    }
                },
                {
                    data: '',
                    title: 'Action',
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {
                        return `<button class="btn btn-default btn-sm">
                                    <a href="/backend/safe360/edit/${row.id}" class="flex items-center justify-center gap-2">
                                        <span class="text-lg">
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                            </svg>
                                        </span>
                                        <span>Edit</span>
                                    </a>
                                </button>`;
                    }
                }
            ],
        }
    )
    $('#form-filter-safe360').on('submit', function (e) {
        e.preventDefault();
        safe360Table.ajax.reload(null, false);
    })

    let safeDDAcount = $("#dd-account-data-table").DataTable(
        {
            responsive: true,
            processing: true,
            serverSide: true,
            destroy: true,
            searching: false,
            bAutoWidth: false,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, 'All'],
            ],
            order: [[0, 'desc']],
            ajax: {
                url: '/backend/ajax/direct-debit-account',
                type: 'POST',
                data: function (d) {
                    const dataForm = $('#form-filter-dd-account').serializeArray();
                    $.each(dataForm, function (key, val) {
                        d[val.name] = val.value;
                    });
                }
            },
            columns: [
                {
                    data: 'id',
                    title: '#'
                },
                {
                    data: 'amount',
                    orderable: false,
                    title: 'Amount',
                },
                {
                    data: 'date',
                    title: 'Date',
                    render: function (data) {
                        return moment(data).format('DD-MM-YYYY HH:mm:ss')
                    }
                },
                {
                    data: '',
                    title: 'Action',
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {
                        return `<a href="/backend/dd-account/destroy/${row.id}" onclick="return confirm('Are you sure?')"
                                         class="btn inline-block bg-rose-50 dark:bg-rose-500 dark:bg-opacity-20 hover:bg-rose-100 dark:hover:bg-rose-500 dark:hover:bg-opacity-30 active:bg-rose-200 dark:active:bg-rose-500 dark:active:bg-opacity-40 text-rose-600 dark:text-rose-50 btn-sm">
                                    <span class="flex items-center justify-center gap-2">
                                        <span class="text-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                            </svg>
                                        </span>
                                        <span>Delete</span>
                                    </span>
                                </a>`;
                    }
                }
            ],
        }
    )
    $('#form-filter-dd-account').on('submit', function (e) {
        e.preventDefault();
        safeDDAcount.ajax.reload(null, false);
    });

    let tankLevelTable = $("#tank-level-data-table").DataTable(
        {
            responsive: true,
            processing: true,
            serverSide: true,
            destroy: true,
            searching: false,
            bAutoWidth: false,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, 'All'],
            ],
            order: [[0, 'desc']],
            ajax: {
                url: '/backend/ajax/tank-level',
                type: 'POST',
                data: function (d) {
                    const dataForm = $('#form-filter-tank-level').serializeArray();
                    $.each(dataForm, function (key, val) {
                        d[val.name] = val.value;
                    });
                }
            },
            columns: [
                {
                    data: 'id',
                    title: '#'
                },
                {
                    data: 'premium95',
                    title: 'Premium 95',
                },
                {
                    data: 'premium97',
                    title: 'Premium 97',
                },
                {
                    data: 'diesel_bio',
                    title: 'Diesel Bio',
                },
                {
                    data: 'diesel_euro5',
                    title: 'Diesel Euro 5',
                },
                {
                    data: 'date',
                    title: 'Date',
                    render: function (data) {
                        return moment(data).format('DD-MM-YYYY')
                    }
                },
                {
                    data: '',
                    title: 'Action',
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {
                        return `<button class="btn btn-default btn-sm">
                                    <a href="/backend/tank-level/edit/${row.id}" class="flex items-center justify-center gap-2">
                                        <span class="text-lg">
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                            </svg>
                                        </span>
                                        <span>Edit</span>
                                    </a>
                                </button>`;
                    }
                }
            ],
        }
    )
    $('#form-filter-tank-level').on('submit', function (e) {
        e.preventDefault();
        tankLevelTable.ajax.reload(null, false);
    });

    let loadingTable = $("#loading-data-table").DataTable(
        {
            responsive: true,
            processing: true,
            serverSide: true,
            destroy: true,
            searching: false,
            bAutoWidth: false,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, 'All'],
            ],
            order: [[0, 'desc']],
            ajax: {
                url: '/backend/ajax/loading',
                type: 'POST',
                data: function (d) {
                    const dataForm = $('#form-filter-loading').serializeArray();
                    $.each(dataForm, function (key, val) {
                        d[val.name] = val.value;
                    });
                }
            },
            columns: [
                {
                    data: 'id',
                    title: '#'
                },
                {
                    data: 'premium95',
                    title: 'Premium 95',
                },
                {
                    data: 'premium97',
                    title: 'Premium 97',
                },
                {
                    data: 'diesel_bio',
                    title: 'Diesel Bio',
                },
                {
                    data: 'diesel_euro',
                    title: 'Diesel Euro',
                },
                {
                    data: 'date',
                    title: 'Date',
                    render: function (data) {
                        return moment(data).format('DD-MM-YYYY')
                    }
                },
                {
                    data: '',
                    title: 'Action',
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {
                        return `<button class="btn btn-default btn-sm">
                                    <a href="/backend/loading/edit/${row.id}" class="flex items-center justify-center gap-2">
                                        <span class="text-lg">
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                            </svg>
                                        </span>
                                        <span>Edit</span>
                                    </a>
                                </button>`;
                    }
                }
            ],
        }
    )
    
    $('#form-filter-loading').on('submit', function (e) {
        e.preventDefault();
        loadingTable.ajax.reload(null, false);
    });
})