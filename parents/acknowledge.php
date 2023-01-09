<?php


include('../connection.php');

if(isset($_POST['acknowledge_task'])){
    $daily_task = $_POST['daily_task'];
    $id = $_POST['id'];
    $sql_update = "UPDATE program_records SET exercise_acknowledge='$daily_task' WHERE id = '$id'";
    $run = mysqli_query($conn,$sql_update);

    if($run){
        echo "<script>window.location.href='home-parent.php' </script>";
    }else{
        echo "error" . $conn->error;
    }
}



if(isset($_POST['acknowledge_meal'])){
    $daily_meal = $_POST['daily_meal'];
    $id = $_POST['id'];
    $sql_update = "UPDATE program_records SET food_acknowledge='$daily_meal' WHERE id = '$id'";
    $run = mysqli_query($conn,$sql_update);
    if($run){
        echo "<script>window.location.href='home-parent.php' </script>";

    }else{
        echo "error" . $conn->error;
    }
}
?>