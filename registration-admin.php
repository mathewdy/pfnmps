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
    <link rel="stylesheet" href="src/styles/bootstrap/css/bootstrap.css">
    <title>Admin</title>
</head>
<body>
<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-lg-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="card" style="border: none; box-shadow: 2px 2px 23px -6px rgba(0,0,0,0.18);">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <h2 class="text-center">Registration</h2>
                                    <hr>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <label for="">Email: </label>
                                        <input type="email" class="form-control" name="email" id="">
                                        <br>
                                        <label for="">Password:</label>
                                        <br>
                                        <input type="password" class="form-control" name="password">
                                        <br>
                                        <label for="">First Name:</label>
                                        <br>
                                        <input type="text" class="form-control" name="first_name">
                                        <br>
                                        <label for="">Middle Name:</label>
                                        <br>
                                        <input type="text" class="form-control" name="middle_name">
                                        <br>
                                        <label for="">Last Name:</label>
                                        <br>
                                        <input type="text" class="form-control" name="last_name">
                                        <br>
                                        <label for="">Gender:</label>
                                        <br>
                                        <label for="">Male</label>
                                        <input type="radio" name="gender" value="Male">
                                        <label for="">Female</label>
                                        <input type="radio" name="gender" value="Female">
                                        <br>
                                        <label for="">Address</label>
                                        <br>
                                        <input type="text" class="form-control" name="address">
                                        <br>
                                        <label for="">Image:</label>
                                        <br>
                                        <input type="file" class="form-control" name="image" id="">
                                        <br>
                                        <input type="submit" class="btn btn-primary w-100" name="register" value="Register">
                                    </form>

                                    <a class="nav-link text-center w-100" href="login-admin.php">Log In</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
   
<script src="opacity.js"> </script>
    
</body>
</html>


<?php


if(isset($_POST['register'])){

    //year month date
    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');

    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];

    if($gender == 'Male'){
        $gender = 1;
    }else{
        $gender = 2;
    }
    $address = $_POST['address'];
    
    
    $image = $_FILES['image']['name'];
    $allowed_extension = array('gif' , 'png' , 'jpeg', 'jpg' , 'PNG' , 'JPEG' , 'JPG' , 'GIF');
    $filename = $_FILES ['image']['name'];
    $file_extension = pathinfo($filename , PATHINFO_EXTENSION);



    $user_id = "2022" . rand('00000', '99999');
    $user_type = "1";

    $verify_sql = "SELECT email FROM admins WHERE email = '$email'";
    $run_verify = mysqli_query($conn,$verify_sql);

    if(mysqli_num_rows($run_verify) > 0){
        echo "user already added";
        exit();
    }

    $verify_user_id = "SELECT user_id FROM admins WHERE user_id = '$user_id'";
    $run_verify_2 = mysqli_query($conn,$verify_user_id);
    if(mysqli_num_rows($run_verify_2) > 0){
        echo "user_id already added";
        exit();
    }
    
    if(!in_array($file_extension, $allowed_extension)){
        echo "image not added"  ;
        //ayusin din to
       exit();
    }else{
        $insert = "INSERT INTO admins (user_id,email,password,first_name,middle_name,last_name,gender,address,user_type,image,date_time_created,date_time_updated) VALUES ('$user_id', '$email', '$password', '$first_name','$middle_name' , '$last_name' , '$gender', '$address','$user_type', '$image' ,'$date $time' , '$date $time') ";
        $query_sql = mysqli_query($conn,$insert);
        move_uploaded_file($_FILES["image"]["tmp_name"], "admin_image/" . $_FILES["image"] ["name"]);

        if($query_sql){
            echo "user added";
            $_SESSION['user_id'];
            header('Location: security-questions-admin.php');
            // dapat ma redirect na lang sa set up password chrurut
        }else{
            echo "error";
        }

    }



}

ob_end_flush();
?>