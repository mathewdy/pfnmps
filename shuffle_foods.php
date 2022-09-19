<?php
include ("connection.php");

// MAX(id) is quicker than COUNT(*) in InnoDB
// $maxid = query "SELECT MAX(id) FROM QM_Products"

// // generate a list of N random values, making sure they're distinct
// $id_list = array();
// while (count($idlist) < 10) {
//   $rand_id = mt_rand(1,$maxid);
//   $id_list[$rand_id] = 1;
// }

// // convert the id list to a comma-separated string in an SQL query
// $id_list = implode(",", array_keys($id_list)); 
// $rows = query "SELECT * FROM QM_Products WHERE id IN ($id_list)"

    $days = array(1, 2, 3, 4, 5, 6, 7);

    for($i=0;$i<count($days);$i++){

            $rand_foods = "SELECT distinct name FROM foods WHERE food_type_id = 1 ORDER BY RAND()";
            $query_rand_foods = mysqli_query($conn, $rand_foods);
            $rand_meals = mysqli_fetch_array($query_rand_foods);
            $meals = ucwords($rand_meals['name']);
            $meals = implode(',',array_unique(explode(',', $meals)));

            $random_foods = "SELECT distinct name FROM foods WHERE food_type_id = 2 ORDER BY RAND()";
            $query_random_foods = mysqli_query($conn, $random_foods);
            $random_meals = mysqli_fetch_array($query_random_foods);
            $rand_meals = ucwords($random_meals['name']);
            $rand_meals = implode(',',array_unique(explode(',', $rand_meals)));

            $go_foods = "SELECT distinct name FROM foods WHERE food_type_id = 1 ORDER BY RAND()";
            $query_go_foods = mysqli_query($conn, $go_foods);
            $go_meals = mysqli_fetch_array($query_go_foods);
            $go = ucwords($go_meals['name']);
            $go = implode(',',array_unique(explode(',', $go)));

            $glow_foods = "SELECT distinct name FROM foods WHERE food_type_id = 2 ORDER BY RAND()";
            $query_glow_foods = mysqli_query($conn, $glow_foods);
            $glow_meals = mysqli_fetch_array($query_glow_foods);
            $glow = ucwords($glow_meals['name']);
            $glow = implode(',',array_unique(explode(',', $glow)));

            $grow_foods = "SELECT distinct name FROM foods WHERE food_type_id = 3 ORDER BY RAND()";
            $query_grow_foods = mysqli_query($conn, $grow_foods);
            $grow_meals = mysqli_fetch_array($query_grow_foods);
            $grow = ucwords($grow_meals['name']);
            $grow = implode(',',array_unique(explode(',', $grow)));
            echo "Day ".$days[$i].": ".$go." , ".$glow.", ".$grow.", ".$meals.", ".$rand_meals." " . "<br>";

            $array_meals = array($go, $glow, $grow, $meals, $rand_meals);
            $meal_per_day = implode(",", $array_meals);
            echo $meal_per_day . "<br>";
            // $array = explode(" ", $grow);
            // $array_d = array_unique($array);
            // echo implode(",", $array_d);
            // echo "Day ".$days[$i].": ".ucwords($go_meals['name'])." , ".ucwords($glow_meals['name'])." ,
            // ".ucwords($go_meals['name'])." , ".ucwords($glow_meals['name'])." ,
            //  ".ucwords($grow_meals['name'])." "."<br>";
    }
    
    
    // $foods[] = array($rows['name']);
    // shuffle($foods);
    

    // echo implode(", ", $foods);
    // $db = $two_meal;
    // $string_meal = implode(", ", $db);
    // $days = array(1, 2, 3, 4);
    // for($i=0;$i<count($days);$i++){
    //     if($string_meal == $string_meal){
    //         shuffle($foods);
    //         $two_meals = array_slice($foods, 5);
    //         $dbs = $two_meals;
    //         $meal = implode("," ,$dbs);
    //         echo "Day ".$days[$i].": ".$meal."" . "<br>";
    //     }
        
    // }
       

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