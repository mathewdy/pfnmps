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
    <main class="d-flex w-100 vh-100" style="overflow: hidden; position: relative;">
        <svg viewBox="0 0 200 200" style="position: absolute; left: -25%; top: -70%; transform: rotate(25deg);" xmlns="http://www.w3.org/2000/svg">
            <path fill="#FF0066" d="M41.1,-50.6C56.3,-45.6,73.6,-37.6,73.8,-26.5C73.9,-15.4,56.9,-1.2,50,15.1C43.1,31.4,46.4,49.9,39.7,63.4C33.1,77,16.5,85.6,-1.5,87.7C-19.5,89.7,-39.1,85.2,-51.4,73.5C-63.7,61.8,-68.7,42.9,-71.5,25.4C-74.2,7.9,-74.7,-8.3,-66.9,-18.5C-59.1,-28.7,-43.1,-33,-30.6,-38.9C-18,-44.8,-9,-52.3,2,-55C13,-57.7,26,-55.7,41.1,-50.6Z" transform="translate(100 100)" />
        </svg>
        <!-- <svg viewBox="0 0 200 200" style="position: absolute; right: -60%; top: -20%; transform: rotate(90deg);" xmlns="http://www.w3.org/2000/svg">
            <path fill="#FF0066" d="M34.5,-48.9C48.4,-37.5,65.6,-32.2,74.3,-20.6C82.9,-9,83,9,77.5,25C72,40.9,61,54.9,47.2,66.3C33.4,77.7,16.7,86.5,2,83.8C-12.8,81.2,-25.5,67,-40.3,55.9C-55.1,44.8,-71.8,36.8,-75.5,24.7C-79.3,12.6,-70,-3.6,-60.4,-15.5C-50.8,-27.4,-40.9,-35,-30.8,-47.6C-20.6,-60.2,-10.3,-77.7,0,-77.8C10.4,-77.8,20.7,-60.3,34.5,-48.9Z" transform="translate(100 100)" />
        </svg> -->
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
    <?php if(isset($_GET['p?'])){ ?>
        <div class="flash-data" data-flashdata="<?= $_GET['p?']; ?>"></div> 
    <?php }?>
    <!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const flashdata = $('.flash-data').data('flashdata')
    if(flashdata){
        Swal.fire({
            icon: 'error',
            title: 'Log In Failed!',
            text: 'Your Username or Password is incorrect!',
            showConfirmButton: true
        })
    }
</script>
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
            header("Location: login-admin.php?p?=1");
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