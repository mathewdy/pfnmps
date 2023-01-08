<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    BMI calculator
    <form action="" method="POST">
        <input type="number" name="weight" placeholder="Weight (kg)">
        <input type="number" name="height" placeholder="Height (cm)">
        <input type="submit" name="calculate">
    </form>
</body>
</html>

<?php

if(isset($_POST['calculate'])){
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    $compute_height =  $height / 100;
    $total_height = $compute_height * $compute_height;
    $compute_BMI = $weight / $total_height;

    echo number_format((float)$compute_BMI,2,'.','');

}


?>