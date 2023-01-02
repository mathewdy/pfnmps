<?php
include('connection.php');
require_once __DIR__.'/vendor/autoload.php';
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
<body class="bg-light">
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-lg-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="card" style="border: none; box-shadow: 2px 2px 23px -6px rgba(0,0,0,0.18);">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form action="login-admin.php" method="POST">
                                    <div class="text-center mb-5">
                                        <h1 class="h1" style="font-family: var(--lato-light);">ADMIN LOGIN</h1>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-md" type="text" name="email">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-md" type="password" name="password">
                                    </div>
                                    <div class="mt-5 pb-4 text-center">
                                        <input class="btn btn-primary w-100" type="submit" name="login" value="Sign in">
                                        <a href="registration-admin.php" class="text-dark nav-link mt-2">Registration</a>
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

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
    $run = mysqli_query($conn,$sql);

    if($run){
        if(mysqli_num_rows($run) > 0){
            foreach($run as $row){
                $_SESSION['email'] = $email;
                $_SESSION['user_id'] = $row['user_id'];
                header("Location: home-admin.php");
            }
            
        }else{
            echo "User not found" . $conn->error;
        }
    }

    // if(mysqli_num_rows($run) > 0){
    //     if($run){
    //         // $get_all_numbers = "SELECT `user_id` FROM `admins` WHERE email= '$username'";
    //         // $query_get_numbers = mysqli_query($conn, $get_all_numbers);
    //         // if(mysqli_num_rows($query_get_numbers) > 0){
    //         //     $rows = mysqli_fetch_array($query_get_numbers);
    //             $_SESSION['email'] = $email;
    //             $_SESSION['user_id'] = $rows['user_id'];
    //         // $messagebird = new MessageBird\Client('M7noSmsStsGtTf2VM7lYapDGs');
    //         // $message = new MessageBird\Objects\Message;
    //         // $message->originator = '+639156915704';
    //         // $message->recipients = $rows['contact_number'];
    //         // $message->body = "Dear Mr/Mrs: $last_name, we would like you to inform your reservation from ProCreations is from $date_in $time_in to $date_out $time_out. Please check your email to inbox/spam, thank you.";
    //         // $response = $messagebird->messages->create($message);
    //         echo "<script>window.location.href='home-admin.php' </script>";
    //         }else{
    //             echo $conn->error;
    //         }
    //     }
    // }else{
    //     echo "wrong username or password" . $conn->error;
    // }

    }
?>