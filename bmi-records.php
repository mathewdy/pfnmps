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
    

<!-----mag dadagdag nanamna ko ng code putangina---->

<!--query kung ilang tao yung success don-->
<!---query mo yung number ng tao-->
<!---query din kung sino yung tao na yon- --- limit mo lang as 5----->


<a href="home-admin.php">Back</a>


<?php

$query_success = "SELECT * FROM status";
$run_success = mysqli_query($conn,$query_success);
$row_success = mysqli_num_rows($run_success);


?>

    <p>Successful Record: <?php echo $row_success?></p>  

    <table>
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
                $query_names = "select users.student_id, users.first_name, users.middle_name, users.last_name , status.student_id
                FROM users
                LEFT JOIN status ON
                users.student_id = status.student_id WHERE output= 'success' LIMIT 10";
                $run_names = mysqli_query($conn,$query_names);

                if(mysqli_num_rows($run_names) > 0){
                    foreach($run_names as $row){
                        ?>

                            <tr>
                                <td><?php echo $row['first_name']?></td>
                                <td><?php echo $row['middle_name']?></td>
                                <td><?php echo $row['last_name']?></td>
                            </tr>

                        <?php
                    }
                }else{
                    echo "Empty Data";
                }
            
            ?>
            
        </tbody>
    </table>

    
<!--query kung ilang tao yung hindi success don-->
<!---query mo yung number ng tao-->
<!---query din kung sino yung tao na yon- limit mo lang as 5--->

<!-------comparison nung previous BMI nya ganon------->

<?php

$query_failed1 = "SELECT * FROM failed";
$run_failed1 = mysqli_query($conn,$query_failed1);
$row_failed1 = mysqli_num_rows($run_failed1);

?>
    <p>Unsuccessful Record: <?php echo $row_failed1?></p>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>

            <?php

                $query_failed = "select users.student_id, users.first_name, users.middle_name, users.last_name , failed.student_id
                FROM users
                LEFT JOIN failed ON
                users.student_id = failed.student_id WHERE output= 'failed' LIMIT 10";
                $run_failed = mysqli_query($conn,$query_failed);

                if(mysqli_num_rows($run_failed) > 0){
                    foreach($run_failed as $row_failed){

                        ?>
                            <tr>
                                <td><?php echo $row_failed['first_name'] . " ".  $row_failed['middle_name'] . " " . $row_failed['last_name']?> </td>
                                <td><a href="previous-bmi.php?student_id=<?php echo $row['student_id']?>">Previous BMI</a></td>
                            
                            </tr>

                        <?php

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