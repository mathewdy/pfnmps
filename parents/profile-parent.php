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
    <!-- <link rel="stylesheet" href="../src/styles/bootstrap/css/bootstrap.css"> -->
    <link rel="stylesheet" href="../admin-template/css/app.css">
    <link rel="stylesheet" href="../src/styles/custom/stickynav.css">
    <!-- <link rel="stylesheet" href="../src/styles/custom/sidenav.css"> -->
    <title>Document</title>
</head>
<body>
<div class="outer-container d-flex">

<!-- Sidebar -->
  <div class="sticky-nav bg-white vh-100 shadow" style="height: 100%;">
    <a href="#" class="brand p-3 link-dark text-decoration-none bg-white text-center" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#7895B2" class="bi bi-egg-fried" viewBox="0 0 16 16">
        <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        <path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z"/>
        </svg>
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
                    <div class="card" style="border: none; height: 100%; box-shadow: 2px 2px 23px -6px rgba(0,0,0,0.17);">
                        <div class="card-body">

                        <!-----parents--->

                        <h1>Parent</h1>
                            <?php

                            $query = "SELECT users.first_name AS 'users_first_name', users.middle_name AS 'users_middle_name', users.last_name AS 'users_last_name' , users.room AS 'users_room',users.user_id AS 'users_id', users.house AS 'users_house', users.street AS 'users_street' , users.subdivision AS 'users_subdivision' , users.barangay AS 'users_barangay', users.city AS 'users_city', users.zip AS 'users_zip', users.image AS 'parent_image', students.first_name AS 'students_first_name', students.middle_name  AS 'students_middle_name', students.last_name  AS 'students_last_name', students.date_of_birth AS 'students_date_of_birth', students.gender AS 'students_gender', students.student_id
                            AS 'students_student_id' FROM users 
                            LEFT JOIN students ON  users.student_id = students.student_id WHERE email = '$email'";
                            $run = mysqli_query($conn,$query);

                            if(mysqli_num_rows($run) > 0){
                            foreach ($run as $row) {
                                ?>
                                    <form action="" method="POST" enctype="multipart/form-data">

                                    <!-----hindi pa tapos yung profile---->
                                    <label for="">Image:</label>
                                    <img src="<?php echo "../guardian_image/". $row['parent_image']; ?>" alt="" width="200px" height="200px">
                                    <br>

                                    <label for="">Name:</label>
                                    <p><?php echo ucfirst($row ['users_first_name']) . " " . ucfirst($row ['users_middle_name']) . " "  . ucfirst($row ['users_last_name'])  ?></p>
                                    <br>

                                    <label for="">Address:</label>
                                    <label for="">Room / Floor / Unit No. & Building Name: </label>
                                    <p><?php echo $row ['users_room'] ?></p>
                                    <br>

                                    <label for="">House / Lot & Block No.: </label>
                                    <p><?php echo $row ['users_house']?></p>
                                    <br>

                                    <label for="">Street: </label>
                                    <p><?php echo $row ['users_street']?></p>
                                    <br>

                                    <label for="">Subdivision: </label>
                                    <p><?php echo $row ['users_subdivision']?></p>
                                    <br>

                                    <label for="">Barangay: </label>
                                    <p><?php echo $row ['users_barangay']?></p>
                                    <br>

                                    <label for="">City/Municipality: </label>
                                    <p><?php echo $row ['users_city']?></p>
                                    <br>

                                    <label for="">Zip: </label>
                                    <p><?php echo $row ['users_zip']?></p>

                                    <a href="edit-profile-parent.php?users_id=<?php echo $row['users_id']?>">Edit</a>
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
<!-- <script src="../src/styles/custom/sidenav.js"></script> -->
<script src="../admin-template/js/app.js"></script>
</body>
</html>