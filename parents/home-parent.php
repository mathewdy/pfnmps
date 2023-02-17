<?php
include('../connection.php');
session_start();
include('security-parent.php');
$email = $_SESSION['email'];
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$student_id = $_SESSION['student_id'];
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
    <link rel="stylesheet" href="../src/plugins/evo-calendar/css/evo-calendar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="../src/styles/custom/sidenav.css"> -->
    <title>Document</title>
</head>
<body>

 
<div class="outer-container d-flex flex-row">

<!-- Sidebar -->
  <div class="sticky-nav bg-white vh-100 shadow"style="z-index: 0;">
    <a href="#" class="brand p-3 link-dark text-decoration-none bg-white text-center" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
        <img src="../logo.jpg" alt="" class="card-img-top" style="border-radius: 50px;">
    </a>
    <ul class="list nav nav-flush mb-auto text-center">
      <li class="nav-item">
        <a href="#" class="nav-link active py-3 d-flex flex-column align-items-center text-start border-bottom" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
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
        <a href="profile-parent.php" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
            </svg>
            <p class="p-0 m-0" style="font-size: 12px;">Settings</p>
        </a>
      </li>
    </ul>
  </div>
<p class="student-id d-none" data-id="<?= $student_id; ?>"></p>
  <!-- Content container -->
<main class="main-container container-fluid-lg bg-light" style="width: 100%; position: relative;">
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-0" style="box-shadow: none; ">
        <div class="container-fluid justify-content-end">
            <div class="dropdown border-top">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $email; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUser3">
                    <li><a class="dropdown-item" href="logout-parent.php">Sign out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content starts here -->
    
    <?php

    $excerises_done = "SELECT exercises,exercise_acknowledge, id FROM program_records WHERE student_id = '$student_id' AND exercise_acknowledge = '1'  LIMIT 10";
    $run_excercises = mysqli_query($conn,$excerises_done);

    $row4 = mysqli_num_rows($run_excercises);
    //pwede mo na tong hindi ilagay


    if($row4 == 10){
        echo "<script>alert('Daily Task is done') </script>";
    }else{

    } 

    ?>
    <main class="content">
        <div class="container-fluid" style="height: 100%;">
            <div class="row p-5">
                <div class="col-lg-12">
                    <div class="card">
                        <div id="calendar" style="box-shadow: none;"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="border: none; height: 100%; border-radius:0; box-shadow: 2px 2px 23px -6px rgba(0,0,0,0.17);">
                        <div class="card-body">
                            <div class="p-2 pb-0 d-flex flex-column align-items-start">
                                <span class="d-flex flex-row align-middle">
                                    <h1 class="h4 bold" style="padding: 0 0 0 3px;"><i class="bi bi-patch-check-fill text-success"></i> Daily Task</h1> 
                                </span>
                            </div>    
                            <hr class="featurette-divider">
                            <!-----so dito , dapat nakalagy na yung daily task ni student---->
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="small text-muted">Note: Must do every other day.</p>
                                </div>
                                <div class="col-lg-6 text-end">
                                </div>
                            </div>

                           <?php




                            $sql_daily_activities = "SELECT exercises,exercise_acknowledge, id FROM program_records WHERE student_id = '$student_id' LIMIT 10";
                            $run_daily_activities = mysqli_query($conn,$sql_daily_activities);

                            if(mysqli_num_rows($run_daily_activities) > 0){
                                foreach ($run_daily_activities as $row2){
                                    ?>

                                        
                                     
                                        <!-- <label for="">Acitivies:</label> -->
                                        <span class="d-flex justify-content-between align-items-start mb-4">
                                            <span>
                                                <p class="act d-none"><?= $row2['exercise_acknowledge']?></p>
                                                <p class="p-0 m-0"><?php echo $row2['exercises'] ?></p>
                                                <!-- <small><p class="text-muted p-0 m-0">Duration: 30 mins.</p></small> -->
                                                <!-- <small><p class="text-muted p-0 m-0"></p></small> -->
                                            </span>
                                        
                                        <form action="acknowledge.php" method="POST">
                                            

                                        <?php

                                            if($row2['exercise_acknowledge'] == 0){
                                                ?>

                                                <input type="hidden" name="student_id" value="<?php echo $student_id ?>">
                                                <input type="hidden" name="id" value="<?php echo $row2['id']?>">
                                                <input type="hidden" name="daily_task" value="1">
                                                <button type="submit" name="acknowledge_task" class="btn btn-outline-success btn-sm"><i class="bi bi-check-lg"></i></button>
                                                <!-- <input type="submit" class="btn btn-outline-primary py-1" name="acknowledge_task" value="Acknowledge"> -->
                                        

                                                <?php
                                            }else{
                                                echo "<div style='color:green;'><i class='bi bi-check-lg me-2'></i></div>";
                                            }

                                        ?>
                                        
                                        </form>
                                        </span>
                                       
                                        <hr>
                                        
                                    <?php
                                }
                            }

                            ?>

                        </div>   
                    </div>     
                </div>

                <?php

                $food_done = "SELECT food_acknowledge FROM program_records WHERE student_id = '$student_id' AND food_acknowledge = '1'";
                $run_food = mysqli_query($conn,$food_done);
                $row5 = mysqli_num_rows($run_food);

               
                // if($row5 == 30){
                //     echo "<script>alert('Daily Meal is done') </script>";
                // }else{

                // }

                ?>
                <div class="col-lg-8">
                    <div class="card" style="border: none; height: 100%; border-radius:0; box-shadow: 2px 2px 23px -6px rgba(0,0,0,0.17);">
                        <div class="card-body">
                            <div class="p-2 pb-0 d-flex flex-column align-items-start">
                                <span class="d-flex flex-row align-middle">
                                    <h1 class="h4 bold" style="padding: 0 0 0 3px;"><i class="bi bi-clipboard-heart-fill" style="color: Purple;"></i> Suggested Meals</h1> 
                                </span>
                            </div>    
                            <hr class="featurette-divider">
                            <!-----so dito , dapat nakalagy na yung daily task ni student---->
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="small text-muted">Note: Must do every day.</p>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <?php echo "Total Acknowledge: " .$row5 . " "  ?>

                                </div>
                            </div>

                            <?php


                                $sql_program_records_date = "SELECT date_started, ended_day FROM program_records WHERE student_id = '$student_id' LIMIT 1";
                                $run_program_records_date = mysqli_query($conn,$sql_program_records_date);

                                if(mysqli_num_rows($run_program_records_date) > 0){
                                    foreach($run_program_records_date as $row){
                                        $new_format = date("F/d/Y", strtotime($row['date_started']));
                                        $end = date("F/d/Y", strtotime($row['ended_day']));
                                        ?>
                                            <label for="">Date Started:</label>
                                            <p class="dateStart" data-id="<?= $new_format; ?>"><?php echo $new_format?></p>
                                            <label for="">End date:</label>
                                            <p class="dateEnd" data-id="<?= $end; ?>"><?php echo $end ?></p>
                                            <hr>

                                        <?php
                                    }
                                }


                                ?>

                                <?php

                                $sql_program_records = "SELECT * FROM program_records WHERE student_id = '$student_id'";
                                $run_program_records = mysqli_query($conn,$sql_program_records);

                                if(mysqli_num_rows($run_program_records) > 0){
                                    foreach($run_program_records as $row1){
                                        // if($row1['food_acknowledge'] == '1'){
                                        //     echo $row1['food_acknowledge'];
                                        // }
                                        ?>
                                            <p class="lead text-muted">Day <?php echo $row1['day']?> </p>
                                            <!-- <p></p> -->
                                            
                                            <!-- <label for="">Suggested Foods :</label> -->
                                            <span class="d-flex justify-content-between align-items-end">
                                                <p><?php echo $row1['foods']?></p>
                                                <p class="food d-none"><?= $row1['food_acknowledge']?></p>
                                                <p class="food d-none"><?= json_encode($row1['food_acknowledge']); ?></p>
                                                <form action="acknowledge.php" method="POST">
                                                <p>
                                                    <?php

                                                        if($row1['food_acknowledge'] == 0){
                                                            ?>      
                                                                <input type="hidden" name="student_id" value="<?php echo $s0tudent_id ?>">
                                                                <input type="hidden" name="id" value="<?php echo $row1['id']?>">
                                                                <input type="hidden" name="daily_meal" value="1">
                                                                <!-- <input type="submit" class="btn btn-outline-primary py-1" name="acknowledge_meal" value="Acknowledge"> -->
                                                                <button type="submit" name="acknowledge_meal" class="btn btn-outline-success btn-sm"><i class="bi bi-check-lg"></i></button>
                                                            <?php
                                                        }else{
                                                            echo "<div style='color: green;'><i class='bi bi-check-lg me-2'></i></div> ";
                                                        }
                                                
                                                    ?>
                                                </p>
                                                </form>

                                            </span>
                                            <hr>
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
    <?php

    if($row4 == 10 && $row5 == 30){
        echo "<script>alert('Wait for the next health evaluation') </script>";
    }



    // dating row 4
    $excerises_done_1 = "SELECT exercises,exercise_acknowledge, id FROM program_records WHERE student_id = '$student_id' AND exercise_acknowledge = '1'  LIMIT 10";
    $run_excercises_1 = mysqli_query($conn,$excerises_done_1);

    $row_excercise = mysqli_num_rows($run_excercises_1);
    

    //dating row 5

    
    $food_done_1 = "SELECT food_acknowledge FROM program_records WHERE student_id = '$student_id' AND food_acknowledge = '1'";
    $run_food_1 = mysqli_query($conn,$food_done_1);
    $row_food = mysqli_num_rows($run_food_1);
    // echo $row_food; 
    // echo $row_excercise;


    
    $solution = $row_excercise + $row_food;
    if($solution == '40'){
        date_default_timezone_set("Asia/Manila");
        $date = date('y-m-d');
        $success = "success";
        $insert_to_status = "INSERT INTO status (student_id,output,date_created,date_updated) VALUES ('$student_id', '$success' ,'$date', '$date')";
        $run_status = mysqli_query($conn,$insert_to_status);

        if($run_status){
            echo "<script>alert('All activities are done') </script>";
        }else{
            
            echo "error" . $conn->error;

        }
    }



    $solution_2 = $row_excercise + $row_food;
        if( 40 > $solution_2){
            date_default_timezone_set("Asia/Manila");
            $date = date('y-m-d');
            $success = "failed";
            
            //validation 
            $query_validate = "SELECT * FROM failed WHERE student_id  = '$student_id' LIMIT 1";
            $run_validate = mysqli_query($conn,$query_validate);
            if(mysqli_num_rows($run_validate) > 0){
                echo "";
                exit();
            }else{
                $insert_to_status = "INSERT INTO failed (student_id,output,date_created,date_updated) VALUES ('$student_id', '$success' ,'$date', '$date')";
                $run_status = mysqli_query($conn,$insert_to_status);
        
                if($run_status){
                    echo "";
                }else{
                    
                    echo "error" . $conn->error;
        
                }
            }
            
        }
    

    
    

    ?>

</main>
</div>
<!-- Modal -->
<div class="modal fade" id="topicModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content card">
        <div class="modal-header" style="border:none;">
            <h1><?= "<script>$('.calendar-active').data('id')</script>";?></h1>
            <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer" style="border:none;">
        </div>
        </form>  
        </div>
    </div>
</div>


<!-- 

// if($row4 == 10){
//     echo "<script>alert('Daily Task is done') </script>";
// }else{
//     echo "Pending";
// } -->





<!-- // $food_done = "SELECT food_acknowledge FROM program_records WHERE student_id = '$student_id'";
// $run_food = mysqli_query($conn,$food_done);

// $row5 = mysqli_num_rows($run_food);

// echo "Total acknowledge is food:" . $row5 . " ";

// if($row5 == 30){
//     echo "<script>alert('Daily Meal is done') </script>";
// }else{
//     echo "Pending";
// } -->


?>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="../src/styles/custom/sidenav.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="../admin-template/js/app.js"></script>
<script src="../src/styles/custom/app.js"></script>
<script src="../src/plugins/evo-calendar/js/evo-calendar.js"></script>
<!-- <script src="../src/plugins/evo-calendar/js/evo-calendar.config.js"></script> -->
<script>
    $(document).ready(function(){
        let start = $('.dateStart').data('id')
        let end = $('.dateEnd').attr('data-id')
        $('#calendar').evoCalendar({
            language: 'en',
            eventListToggler:false,
            eventDisplayDefault:false,
            calendarEvents: [{
                date: [start, end],
                color: '#00bbcc'
            },
            {
                id: '1',
                // name: "Daily Meal",
                // badge: food,
                date: [start, end],
                // type: "event",
                color: '#00bbcc'
            }
            ]
        })
        console.log(start)
        $('.day').on('click', function(){
            console.log('clicked')
            $.ajax({
                    url: 'calendar-record.php',
                    type: 'post',
                    data: {day: $('.calendar-active').data('id'), id : $('.student-id').data('id')},
                    success: function(response){
                        $('.modal-body').html(response);
                        $('#topicModal').modal('show');
                        // console.log($('.calendar-active').data('id'))
                    }
                });
            alert($('.calendar-active').data('id'))

        })
    })
</script>

</body>
</html>