<?php
include('../connection.php');
session_start();
include('security-parent.php');
ob_start();

$email = $_SESSION['email'];

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

<h1>Profile</h1>
<a href="home-parent.php">Back</a>
<br>
<br>


<?php

    $query = "SELECT users.first_name AS 'users_first_name', users.middle_name AS 'users_middle_name', users.last_name AS 'users_last_name' , users.room AS 'users_room', users.house AS 'users_house', users.street AS 'users_street' , users.subdivision AS 'users_subdivision' , users.barangay AS 'users_barangay', users.city AS 'users_city', users.zip AS 'users_zip', users.image AS 'users_image', students.first_name AS 'students_first_name', students.middle_name  AS 'students_middle_name', students.last_name  AS 'students_last_name', students.date_of_birth AS 'students_date_of_birth', students.gender AS 'students_gender', students.student_id
    AS 'students_student_id' FROM users 
    LEFT JOIN students ON  users.student_id = students.student_id WHERE email = '$email'";
    $run = mysqli_query($conn,$query);

if(mysqli_num_rows($run) > 0){
    foreach ($run as $row) {
        ?>

            <!-----hindi pa tapos yung profile---->

            <label for="">Name:</label>
            <p><?php echo $row ['users_first_name'] . " " . $row ['users_middle_name'] . " "  . $row ['users_last_name']  ?></p>
            <br>

            <label for="">Address:</label>
            <label for="">Room / Floor / Unit No. & Building Name</label>
            <p><?php echo $row ['users_room'] ?></p>
            <br>

            <label for="">House / Lot & Block No.</label>
            <p><?php echo $row ['users_house']?></p>
            <br>

            <label for="">Street</label>
            <p><?php echo $row ['users_street']?></p>
            <br>

            <label for="">Subdivision</label>
            <p><?php echo $row ['users_subdivision']?></p>
            <br>

            <label for="">Barangay </label>
            <p><?php echo $row ['users_barangay']?></p>
            <br>

            <label for="">City/Municipality </label>
            <p><?php echo $row ['users_city']?></p>
            <br>

            <label for="">Zip</label>
            <p><?php echo $row ['users_zip']?></p>

        <?php
    }
}

?>



    
</body>
</html>


<?php

ob_end_flush();

?>