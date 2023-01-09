<?php
ob_start();
include('opacity.js');

include('../connection.php');
session_start();

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

<!---mamaya tanggalin mo din to, kase naka modal na to mamaya-->
<a href="profile-parent.php">Cancel</a>

    <?php

        if(isset($_GET['users_id'])){
            $user_id = $_GET['users_id'];


            $query = "SELECT users.first_name AS 'users_first_name', users.middle_name AS 'users_middle_name',users.contact_number AS 'users_contact_number', users.last_name AS 'users_last_name' , users.room AS 'users_room',users.user_id AS 'users_id', users.house AS 'users_house', users.street AS 'users_street' , users.subdivision AS 'users_subdivision' , users.barangay AS 'users_barangay', users.city AS 'users_city', users.zip AS 'users_zip', users.image AS 'parent_image', students.first_name AS 'students_first_name', students.middle_name  AS 'students_middle_name', students.last_name  AS 'students_last_name', students.date_of_birth AS 'students_date_of_birth', students.gender AS 'students_gender', students.student_id
            AS 'students_student_id' FROM users 
            LEFT JOIN students ON  users.student_id = students.student_id WHERE user_id = '$user_id' ";
            $run = mysqli_query($conn,$query);

            if(mysqli_num_rows($run) > 0){
                foreach($run as $row){
                    ?>

                        <form action="" method="POST" enctype="multipart/form-data">

                        <!-----hindi pa tapos yung profile---->
                        <label for="">Image:</label>
                        <input type="file" name="image">
                        <br>
                        <img src="<?php echo "guardian_image/". $row['parent_image']; ?>" alt="" width="200px" height="200px">
                        <br>
                        <input type="hidden" name="old_image" value="<?php echo $row ['parent_image']?>">

                        <label for="">First Name:</label>
                        <br>
                        <input type="text" name="first_name" value="<?php echo $row['users_first_name']?>">

                        <br>
                        <label for="">Middle Name:</label>
                        <br>
                        <input type="text" name="middle_name" value="<?php echo $row['users_middle_name']?>">
                        <br>

                        <label for="">Last Name:</label>
                        <br>
                        <input type="text" name="last_name" value="<?php echo $row['users_last_name']?>">
                        
                        <br>
                        <label for="">Contact Number:</label>
                        <br>
                        <input type="text" name="contact_number" value="<?php echo $row['users_contact_number']?>" placeholder="+63">

                        <br>
                        <label for="">Room / Floor / Unit No. & Building Name:</label>
                        <br>
                        <input type="text" name="room" value="<?php echo $row['users_room']?>">
                        <br>

                        <label for="">House / Lot & Block No.: </label>
                        <br>
                        <input type="text" name="house" value="<?php echo $row['users_house']?>">
                        <br>

                        <label for="">Street: </label>
                        <input type="text" name="street" value="<?php echo $row['users_street']?>">
                        <br>

                        <label for="">Subdivision: </label>
                        <input type="text" name="subdivision" value="<?php echo $row ['users_subdivision']?>">
                        <br>

                        <label for="">Barangay: </label>
                        <input type="text" name="barangay" value="<?php echo $row ['users_barangay']?>">
                        <br>

                        <label for="">City/Municipality: </label>
                        <input type="text" name="city" value="<?php echo $row ['users_city']?>">
                        <br>

                        <label for="">Zip: </label>
                        <input type="text" name="zip" value="<?php echo $row ['users_zip']?>">

                        <input type="hidden" name="user_id" value="<?php echo $row['users_id']?>">
                        <br>
                        <input type="submit" name="update" value="Update">
                        

                       
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

    if($new_image != ''){
        $update_filename = $_FILES['image']['name'];
    }else{
        $update_filename = $old_image;
    }

    if(empty($new_image)){
        $query_update_1 = "UPDATE users SET first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', contact_number=  '$contact_number', room = '$room' , house = '$house', street = '$street' , subdivision = '$subdivision',  barangay = '$barangay', city = '$city', zip = '$zip' WHERE user_id = '$user_id' ";
        $run_1 = mysqli_query($conn,$query_update_1);
        if($run_1){
            echo "updated";
        }else{
            echo "error update_1" . $conn->error; 
        }
    }

    $allowed_extension = array('gif','png','jpg','jpeg', 'PNG', 'GIF', 'JPG', 'JPEG');
    $filename = $_FILES['image']['name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($file_extension,$allowed_extension)){
        echo "<script>alert('File not allowed'); </script>";
        echo "<script>window.location.href='profile.php' </script>";
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