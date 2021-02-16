function sort_surname()
{
    let table=$('.my_table');
    let tbody =$('#table1');

    tbody.find('tr').sort(function(a, b)
    {
        if($('#name_order').val()=='asc')
        {
            return $('td:first', a).text().localeCompare($('td:first', b).text());
        }
        else
        {
            return $('td:first', b).text().localeCompare($('td:first', a).text());
        }

    }).appendTo(tbody);

    let sort_order=$('#name_order').val();
    if(sort_order=="asc")
    {
        document.getElementById("name_order").value="desc";
    }
    if(sort_order=="desc")
    {
        document.getElementById("name_order").value="asc";
    }
}

function sort_year_of_birth()
{
    let table=$('.my_table');
    let tbody =$('#table1');

    tbody.find('tr').sort(function(a, b)
    {
        if($('#age_order').val()=='asc')
        {
            return $('td:nth-child(4)', a).text().localeCompare($('td:nth-child(4)', b).text());
        }
        else
        {
            return $('td:nth-child(4)', b).text().localeCompare($('td:nth-child(4)', a).text());
        }

    }).appendTo(tbody);

    let sort_order=$('#age_order').val();
    if(sort_order=="asc")
    {
        document.getElementById("age_order").value="desc";
    }
    if(sort_order=="desc")
    {
        document.getElementById("age_order").value="asc";
    }
}