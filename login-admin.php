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
    <h1>Login Admin</h1>
    <form action="login-admin.php" method="POST">
        <label for="">Username</label>
        <input type="text" name="username">
        <br>

        <label for="">Password</label>
        <input type="password" name="password">
        <br>
        
        <input type="submit" name="login" value="Login">
        <a href="">Forgot Password?</a>
    </form>
</body>
</html>

<?php

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password = '$password'";
    $run = mysqli_query($conn,$query);

    if(mysqli_num_rows($run) > 0){
        if($run){
            $_SESSION['username'] = $username;
            echo "<script>window.location.href='home-admin.php' </script>";
        }
    }else{
        echo "wrong username or password";
    }
}


?>