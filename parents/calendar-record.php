<?php
ob_start();
session_start();
include '../connection.php';
$student_id = $_SESSION['student_id'];
date_default_timezone_set("Asia/Manila");


// $query_date = "SELECT date_started FROM program_records WHERE student_id = '$student_id' LIMIT 1";
// $run_date = mysqli_query($conn,$query_date);
// $row_date = mysqli_num_rows($run_date);

$date = date("Y-m-d", strtotime($_POST['day']));
$cdate = date('Y-m-d');
$sql = "SELECT program_records.student_id, program_records.day, program_records.predicted_date, program_records.food_acknowledge, program_records.exercise_acknowledge, program_records_2.date_started
FROM program_records
LEFT JOIN program_records_2
ON program_records.predicted_date = program_records_2.id
WHERE program_records_2.student_id = '$student_id' AND program_records_2.date_started = '$date'";
?>
<section class="container-fluid d-flex align-items-center justify-content-center px-4 px-sm-0">
    <div class="px-3 py-3 mx-3 w-100">
        <span class="mt-2">
<?php




$run = mysqli_query($conn,$sql);
if(mysqli_num_rows($run) > 0){
    $row = mysqli_fetch_array($run);
      
        ?>
                    <h1 class="text-muted mb-4"><?= $date; ?></h1>
                    <span class="d-flex justify-content-between align-items-center">
                        <p class="h4">Meals</p>
                        <!-- <p><?php echo $row['foods']?></p> -->
                            <?php 
                            if($row['food_acknowledge'] == '1'){
                               echo "<p class='badge bg-success'>Done</p>";
                            }else{
                                if($cdate > $row['date_started']){
                                    echo "<p class='badge bg-danger'>Missed</p>";                                
                                }else{
                                    echo "<p class='badge bg-warning'>Pending</p>";
                                }
                            }
                            ?>
                    </span>
                    <span class="d-flex justify-content-between align-items-center">
                    <p class="h4">Exercises</p>
                    <!-- <p><?php echo $row['exercises']?></p> -->
                        <?php
                        
                            if($row['exercise_acknowledge'] == '1'){
                                echo "<p class='badge bg-success'>Done</p>";
                            }else{
                                if($cdate > $row['date_started']){
                                    echo "<p class='badge bg-danger'>Missed</p>";                                
                                }else{
                                    echo "<p class='badge bg-warning'>Pending</p>";
                                }
                            }
                        ?>
                    </span>
                    
        <?php
}else{
    ?>
    <h1 class="text-muted mb-4"><?= $date; ?></h1>
    <div class="alert alert-primary" role="alert">
        No Events for this day.
    </div>
    <?php
}
?>
</span>
            </div>
        </section>    