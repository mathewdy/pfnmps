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
    <main class="d-flex w-100 vh-100" style="overflow: hidden; position: relative;">
        <svg viewBox="0 0 200 200" style="position: absolute; left: -25%; top: -70%; transform: rotate(25deg);" xmlns="http://www.w3.org/2000/svg">
            <path fill="#9EF0F0" d="M41.1,-50.6C56.3,-45.6,73.6,-37.6,73.8,-26.5C73.9,-15.4,56.9,-1.2,50,15.1C43.1,31.4,46.4,49.9,39.7,63.4C33.1,77,16.5,85.6,-1.5,87.7C-19.5,89.7,-39.1,85.2,-51.4,73.5C-63.7,61.8,-68.7,42.9,-71.5,25.4C-74.2,7.9,-74.7,-8.3,-66.9,-18.5C-59.1,-28.7,-43.1,-33,-30.6,-38.9C-18,-44.8,-9,-52.3,2,-55C13,-57.7,26,-55.7,41.1,-50.6Z" transform="translate(100 100)" />
        </svg>
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
<script src="opacity.js"> </script>

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