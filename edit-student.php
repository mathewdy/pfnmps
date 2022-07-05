<?php
include('connection.php');
session_start();
ob_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    


    //to be continued to 
    if(isset($_GET['student_id'])){
        $student_id = $_GET['student_id'];
        

        $query = "SELECT * FROM students WHERE student_id = '$student_id'";
        $run = mysqli_query($conn,$query);

        if(mysqli_num_rows($run) > 0){
            foreach($run as $row ){
                ?>

                    <?php echo $row ['first_name'];?>

                <?php
            }
        }
    }


    ob_end_flush();
    ?>
</body>
</html>