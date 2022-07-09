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

    $query = "SELECT * FROM students WHERE student_id = '$student_id'";
    $run = mysqli_query($conn,$query);

    if(mysqli_num_rows($run) > 0){
        foreach($run as $row ){
            ?>


                <form action="edit-student-image.php" method="POST"  enctype="multipart/form-data">

                    <a href="edit-student.php?student_id=<?php echo $row ['student_id']?>">Back</a>

                    <label for="">Update Image</label>
                    <br>
                    <img src="student_image/<?php echo $row ['image']?>" width="200px" height="200px" alt="student image">
                    <br>

                    <input type="file" name="image">

                    <br>
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" name="student_id" value="<?php echo $row ['student_id']?>">
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

    $image = $_FILES['image']['name'];
    $allowed_extension = array('gif' , 'png' , 'jpeg', 'jpg' , 'PNG' , 'JPEG' , 'JPG' , 'GIF');
    $filename = $_FILES ['image']['name'];
    $file_extension = pathinfo($filename , PATHINFO_EXTENSION);

    $student_id = $_POST['student_id'];
    if(!in_array($file_extension, $allowed_extension)){
        echo "image not added"  ;
        exit();
    }else{
        $update = "UPDATE students SET image = '$image' WHERE student_id = '$student_id'";
        $run_update = mysqli_query($conn,$update);
        move_uploaded_file($_FILES["image"]["tmp_name"], "student_image/" . $_FILES["image"] ["name"]);


        if($run_update){
            echo "image updated"; 
            echo "<script>window.location.href='view-students.php' </script>";
        }else{
            echo "error" . $conn->error; 
        }
    }
}


ob_end_flush();

?>