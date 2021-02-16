$('.sort_result').on('click', function () {
    let $td = $(this).index() + 1;
    let tbody = $('#table1');
    let $selected_td = $('#table1 tr td:nth-child(' + $td + ')');

    // удаляем стили со всех элементов
    $('table *').removeClass('selected_choise');

    // присваиваем стили выбранному
    $(this).addClass('selected_choise');
    $selected_td.addClass('selected_choise');

    tbody.find('tr').sort(function (a, b) {
        let aInt = parseInt($('td:nth-child(' + $td + ')', b).text());
        let bInt = parseInt($('td:nth-child(' + $td + ')', a).text());
        if ($('#order').val() == 'asc') {
            if (aInt > bInt) {
                return 1
            } else if (aInt == bInt) {
                return 0;
            } else {
                return -1;
            }

        } else {
            if (aInt > bInt) {
                return -1
            } else if (aInt == bInt) {
                return 0;
            } else {
                return 1;
            }
        }

    }).appendTo(tbody);

    let sort_order = $('#order').val();
    if (sort_order == "asc") {
        document.getElementById("order").value = "desc";
    }
    if (sort_order == "desc") {
        document.getElementById("order").value = "asc";
    }
})