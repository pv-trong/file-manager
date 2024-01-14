window.addEventListener('load', () => {
    const table = $('#data-table').DataTable({
        "footerCallback": function(row, data, start, end, display) {
            let api = this.api();
            let total_col2 = api.column(2, {page:'current'}).data().reduce(function(a, b) {
                return parseFloat(a) + parseFloat(b);
            }, 0);
            let total_col3 = api.column(3, {page:'current'}).data().reduce(function(a, b) {
                return parseFloat(a) + parseFloat(b);
            }, 0);
            let total_col4 = api.column(4, {page:'current'}).data().reduce(function(a, b) {
                return parseFloat(a) + parseFloat(b);
            }, 0);
            let total_col5 = api.column(5, {page:'current'}).data().reduce(function(a, b) {
                return parseFloat(a) + parseFloat(b);
            }, 0);
            let total_col6 = api.column(6, {page:'current'}).data().reduce(function(a, b) {
                return parseFloat(a) + parseFloat(b);
            }, 0);
            let total_col7 = api.column(7, {page:'current'}).data().reduce(function(a, b) {
                return parseFloat(a) + parseFloat(b);
            }, 0);
            $(api.column(2).footer()).html(total_col2);
            $(api.column(3).footer()).html(total_col3);
            $(api.column(4).footer()).html(total_col4);
            $(api.column(5).footer()).html(total_col5);
            $(api.column(6).footer()).html(total_col6);
            $(api.column(7).footer()).html(total_col7);
        }
    });
})