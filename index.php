<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedCard</title>
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "");
    $name = "Anna";
    $query = "CREATE DATABASE med_card";

    if ($link == false) {
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    } else {
        print("Соединение установлено успешно<br>");
    }
    mysqli_set_charset($link, "utf8");

    $query = "USE med_card";
    if (mysqli_query($link, $query)) {
        echo "successfully <br>";
    } else {
        echo "Error: " . mysqli_error($link) . "<br>";
    }
    
    /*$query = "CREATE TABLE med_card (
        id INT AUTO_INCREMENT PRIMARY KEY,
        day DATE,
        title TEXT,
        medications TEXT,
        doctor TEXT,
        clinic TEXT,
        orgat TEXT,
        part TEXT,
        names TEXT
        )";
        */

    $query = "select id, day, title from med_card";
    if ($result = mysqli_query($link, $query)) {
        echo "successfully <br>";
    } else {
        echo "Error: " . mysqli_error($link) . "<br>";
    }
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($rows as $row) {
        print("Дата: " . $row['day'] . "; Заболевание: " . $row['title'] . "<br>");
    }


    ?>
</body>

</html>