<?php

include('../connection.php');
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
    <form action="login-parent.php" method="POST">

    <h2>Welcome</h2>
    <label for="">Email</label>
    <input type="email" name="email">
    <label for="">Password</label>
    <input type="password" name="password">
    <input type="submit" name="login" value="Log In">
    <a href="">Forgot password?</a>
    </form>
</body>
</html>




<?php
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
    $run = mysqli_query($conn,$query);

    if(mysqli_num_rows($run) > 0){
        if($run){
            $_SESSION['email'] = $email;
            echo "<script>window.location.href='home-parent.php' </script>";
        }
    }else{
        echo "wrong email or password";
    }
}


ob_end_flush();
?>