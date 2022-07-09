<?php
include('connection.php');
session_start();
echo $email = $_SESSION['email'];



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

<a href="login-admin.php">Cancel</a>
    <form method="POST" action="confirm-password.php">
        <label>Please Enter New Password</label>
        <input type="password" name="password1" required>
        <label >Please Enter New Password</label>
        <input type="password"  name="password2"  required>
        <input type="submit" name="reset" value="Reset Password">
    </form>



</body>

</html>

<?php

if(isset($_POST['reset'])){
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $email = $_SESSION['email'];

    sendMail("$email");
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

?>