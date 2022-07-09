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
    <h1>Enter Email</h1>
    <a href="login-admin.php">Cancel</a>

<form action="forgot-password.php" method="POST">

<input type="email" name="email">
<input type="submit" name="forgot_password">
    
</form>
    
</body>
</html>

<?php


if(isset($_POST['forgot_password'])){
    $email = $_POST['email'];

    $query = "SELECT email FROM admins WHERE email = '$email'";
    $run = mysqli_query($conn,$query);

    if(mysqli_num_rows($run) > 0){
        $_SESSION['email'] = $email;
        header('Location: confirm-password.php');
    }else{
        echo "Email doesn't match" . $conn->error;
    }

}

ob_end_flush();

?>