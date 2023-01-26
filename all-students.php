
<?php $student_id = $_GET['student_id'];?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        box-sizing:border-box;
        margin:0;
        padding:0;
    } 
    body{
        font-size: 11pt;
    }
    .wrapper{
        padding: 1em 2em 5em 2em;
    }
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td{
        padding: 0px 12px;
        font-size: 14px;
    }
</style>
<body>
<br>
<br>
<span style="text-align: center; margin-top: 20em; margin-bottom: 500px;">
<h1>Bucal Elementary School</h1>
<p style="opacity: 60%;">E Manila S Rd, Calamba, 4027 Laguna</p>
</span>
<br>
<br>
<hr style="width:95%; margin-left:2.5% !important; margin-right:2.5% !important;" />
<!-- <hr style="opacity: 65%; width: 100%; margin: 60px 400px;"> -->
<div class="wrapper">
<br>
<br>
<table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Level</th>
                <th>Section</th>
                <th>Birthday</th>
                <th>Age</th>
                <th>4ps Member</th>
                <th>Address</th>
                <th>Parent / Guardian</th>
                <th>Contact Number</th>
                <th>LRN</th>
                <th>Height</th>
                <th>Weight</th>
                <th>BMI</th>
            </tr>
        </thead>
        <tbody>

<?php

$query_students = "SELECT students.first_name AS student_first_name,students.middle_name AS student_middle_name,students.last_name AS student_last_name,students.grade AS student_grade,students.section AS student_section,students.date_of_birth AS student_date_of_birth,students.age AS student_age ,students.four_ps AS student_four_ps,students.room AS student_room,students.house AS student_house,students.student_id AS student_student_id, students.street AS student_street ,students.subdivision AS student_subdivision ,students.barangay AS student_barangay,students.city AS student_city, users.first_name AS user_first_name, users.middle_name AS user_middle_name,users.last_name AS user_last_name, users.contact_number AS user_contact_number,
health_infos.height AS health_infos_height,health_infos.weight AS health_infos_weight,health_infos.bmi AS health_infos_bmi
FROM students
LEFT JOIN users 
ON students.student_id = users.student_id
LEFT JOIN health_infos 
ON students.student_id = health_infos.student_id ";
$run_students = mysqli_query($conn,$query_students);
if(mysqli_num_rows($run_students) > 0){
    $no = 1;
    foreach($run_students as $row){
        $new_date = date('F d, Y', strtotime($row['student_date_of_birth']));
        ?>

                <tr>
                    <td style="text-align: center;"><?=$no++;?></td>
                    <td style="text-align: center;"><?=$row['student_first_name']. " " . $row['student_middle_name'] . " " . $row['student_last_name']?></td>
                    <td style="text-align: center;"><?=$row['student_grade']?></td>
                    <td style="text-align: center;"><?=$row['student_section']?></td>
                    <td style="text-align: center;"><?=$new_date?></td>
                    <td style="text-align: center;"><?=$row['student_age'] ?></td>
                    <td style="text-align: center;"><?php
                        if($row['student_four_ps'] == '0'){
                            echo "<b> No <span></b>";
                        }else{
                            echo "<b> Yes <span></b>";
                        }
                    ?>
                    </td>
                    <td style="width: 75%;">
                        <?=$row['student_room']." ". $row['student_house'] . " " . $row['student_street'] . " " . $row['student_subdivision'] . " " . $row['student_barangay'] . " " . $row['student_city']?>
                    </td>
                    <td style="text-align: center;">
                        <?=$row['user_first_name'] . " " . $row['user_middle_name'] . " " . $row['user_last_name']?>
                    </td>
                    <td style="text-align: center;"><?=$row['user_contact_number']?></td>
                    <td style="text-align: center;"><?=$row['student_student_id'] ?></td>
                    <td style="text-align: center;"><?=$row['health_infos_height']?></td>
                    <td style="text-align: center;"><?=$row['health_infos_weight']?></td>
                    <td style="text-align: center;"><?=$row['health_infos_bmi']?></td>
                </tr>
        <?php
    }
}
?>
        </tbody>
    </table>
</div>
</body>
</html>