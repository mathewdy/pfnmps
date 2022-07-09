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
    <title>Document</title>
</head>
<body>


    <a href="view-students.php">Back</a>
    <?php
    
    

    //to be continued to 
    if(isset($_GET['student_id'])){
        $student_id = $_GET['student_id'];
        

        $query = "SELECT students.student_id AS student_student_id, students.first_name AS student_first_name, students.last_name AS student_last_name ,students.middle_name AS student_middle_name, students.date_of_birth AS student_date_of_birth, students.gender AS student_gender ,students.room AS student_room,students.house AS student_house,students.street AS student_street,students.subdivision AS student_subdivison,students.barangay AS student_barangay,students.city AS student_city,students.zip AS student_zip,students.grade AS student_grade,students.section AS student_section,students.date_time_created AS student_date_time_created,users.first_name AS user_first_name , users.middle_name AS user_middle_name , users.last_name AS user_last_name, users.room AS user_room, users.house AS user_house , users.street AS user_street, users.subdivision AS user_subdivision, users.barangay AS user_barangay, users.city AS user_city , users.zip AS user_zip , users.image AS user_image , users.student_id AS user_student_id, users.user_id AS user_user_id FROM students LEFT JOIN users
        ON students.student_id = users.student_id WHERE students.student_id = '$student_id'";
        $run = mysqli_query($conn,$query);

        if(mysqli_num_rows($run) > 0){
            foreach($run as $row ){
                ?>

                    <form action="edit-student.php" method="POST" enctype="multipart/form-data">


                        <h2>Personal Info</h2>
                        <label for="">First Name</label>
                        <input type="text" name="first_name" value="<?php echo $row ['student_first_name']?>">

                        <br>

                        <label for="">Middle Name</label>
                        <input type="text" name="middle_name" value="<?php echo $row ['student_middle_name']?>">

                        <br>

                        <label for="">Last Name</label>
                        <input type="text" name="last_name" value="<?php echo $row ['student_last_name']?>">
                        <br>

                        <label for="">Date of Birth</label>
                        <input type="date" name="date_of_birth" value="<?php echo $row ['student_date_of_birth']?>" id="">
                        <br>

                        <br>

                        <a href="edit-student-image.php?student_id=<?php echo $row ['student_student_id']?>">Edit Photo</a>

                        <a href="edit-guardian-details.php?student_id=<?php echo $row ['student_student_id']?>">Edit Guardian Details</a>

                        <br>
                        <h2>Address</h2>
                        <label for="">Room / Floor / Unit No. & Building Name</label>
                        <input type="text" name="room" value="<?php echo $row ['student_room'] ?>">

                        <br>
                        <label for="">House / Lot & Block No.</label>
                        <input type="text" name="house" value="<?php echo $row ['student_house']?>">

                        <br>
                        <label for="">Street</label>
                        <input type="text" name="street" value="<?php echo $row ['student_street']?>">

                        <br>
                        <label for="">Subdivision</label>
                        <input type="text" name="subdivision" value="<?php echo $row ['student_subdivison']?>">


                        <br>
                        <label for="">Barangay</label>
                        <input type="text" name="barangay" value="<?php echo $row ['student_barangay']?>"> 


                        <br>
                        <label for="">City</label>
                        <input type="text" name="city" value="<?php echo $row ['student_city']?>">

                        
                        <br>
                        <label for="">Zip Code</label>
                        <input type="number" name="zip_code" value="<?php echo $row ['student_zip']?>"> 

                        <input type="hidden" name="gender" value="<?php echo $row ['student_gender']?>">
                        <br>
                        

                        <br>

                        <label for="">Grade</label>
                        <input type="text" name="grade" value="<?php echo $row ['student_grade']?>" readonly>
                        <select name="grade" id="">
                            <option value="Grade 1">Grade 1</option>
                            <option value="Grade 2">Grade 2</option>
                            <option value="Grade 3">Grade 3</option>
                            <option value="Grade 4">Grade 4</option>
                            <option value="Grade 5">Grade 5</option>
                            <option value="Grade 6">Grade 6</option>
                        </select>

                        <br>
                        <label for="">Section</label>
                        <input type="text" name="section" value="<?php echo $row ['student_section']?>">

                        <input type="hidden" name="date_time_created" value="<?php echo $row ['student_date_time_created']?>">

                        <br>
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" name="student_id" value="<?php echo $row ['student_student_id']?>">

                    </form>

                <?php
            }
        }
    }

    ob_end_flush();
    ?>
</body>
</html>

<?php
if(isset($_POST['update'])){

    date_default_timezone_set("Asia/Manila");
    $time= date("h:i:s", time());
    $date = date('y-m-d');

    //student or patient info
    $student_id = ($_POST['student_id']);
    $first_name = ucfirst($_POST['first_name']);
    $middle_name = ucfirst($_POST['middle_name']);
    $last_name = ucfirst($_POST['last_name']); 
    $date_of_birth = date('Y-m-d',strtotime($_POST['date_of_birth']));
    $grade = $_POST['grade'];
    $section = $_POST['section'];
    $gender = $_POST['gender'];
    //image
    // $image = $_FILES['image']['name'];
    // $allowed_extension = array('gif' , 'png' , 'jpeg', 'jpg' , 'PNG' , 'JPEG' , 'JPG' , 'GIF');
    // $filename = $_FILES ['image']['name'];
    // $file_extension = pathinfo($filename , PATHINFO_EXTENSION);
     $date_time_created = $_POST['date_time_created'];


    //address
    $room = strtoupper($_POST['room']);
    $house = strtoupper($_POST['house']);
    $street = strtoupper($_POST['street']);
    $subdivision = strtoupper($_POST['subdivision']);
    $barangay = strtoupper($_POST['barangay']);
    $city = strtoupper($_POST['city']);
    $zip_code = strtoupper($_POST['zip_code']);


    // if(!in_array($file_extension, $allowed_extension)){
    //     echo "image not added"  ;
    //    exit();
    // }else
    {

        $query_update = "UPDATE students SET first_name = '$first_name' , middle_name = '$middle_name', last_name = '$last_name', date_of_birth = '$date_of_birth', gender = '$gender' , room = '$room', house = '$house' , street = '$street' , subdivision = '$subdivision' , barangay = '$barangay' , city ='$city' , zip = '$zip_code'  , grade = '$grade' , section = '$section', date_time_created = '$date_time_created' , date_time_updated = '$date $time' ";
        $run_update = mysqli_query($conn,$query_update);

        if($run_update){
            echo "updated data";
        }else{
            echo "error" . $conn->error;
        }

    }

}


?>