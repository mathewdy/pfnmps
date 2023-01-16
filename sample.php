<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="date" name="date_of_birth">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php


if(isset($_POST['submit'])){
    //year month date
    date_default_timezone_set("Asia/Manila");
    $date = date('y-m-d');

    $date_of_birth = $_POST['date_of_birth'];

    $age = date_diff(date_create($date_of_birth),date_create($date))->y;
    echo $age;


    //may error sa add-patient
    // may error sa registartion ng parents
}


?>