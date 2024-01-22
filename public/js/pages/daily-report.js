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
                    title: 'Dry Stock',
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
})