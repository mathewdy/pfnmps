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
    <link rel="stylesheet" href="../src/styles/bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>
<body class="bg-light">
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-lg-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="card" style="border: none; box-shadow: 2px 2px 23px -6px rgba(0,0,0,0.18);">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form action="login-parent.php" method="POST">
                                    <div class="text-center mb-5">
                                        <h1 class="h1" style="font-family: var(--lato-light);">Welcome</h1>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-md" type="email" name="email">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-md" type="password" name="password">
                                    </div>
                                    <div class="mt-5 pb-4 text-center">
                                        <input class="btn btn-primary w-100" type="submit" name="login" value="Sign in">
                                        <a href="registration.php" class="text-dark nav-link mt-2">Registration</a>
                                    </div>
                                    <hr class="featurette-divider">
                                    <div class=" text-center">
                                        <small>
                                            <a href="forgot-password.php">Forgot password?</a>
                                        </small>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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


        foreach($run as $row){
            $_SESSION['email'] = $email;
            $_SESSION['student_id'] = $row['student_id'];
            echo "<script>window.location.href='home-parent.php' </script>";
        }

      
    }else{
        echo "wrong email or password";
    }
}


ob_end_flush();
?>