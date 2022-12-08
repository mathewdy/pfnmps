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

<a href="home-admin.php">Cancel</a>
    

    <?php

    if(isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];

        $sql = "SELECT * FROM admins WHERE user_id = '$user_id'";
        $run = mysqli_query($conn,$sql);

        if(mysqli_num_rows($run) > 0){
            
            foreach($run as $row){
                ?>
  
                    <form action="edit-profile-admin.php" method="POST">
                    <label for="">First Name:</label>
                    <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>">
                    <label for="">Last Name:</label>
                    <input type="text" name="last_name" value="<?php echo $row['last_name']?>">
                    <label for="">Address:</label>
                    <input type="text" name="address" value="<?php echo $row['address']?>">
                    <label for="">Email:<label>
                    <input type="email" value="<?php echo $row['email']?>" name="email">
                    
                    <label for="">Password:</label>
                    <input type="password" name="password" value="<?php echo $row['password']?>">
                    <input type="hidden" name="user_id" value="<?php echo $row['user_id']?>">
                    <input type="submit" name="update" value="Update">

                    </form>

                <?php
            }


        }
    }

    ?>

</body>
</html>

<?php

if(isset($_POST['update'])){
    $user_id = $_POST['user_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_update = "UPDATE admins SET first_name = '$first_name' , last_name = '$last_name', address='$address', email = '$email', password='$password' WHERE user_id = '$user_id'";
    $run_update = mysqli_query($conn,$sql_update);

    if($run_update){
        echo "updated profile";
    }else{
        echo "error";
    }
}

ob_end_flush();

?>