window.addEventListener('load', () => {
    function getDataAjax(query = {}) {
        $.ajax({
            url: '/backend/financial-statement',
            type: 'POST',
            data: query,
            success: res => {
                const response = JSON.parse(res);
                const { cash, final, whole, total_cdm } = response;
                $('#cash-input').val(formatNumber(cash));
                $('#final-input').val(formatNumber(final));
                $('#whole-input').val(formatNumber(whole));
                $('#total-cdm-input').val(formatNumber(total_cdm));

                const alertClass = whole === total_cdm;
                $('.alert.alert-success').toggle(alertClass);
                $('.alert.alert-danger').toggle(!alertClass);
            },
        })
    }
    getDataAjax();

    $('#form-filter').on('submit', function(e) {
        e.preventDefault();
        const query = $(this).serializeArray().reduce(function(obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});
        getDataAjax(query);
    })
    function formatNumber(number) {
        var parts = number.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }
})