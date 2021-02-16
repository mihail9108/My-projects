<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index/bootstrap.min.css">
    <link rel="stylesheet" href="css/index/bootstrap-grid.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/sort.js" defer></script>
    <title>ТЗ</title>
</head>
<body>
<style>
    .sort_result {
        cursor: pointer;
    }
    .selected_choise {
        background: #ffffe1!important;
        color: black!important;
    }
</style>
<?php
//массив с очками
$attempts = file_get_contents('js/data_attempts.json');
$a_value = json_decode($attempts, true);

//массив с инфой о гонщиках
$cars = file_get_contents('js/data_cars.json');
$b_value = json_decode($cars, true);


$result = [];
$num = 0;

//собираем единный массив
foreach ($b_value as $el_b) {
    foreach ($el_b as $value) {

        //присваиваем значения новому массиву
        $result[$num]['id'] = $value['id'];
        $result[$num]['name'] = $value['name'];
        $result[$num]['car'] = $value['car'];
        $result[$num]['city'] = $value['city'];
        $result[$num]['result'] = [];

        //создаем доп. массив на очки-попытки каждого гонщика
        foreach ($a_value as $el_a) {
            foreach ($el_a as $value2) {

                if ($value['id'] === $value2['id']) {
                    $result[$num]['result'][] = $value2['result'];
                }
            }
        }
        $result[$num]['all_counts'] = array_sum($result[$num]['result']);

        $num++;

    }
}
//отсортируем по полю очков, по убыванию
usort($result, function ($a, $b) {
    return ($a['all_counts'] < $b['all_counts']);
});

?>

<!--создаем таблицу-->
<table class=" my_table table table-striped table-hover">
    <thead class="thead-dark">
    <tr>
        <th>Номер места</th>
        <th>Имя пилота</th>
        <th>Город пилота</th>
        <th>Автомобиль</th>
        <th class="sort_result">Попытка 1</th>
        <th class="sort_result">Попытка 2</th>
        <th class="sort_result">Попытка 3</th>
        <th class="sort_result">Попытка 4</th>
        <th>Сумма очков</th>
    </tr>
    </thead>
    <tbody id="table1">
    <?php

    //    выводим значения из массива
    $number = 1;
    foreach ($result as $value) {

        echo "<tr>";
        echo "<td>" . $number . "</td>";
        echo "<td>" . $value["name"] . "</td>";
        echo "<td>" . $value["city"] . "</td>";
        echo "<td>" . $value["car"] . "</td>";
        echo "<td>" . $value["result"][0] . "</td>";
        echo "<td>" . $value["result"][1] . "</td>";
        echo "<td>" . $value["result"][2] . "</td>";
        echo "<td>" . $value["result"][3] . "</td>";
        echo "<td>" . $value['all_counts'] . "</td>";
        echo "</tr>";

        $number++;
    }


    ?>
    </tbody>
</table>
<!--создаем таблицу-->
<input type="hidden" id="order" value="asc">

</body>
</html>