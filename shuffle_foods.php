<?php

$foods = array("tortang burat", "dinuguang puday", "kinilaw na betlog", "nilagang tinggil", "tite1", "tite2", "tite3", "tite24");
shuffle($foods);
$two_meal = array_slice($foods, 6);
$db = $two_meal;
$string_meal = implode(", ", $db);
$days = array(1, 2, 3, 4);
for($i=0;$i<count($days);$i++){
    if($string_meal == $string_meal){
        shuffle($foods);
        $two_meals = array_slice($foods, 6);
        $dbs = $two_meals;
        $meal = implode("," ,$dbs);
        echo "Day ".$days[$i].": ".$meal."" . "<br>";
    }
    
}
?>