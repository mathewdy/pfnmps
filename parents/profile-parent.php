<?php
include('../connection.php');
session_start();
include('security-parent.php');
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/styles/bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../admin-template/css/app.css"> -->
    <link rel="stylesheet" href="../src/styles/custom/stickynav.css">
    <!-- <link rel="stylesheet" href="../src/styles/custom/sidenav.css"> -->
    <title>Document</title>
</head>
<body>
<div class="outer-container d-flex">

<!-- Sidebar -->
  <div class="sticky-nav bg-white vh-100 shadow" style="height: 100%;">
    <a href="#" class="brand p-3 link-dark text-decoration-none bg-white text-center" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
        <img src="../logo.jpg" alt="" class="card-img-top" style="border-radius: 50px;">
    </a>
    <ul class="list nav nav-flush mb-auto text-center">
      <li class="nav-item">
        <a href="home-parent.php" class="nav-link active py-3 d-flex flex-column align-items-center text-start border-bottom" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
            <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
            <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
            </svg>
            <p class="p-0 m-0" style="font-size: 12px;">Home</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="dashboard-parent.php" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clipboard-data-fill" viewBox="0 0 16 16">
            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
            </svg>
            <p class="p-0 m-0" style="font-size: 12px;">Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
            </svg>
            <p class="p-0 m-0" style="font-size: 12px;">Settings</p>
        </a>
      </li>
    </ul>
  </div>

  <!-- Content container -->
<main class="main-container container-fluid-lg bg-light" style="width: 100%; position: relative">
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-0" style="box-shadow: none;">
        <div class="container-fluid justify-content-end">
            <div class="dropdown border-top">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['email']; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUser3">
                    <li><a class="dropdown-item" href="logout-parent.php    ">Sign out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- content starts here -->
    <main class="content">
        <div class="container-fluid" style="height: 100%;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-3 py-0" style="border: none; height: 100%; box-shadow: 2px 2px 23px -6px rgba(0,0,0,0.17);">
                        <div class="card-body">

                        <!-----parents--->

                        <h1 class="text-muted h1 px-4 mb-3">Profile</h1>
                            <?php

                            $query = "SELECT users.first_name AS 'users_first_name', users.middle_name AS 'users_middle_name', users.last_name AS 'users_last_name' , users.room AS 'users_room', users.contact_number AS 'users_contact_number',users.user_id AS 'users_id', users.house AS 'users_house', users.street AS 'users_street' , users.subdivision AS 'users_subdivision' , users.barangay AS 'users_barangay', users.city AS 'users_city', users.zip AS 'users_zip', users.image AS 'parent_image', students.first_name AS 'students_first_name', students.middle_name  AS 'students_middle_name', students.last_name  AS 'students_last_name', students.date_of_birth AS 'students_date_of_birth', students.gender AS 'students_gender', students.student_id
                            AS 'students_student_id' FROM users 
                            LEFT JOIN students ON  users.student_id = students.student_id WHERE email = '$email'";
                            $run = mysqli_query($conn,$query);

                            if(mysqli_num_rows($run) > 0){
                            foreach ($run as $row) {
                                ?>
                                    <form action="" method="POST" enctype="multipart/form-data">

                                    <!-----hindi pa tapos yung profile---->
                                    <!-- <label for="">Image:</label> -->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-7 mb-5 px-5">
                                                    <img class="card-img-top" src="<?php echo "guardian_image/". $row['parent_image']; ?>" alt="" width="200" height="250">
                                                </div>
                                                <div class="col-lg-12 px-5 mb-3">
                                                    <p class="p-0 m-0 text-muted">Name:</p>
                                                    <p class="h5 lead text-primary"><?php echo ucfirst($row ['users_first_name']) . " " . ucfirst($row ['users_middle_name']) . " "  . ucfirst($row ['users_last_name'])  ?></p>
                                                </div>
                                                <div class="col-lg-12 px-5 mb-3">
                                                    <p class="p-0 m-0 text-muted">Mobile Number:</p>
                                                    <p class="h5 lead text-primary"><?php echo ucfirst($row ['users_contact_number']) ?></p>
                                                </div>
                                                <div class="col-lg-12 px-5">
                                                    <p class="p-0 m-0 text-muted">Address (Room / Floor / Unit No. & Building Name): </p>
                                                    <p class="h5 lead text-primary"><?php echo $row ['users_room'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12 px-5 mb-3">
                                                    <p class="p-0 m-0 text-muted">House / Lot & Block No.: </p>
                                                    <p class="h5 lead text-primary"><?php echo $row ['users_house']?></p>
                                                </div>
                                                <div class="col-lg-12 px-5 mb-3">
                                                    <p class="p-0 m-0 text-muted">Street </p>
                                                    <p class="h5 lead text-primary"><?php echo $row ['users_street']?></p>
                                                </div>
                                                <div class="col-lg-12 px-5 mb-3">
                                                    <p class="p-0 m-0 text-muted">Subdivision:</p>
                                                    <p class="h5 lead text-primary"><?php echo $row ['users_subdivision']?></p>
                                                </div>
                                                <div class="col-lg-12 px-5 mb-3">
                                                    <p class="p-0 m-0 text-muted">Barangay:</p>
                                                    <p class="h5 lead text-primary"><?php echo $row ['users_barangay']?></p>
                                                </div>
                                                <div class="col-lg-12 px-5 mb-3">
                                                    <p class="p-0 m-0 text-muted">City/Municipality:</p>
                                                    <p class="h5 lead text-primary"><?php echo $row ['users_city']?></p>
                                                </div>
                                                <div class="col-lg-12 px-5 mb-3">
                                                    <p class="p-0 m-0 text-muted">Zip:</p>
                                                    <p class="h5 lead text-primary"><?php echo $row ['users_zip']?></p>
                                                </div>
                                                <div class="col-lg-12 px-5">
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding: 5px 20px;" class="btn btn-primary">Edit</a>
                                                    <!-- <a data-toggle="modal" data-target="#exampleModal" href="edit-profile-parent.php?users_id=<?php echo $row['users_id']?>"  style="padding: 5px 20px;" class="btn btn-primary">Edit</a> -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="" method="POST" enctype="multipart/form-data">
                                                            <!-----hindi pa tapos yung profile---->
                                                            <label for="">Image:</label>
                                                            <br>
                                                            <span class="text-center">
                                                                <img class="card-img-top px-5" src="<?php echo "guardian_image/". $row['parent_image']; ?>" alt="Parent's Image" width="200px" height="200px">
                                                            </span>
                                                            <br>
                                                            <br>
                                                            <input type="file" class="form-control mb-4" id="formFile" name="image">
                                                            <input type="hidden" name="old_image" value="<?php echo $row ['parent_image']?>">

                                                            <label for="">First Name:</label>
                                                            <br>
                                                            <input type="text" class="form-control py-1" name="first_name" value="<?php echo $row['users_first_name']?>">

                                                            <br>
                                                            <label for="">Middle Name:</label>
                                                            <br>
                                                            <input type="text" class="form-control py-1" name="middle_name" value="<?php echo $row['users_middle_name']?>">
                                                            <br>

                                                            <label for="">Last Name:</label>
                                                            <br>
                                                            <input type="text" class="form-control py-1" name="last_name" value="<?php echo $row['users_last_name']?>">

                                                            <br>
                                                            <label for="">Contact Number:</label>
                                                            <br>
                                                            <input type="text" class="form-control py-1" name="contact_number" value="<?php echo $row['users_contact_number']?>" placeholder="+63">

                                                            <br>
                                                            <label for="">Room / Floor / Unit No. & Building Name:</label>
                                                            <br>
                                                            <input type="text" class="form-control py-1" name="room" value="<?php echo $row['users_room']?>">
                                                            <br>

                                                            <label for="">House / Lot & Block No.: </label>
                                                            <br>
                                                            <input type="text" class="form-control py-1" name="house" value="<?php echo $row['users_house']?>">
                                                            <br>

                                                            <label for="">Street: </label>
                                                            <input type="text" class="form-control py-1" name="street" value="<?php echo $row['users_street']?>">
                                                            <br>

                                                            <label for="">Subdivision: </label>
                                                            <input type="text" class="form-control py-1" name="subdivision" value="<?php echo $row ['users_subdivision']?>">
                                                            <br>

                                                            <label for="">Barangay: </label>
                                                            <input type="text" class="form-control py-1" name="barangay" value="<?php echo $row ['users_barangay']?>">
                                                            <br>

                                                            <label for="">City/Municipality: </label>
                                                            <input type="text" class="form-control py-1" name="city" value="<?php echo $row ['users_city']?>">
                                                            <br>

                                                            <label for="">Zip: </label>
                                                            <input type="text" class="form-control py-1" name="zip" value="<?php echo $row ['users_zip']?>">

                                                            <input type="hidden" name="user_id" value="<?php echo $row['users_id']?>">
                                                            <br>

                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <input type="submit" class="btn btn-primary" name="update_guardian" value="Update">



                                                            </form>
                                                        </div>
                                                        <!-- <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>

                                <?php
                            }
                            }

                            ?>    
                                        
                        </div>   
                    </div>     
                </div>
            </div>
        </div>
    </main>
    <footer class="footer bg-white p-2 w-100">
        <p class="text-center text-muted">PFNMPS@2022</p>
    </footer>
</main>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script> -->
<!-- <script src="../src/styles/custom/sidenav.js"></script> -->
<script src="../admin-template/js/app.js"></script>
<script src="src/styles/custom/app.js"></script>


</body>
</html>

<?php

if(isset($_POST['update_guardian'])){

    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');

    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name= $_POST['last_name'];
    $contact_number = $_POST['contact_number'];
    $room = $_POST['room'];
    $house = $_POST['house'];
    $street = $_POST['street'];
    $subdivision = $_POST['subdivision'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $user_id = $_POST['user_id'];


    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];
    
    if(empty($new_image)){
        $query_update_1 = "UPDATE users SET first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', contact_number=  '$contact_number', room = '$room' , house = '$house', street = '$street' , subdivision = '$subdivision',  barangay = '$barangay', city = '$city', zip = '$zip' WHERE user_id = '$user_id' ";
        $run_1 = mysqli_query($conn,$query_update_1);
        if($run_1){
            echo "<script>window.location.href='profile-parent.php' </script>";
        }else{
            echo "error update_1" . $conn->error; 
        }
    }

    if($new_image != ''){
        $update_filename = $_FILES['image']['name'];
    }else{
        $update_filename = $old_image;
    }

   

    $allowed_extension = array('gif','png','jpg','jpeg', 'PNG', 'GIF', 'JPG', 'JPEG');
    $filename = $_FILES['image']['name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($file_extension,$allowed_extension)){
        echo "<script>alert('File not allowed'); </script>";
        echo "<script>window.location.href='profile-parent.php' </script>";
    }else{
        
        $query_update_2 = "UPDATE users SET first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', contact_number=  '$contact_number', room = '$room' , house = '$house', street = '$street' , subdivision = '$subdivision',  barangay = '$barangay', city = '$city', zip = '$zip' , image= '$update_filename' WHERE user_id = '$user_id' ";
        $run_update = mysqli_query($conn,$query_update_2);

        if($run_update){
            move_uploaded_file($_FILES["image"]["tmp_name"], "guardian_image/".$_FILES["image"]["name"]);
            unlink("guardian_image/". $old_image);
            echo "<script>alert('Profile updated!') </script>";
            echo "<script>window.location.href='profile-parent.php' </script>";
            // echo "<script>window.location.href='Units.php' </script>";
        }else{
            echo "error_2" . $conn->error;
        }
        
    }

}



ob_end_flush();
?>