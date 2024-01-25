window.addEventListener('load', () => {
    $('#filter-day').datepicker({
        autoclose: true,
        format: 'dd/mm/yyyy'
    })


    $('#form-filter').on('submit', function (e) {
        e.preventDefault();
        const value = $(this).find('#filter-day').val();
        const type = $(this).find('#filter-day').attr('name');
        $('.date-filter').text(value);
        $.ajax({
            url: '/backend/daily-report-dashboard',
            type: 'POST',
            data: {
                [type]: value,
            },
            success: res => {
                const data = JSON.parse(res);
                const { loading, safe360, tank_level, direct_debit_account } = data;
                $('#dd-amount').text(formatNumber(direct_debit_account.amount));
                $('#date-dd-account').text(direct_debit_account.date);

                $('#safe-feul').text(formatNumber(safe360.feul));
                $('#safe-total_cdm').text(formatNumber(safe360.total_cdm));
                $('#safe-dry_stock').text(formatNumber(safe360.dry_stock));
                $('#safe-coin_shortage').text(formatNumber(safe360.coin_shortage));

                $('#tank-95').text(formatNumber(tank_level.premium95));
                $('#tank-97').text(formatNumber(tank_level.premium97));
                $('#tank-bio').text(formatNumber(tank_level.diesel_bio));
                $('#tank-euro').text(formatNumber(tank_level.diesel_euro5));
                $('.time-filter').text(formatNumber(tank_level.time));

                $('#loading-95').text(formatNumber(loading.premium95));
                $('#loading-97').text(formatNumber(loading.premium97));
                $('#loading-bio').text(formatNumber(loading.diesel_bio));
                $('#loading-euro').text(formatNumber(loading.diesel_euro));
                $('#date-loading').text(loading.date);

                $('#notification-toast').append(toastHtml['Success'])
                    .find('.notification-description').text('Updated Data')
                $('#notification-toast .toast:last-child').toast('show');
                setTimeout(function () {
                    $('#notification-toast .toast:first-child').remove();
                }, 5000);
            }
        })
    }).trigger('submit');

    function formatNumber(number) {
        var parts = number.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }
})