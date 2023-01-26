<?php
include '../connection.php';
date_default_timezone_set("Asia/Manila");
$cdate = date('Y-m-d');
$day = $_GET['day'];
$date = date('Y-m-d', strtotime($day));
$student_id = $_GET['id'];
$sql = "SELECT program_records.foods,program_records.exercises,program_records.food_acknowledge,program_records.exercise_acknowledge, program_records_2.student_id,program_records_2.date_started FROM program_records LEFT JOIN program_records_2 ON program_records_2.student_id = program_records.student_id WHERE program_records_2.date_started = '$date' AND program_records_2.student_id = '$student_id'";
?>
<section class="container-fluid d-flex align-items-center justify-content-center px-4 px-sm-0">
    <div class="px-3 py-3 mx-3 w-100">
        <span class="mt-2">
<?php
$run = mysqli_query($conn,$sql);
if(mysqli_num_rows($run) > 0){
    $row = mysqli_fetch_array($run);
      
        ?>
        
                    <h1 class="text-muted mb-4"><?= $day; ?></h1>
                    <label for="">Meals:</label>
                    <span class="d-flex justify-content-between">
                        <p><?php echo $row['foods']?></p>
                        <p>
                            <?php 
                            if($row['food_acknowledge'] == '1'){
                                echo $row['food_acknowledge'];
                            }else{
                                if($cdate > $date){
                                    echo "Missed";                                
                                }else{
                                    echo "Pending";
                                }
                            }
                            ?>
                        </p>
                    </span>
                    
                    <label for="">Exercises:</label>
                    <span class="d-flex justify-content-between">
                    <p><?php echo $row['exercises']?></p>
                    <p>
                        <?php
                        
                            if($row['exercise_acknowledge'] == '1'){
                                echo $row['exercise_acknowledge'];
                            }else{
                                if($cdate > $date){
                                    echo "Missed";                                
                                }else{
                                    echo "Pending";
                                }
                            }
                        ?>
                    </p>
                    </span>
                    
        <?php
}else{
    ?>
    <div class="alert alert-primary" role="alert">
        No Events for this day.
    </div>
    <?php
}
?>
</span>
            </div>
        </section>    