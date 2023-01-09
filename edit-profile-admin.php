<?php
include('connection.php');
session_start();
ob_start();
include('opacity.js');

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
  
                    <form action="edit-profile-admin.php" method="POST" enctype="multipart/form-data">
                    <label for="">Image:</label>
                    <input type="file" name="image">
                    <br>
                    <img src="<?php echo "admin_image/". $row['image']; ?>" alt="" width="200px" height="200px">
                    <br>
                    <label for="">First Name:</label>
                    <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>">
                    <label for="">Last Name:</label>
                    <input type="text" name="last_name" value="<?php echo $row['last_name']?>">
                    <label for="">Address:</label>
                    <input type="text" name="address" value="<?php echo $row['address']?>">
                    <label for="">Email:<label>
                    <input type="email" value="<?php echo $row['email']?>" name="email">
                    <input type="hidden" name="old_image" value="<?php echo $row ['image']?>">
                    
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


    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != ''){
        $update_filename = $_FILES['image']['name'];
    }else{
        $update_filename = $old_image;
    }


    if(empty($new_image)){
        $query_update_1 = "UPDATE admins SET first_name = '$first_name' , last_name = '$last_name', address='$address', email = '$email', password='$password' WHERE user_id = '$user_id'";
        $run_1 = mysqli_query($conn,$query_update_1);
        if($run_1){
            echo  "<script>window.location.href='admin-profile.php' </script>";
        }else{
            echo "error update_1" . $conn->error; 
        }
    }


    $allowed_extension = array('gif','png','jpg','jpeg', 'PNG', 'GIF', 'JPG', 'JPEG');
    $filename = $_FILES['image']['name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($file_extension,$allowed_extension)){
        echo "<script>alert('File not allowed'); </script>";
        echo "<script>window.location.href='profile.php' </script>";
    }else{
        $sql_update = "UPDATE admins SET first_name = '$first_name' , last_name = '$last_name', address='$address', email = '$email', password='$password', image = '$update_filename' WHERE user_id = '$user_id'";
        $run_update = mysqli_query($conn,$sql_update);
    
        if($run_update){
            move_uploaded_file($_FILES["image"]["tmp_name"], "admin_image/".$_FILES["image"]["name"]);
            unlink("admin_image/". $old_image);
            echo "<script>window.location.href='admin-profile.php' </script>";

        }else{
            echo "error";
        }
    }
    

   
}

ob_end_flush();

?>