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
    <title>Document</title>
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
                                    <form method="POST" action="confirm-password.php">
                                        <h4 class="my-4 text-primary text-center"><?= $email = $_SESSION['email'];?></h4>
                                        <hr>
                                        <label>Please Enter New Password</label>
                                        <input type="password"  class="form-control mb-3" name="password1" required>
                                        <label >Confirm New Password</label>
                                        <input type="password" class="form-control mb-3" name="password2"  required>
                                        <span class="d-flex justify-content-center align-items-center">
                                            <a href="login-admin.php" class="px-2">Cancel</a>
                                            <input type="submit" class="btn btn-primary px-2" name="reset" value="Reset Password">
                                        </span>
                                       
                                    </form>
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

if(isset($_POST['reset'])){
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $email = $_SESSION['email'];

    // sendMail("$email");
    echo "sent  or not" . $email;

    // if($password1 != $password2){
    //     echo "<script>alert('Password Doesn't Match') </script>";
    // }

    // $query_update = "UPDATE admins SET password = '$password1' WHERE email='$email' ";
    // $run = mysqli_query($conn,$query_update) && sendMail($email);

    // if($run){
    //     echo "<script>alert('Password Updated') </script>";
    //     echo "<script>window.location.href='login-admin.php' </script>";
    // }
}
ob_end_flush();

?>