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
                                    <h1>Enter Email</h1>
                                    <!-- <hr class="featurette-divider"> -->
                                    <form action="forgot-password.php" method="POST">

                                    <input type="email" class="form-control mb-3" name="email" placeholder="Example@gmail.com">
                                    <span class="pt-3">
                                        <a href="login-admin.php" class="btn btn-danger">Cancel</a>
                                        <input type="submit" class="btn btn-primary" name="forgot_password">
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