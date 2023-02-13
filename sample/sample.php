<?php


$bmi = 30;
$normal = 'normal';
if($bmi < 18.4){
    echo "Underweight";
}else if($bmi >= 18.5 && $bmi <= 24.9){
    echo "Normal";
}else if($bmi >= 25 && $bmi <= 29.9){
    echo "Overweight";
}else if($bmi >= 30){
    echo "Obesity";
}


?>