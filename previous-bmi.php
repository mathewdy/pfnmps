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
            </tr>
        </thead>
        <tbody>
                
            <?php

            if(isset($_GET['student_id'])){
                $student_id = $_GET['student_id'];
                
                $query = "SELECT users.first_name, users.middle_name, users.last_name , failed.output, history_bmi.bmi
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
                                <td><?php echo $row['bmi']?></td>
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