<?php
$link = mysqli_connect("localhost", "root", "");
$query = "USE med_card";
if (mysqli_query($link, $query)) {
    echo "successfully <br>";
} else {
    echo "Error: " . mysqli_error($link) . "<br>";
}

if (isset($_POST)) {
    print("You enter: " . $_POST['doctor']);
    // echo "
    //     <html>
    //     <head>
    //     <meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
    //     </head>
    //     </html>
    //     ";
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
