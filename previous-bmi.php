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
    

    <a href="bmi-records.php">Back</a>

    <table>
        <thead>
            <tr>
                <th>LRN</th>
                <th>Name</th>
                <th>Previous BMI</th>
                <th>Date</th>
                <th>Recommendation</th>
            </tr>
        </thead>
        <tbody>
                
            <?php

            if(isset($_GET['student_id'])){
                $student_id = $_GET['student_id'];
                
                $query = "SELECT users.first_name, users.middle_name, users.last_name , failed.output, history_bmi.bmi , users.student_id , history_bmi.date_created
                FROM users
                LEFT JOIN failed ON
                users.student_id = failed.student_id
                LEFT JOIN history_bmi ON
                users.student_id = history_bmi.student_id
                WHERE failed.output = 'failed' AND failed.student_id = '$student_id'";
                $run = mysqli_query($conn,$query);

                if(mysqli_num_rows($run) > 0){
                    foreach($run as $row){
                        ?>

                            <tr>
                                <td><?php echo $row['student_id']?></td>
                                <td><?php echo $row['first_name'] . " ".  $row['middle_name'] . " " . $row['last_name']?> </td>
                                <td><?php echo number_format((float)$row['bmi'], 2 ,'.', '');  ?></td>
                                <td><?php echo $row['date_created']?></td>
                                <td>
                                    <?php 
                                        if($row['bmi'] <= 18.5){
                                            echo "Reprogram";
                                            ?>

                                                <a href="reprogram.php?student_id=<?php echo $row['student_id']?>">Click here to continue</a>

                                            <?php
                                        }else if($row['bmi'] >= 18.5 || $row['bmi'] <= 24.9){
                                            echo "Maintain Healthy Weight";
                                        }else if($row['bmi'] >= 25 || $row['bmi'] <= 29.9){
                                            echo "Reprogram";
                                            ?>

                                                <a href="reprogram.php?student_id=<?php echo $row['student_id']?>">Click here to continue</a>

                                            <?php
                                        }else if($row['bmi'] == 30 || $row['bmi'] <= 34.9){
                                            echo "Reprogram";
                                            ?>

                                                <a href="reprogram.php?student_id=<?php echo $row['student_id']?>">Click here to continue</a>

                                            <?php
                                        }else if($row['bmi'] == 35 || $row['bmi'] <= 39.9){
                                            echo "Reprogram";
                                            ?>

                                                <a href="reprogram.php?student_id=<?php echo $row['student_id']?>">Click here to continue</a>

                                            <?php
                                        }else if($row['bmi'] >= 40){
                                            echo "Reprogram";
                                            ?>

                                                <a href="reprogram.php?student_id=<?php echo $row['student_id']?>">Click here to continue</a>

                                            <?php
                                        }

                                        // loop the questions and file again a program
                                    ?>
                                </td>
                            </tr>

                        <?php
                    }
                }
            }

            ?>
        </tbody>
    </table>




</body>
</html>


<?php

ob_end_flush();

?>