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

        <label for="">Date</label>
        <input type="date" name="date" id="">
        <input type="submit" name="enter" value="enter">
    </form>
</body>
</html>


<?php




// if(isset($_POST['enter'])){

    $name = "mathew";

    date_default_timezone_set("Asia/Manila");
    $date = date("Y-m-d");

    $begin = $date;
    // $end = '2020-05-05';
    // $date = date('Y-m-d', strtotime($_POST['date']));
    $end = date('Y-m-d',strtotime($begin . '+30 days'));


    $day_count = 0;
    while(0==0){
        $day_count++;

        echo "<br>";

        echo $begin = date('Y-m-d',strtotime($begin. "+1 days"));
        if($day_count==31){

            
            break;
        }
        // $insert = "INSERT INTO try (date) VALUES ('$begin')";
        // $run = mysqli_query($conn,$insert);

        // if($run){
        //     echo "added";
        // }else{
        //     echo "error" . $conn->error;
        // }
    }


// }





?>