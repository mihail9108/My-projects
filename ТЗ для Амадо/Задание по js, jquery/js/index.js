$('#add-click').on('click', function (e) {
    e.preventDefault();

    let newName = $('form').find('input[class="name"]').val();
    let newSurname = $('form').find('input[class="surname"]').val();
    let newAddress = $('form').find('input[class="address"]').val();
    let newYear_of_birth = $('form').find('select[class="year_of_birth"]').val();
    let newCourse = $('form').find('select[class="course"]').val();
    $('#table1').append('<tr>' +
     '<td name="surname">' + newSurname + '</td>' +
     '<td name="name">' + newName + '</td>' +
     '<td name="address">' + newAddress + '</td>' +
     '<td name="year_of_birth">' + newYear_of_birth + '</td>' +
     '<td name="course">' + newCourse + '</td>' +
     '<td><button  title="Remove"></td>' +
     '</tr>');

        let procRows = my_table.querySelectorAll("tbody tr");
    my_table.querySelector("tbody").addEventListener("click", function (e) {
        if (e.target.nodeName == "BUTTON") {
            let cell = e.target.parentNode;
            cell.parentNode.classList.add("hidden");
            e.target.remove();
        }
    })
    });


$('#add-save').on('click', function (e) {
    e.preventDefault();

    let table = document.querySelector("#table1");
    variant1(table);

    function variant1(table) {
        let arrayOfTrValues = [];
        for (let i = 0, count = table.rows.length; i < count; i++) {
            let columns = table.rows[i].cells,
                obj = {};
            for (let j = 0, count2 = columns.length; j < count2; j++)
                obj[columns[j].getAttribute("name")] = columns[j].textContent;
            arrayOfTrValues[i] = obj;
        }
        let json = JSON.stringify(arrayOfTrValues);
        alert(json);
    }
});