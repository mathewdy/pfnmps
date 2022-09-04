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



//*underweight

//  28days

// 1day == 5 meals

// 8am  , 10am , 12pm , 5pm ,  8pm 



//*obese

// 28 days 

//1 day == 5meals 
// 8am  , 10am , 12pm , 5pm ,  8pm 

// exercise = 80 to 100hrs per week

// *mathew* , ako na din mag dedecide ng workout ng bata. Pwedeng playtime or literally exercise


//next flow, is yung checklist,

// mapupunta sya kay user then, yung daily activities is, i checheck nya. KUNG GINAWA NYA BA TALAGA YON.


// pag natapos na yung 28 days nya, mag nonotif mismo sa system yun. at sa kanya na kailangan nyang bumalik
// sa nutritionist personally.



// pula == nakalimutan or hindi ginawa yung activity

// green == complete tasks sa day 1


?>