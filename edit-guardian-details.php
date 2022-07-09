<?php 
include('connection.php');
session_start();
ob_start();
include('security-admin.php');


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

<?php

    if(isset($_GET['student_id'])){
        $student_id = $_GET['student_id'];


        ?>

        
        <?php

        $student_id = $_GET['student_id'];

        $query = "SELECT students.student_id AS student_student_id, students.first_name AS student_first_name, students.last_name AS student_last_name ,students.middle_name AS student_middle_name, students.date_of_birth AS student_date_of_birth, students.gender AS student_gender ,students.room AS student_room,students.house AS student_house,students.street AS student_street,students.subdivision AS student_subdivison,students.barangay AS student_barangay,students.city AS student_city,students.zip AS student_zip,students.grade AS student_grade,students.section AS student_section,students.date_time_created AS student_date_time_created,users.first_name AS user_first_name , users.middle_name AS user_middle_name , users.last_name AS user_last_name, users.room AS user_room, users.house AS user_house , users.street AS user_street, users.subdivision AS user_subdivision, users.barangay AS user_barangay, users.city AS user_city , users.zip AS user_zip , users.image AS user_image , users.student_id AS user_student_id , users.date_time_created AS user_date_time_created, users.user_id AS user_user_id FROM students LEFT JOIN users
        ON students.student_id = users.student_id WHERE students.student_id = '$student_id'";
        $run = mysqli_query($conn,$query);


        if(mysqli_num_rows($run) > 0){
            foreach($run as $row ){
                ?>  

                    <form action="edit-guardian-details.php" method="POST">

                    <h2>Guardian's Info</h2>
                    <label for="">First Name</label>
                    <input type="text" name="first_name" value="<?php echo $row ['user_first_name']?>">

                    <br>

                    <label for="">Middle Name</label>
                    <input type="text" name="middle_name" value="<?php echo $row ['user_middle_name']?>">

                    <br>

                    <label for="">Last Name</label>
                    <input type="text" name="last_name" value="<?php echo $row ['user_last_name']?>">
                    <br>


                    <h2>Address</h2>
                        <label for="">Room / Floor / Unit No. & Building Name</label>
                        <input type="text" name="room" value="<?php echo $row ['user_room'] ?>">

                        <br>
                        <label for="">House / Lot & Block No.</label>
                        <input type="text" name="house" value="<?php echo $row ['user_house']?>">

                        <br>
                        <label for="">Street</label>
                        <input type="text" name="street" value="<?php echo $row ['user_street']?>">

                        <br>
                        <label for="">Subdivision</label>
                        <input type="text" name="subdivision" value="<?php echo $row ['user_subdivision']?>">


                        <br>
                        <label for="">Barangay</label>
                        <input type="text" name="barangay" value="<?php echo $row ['user_barangay']?>"> 


                        <br>
                        <label for="">City</label>
                        <input type="text" name="city" value="<?php echo $row ['user_city']?>">

                        
                        <br>
                        <label for="">Zip Code</label>
                        <input type="number" name="zip_code" value="<?php echo $row ['user_zip']?>"> 

                        <br>
                        <input type="hidden" name="date_time_created" value="<?php echo $row ['user_date_time_created']?>">
                        <input type="hidden" name="user_id" value="<?php echo $row ['user_user_id']?>">

                        <input type="submit" name="update" value="Update" id="">
                        <br>
                        <a href="edit-student.php?student_id=<?php echo $row ['student_student_id']?>">Back

                        </form>
                <?php
            }
        }
    }


?>
    
</body>
</html>

<?php

if(isset($_POST['update'])){



    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');

    //student or patient info
    $first_name = ucfirst($_POST['first_name']);
    $middle_name = ucfirst($_POST['middle_name']);
    $last_name = ucfirst($_POST['last_name']); 
    $user_id = $_POST['user_id'];

    //address
    $room = strtoupper($_POST['room']);
    $house = strtoupper($_POST['house']);
    $street = strtoupper($_POST['street']);
    $subdivision = strtoupper($_POST['subdivision']);
    $barangay = strtoupper($_POST['barangay']);
    $city = strtoupper($_POST['city']);
    $zip_code = strtoupper($_POST['zip_code']);

    $query_update = "UPDATE users SET first_name = '$first_name' , middle_name = '$middle_name', last_name = '$last_name' , user_id = '$user_id', room = '$room' , house = '$house' , street = '$street', subdivision = '$subdivision' , barangay = '$barangay' , city = '$city' , zip = '$zip_code' ,date_time_updated = '$date $time' WHERE user_id = '$user_id'";
    $run_update = mysqli_query($conn,$query_update);

    if($run_update){
        echo "data updated for guardian";
    }else{
        echo "error" . $conn->error;
    }

    
}
ob_end_flush();
?>