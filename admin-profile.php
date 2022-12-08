<?php

include('connection.php');
session_start();
ob_start();
$user_id = $_SESSION['user_id'];
 $user_id;
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
    
<a href="home-admin.php">Cancel</a>


    <!----profile ni admin--->

    <!-- riri gawa ka na lang modal para sa edit profile para di na mahirap---->

    <?php

        $sql = "SELECT * FROM admins WHERE user_id = '$user_id'";
        $run = mysqli_query($conn,$sql);

        if(mysqli_num_rows($run) > 0){
            foreach($run as $row){
                ?>
                    
                    <label for="">User Id:</label>
                    <p><?php echo $row['user_id']?></p>
                    <label for="">Name:</label>
                    <p><?php echo $row['first_name'] . " " . $row['last_name']?> </p>
                    <label for="">Address:</label>
                    <p><?php echo $row['address']?></p>
                    <label for="">Email:<label>
                    <p><?php echo $row['email']?></p>
                    <a href="edit-profile-admin.php?user_id=<?php echo $row['user_id']?>">Edit</a>

                    


                <?php
            }
        }

    ?>


</body>
</html>


<?php


ob_end_flush();

?>