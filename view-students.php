<?php
include('connection.php');
session_start();
ob_start();
include('security-admin.php');

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}

$num_per_age = 05;
$start_from = ($page-1)*05;




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


<a href="home-admin.php">Back</a>

<h1>View Students</h1>

    <table>
        <thead>
            <th>No.</th>
            <th>Image</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Grade</th>
            <th>Section</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>

    <?php


        $query = "SELECT * FROM students";
        $run = mysqli_query($conn,$query);
        $no = 1;
        if(mysqli_num_rows($run) > 0){
            foreach($run as $row){
                ?>

                    
                        <tbody>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><img src="student_image/<?php echo $row ['image']; ?>" alt="" width="300px" height="300px"></td>
                                <td><?php echo $row ['first_name']. " " . $row['middle_name'] . " " . $row ['last_name']?></td>
                                <td><?php echo $row ['date_of_birth']?></td>
                                <td><?php echo $row ['grade']?></td>
                                <td><?php echo $row ['section']?></td>
                                <td><a href="edit-student.php?student_id=<?php echo $row ['student_id']?>">Edit</a></td>
                                <td><a href="delete-student.php?student_id=<?php echo $row ['student_id']?>">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>


                <?php
            $no++; 
            }
        }


        // $pr_query = "SELECT * FROM users LEFT JOIN doctors_details ON users.account_id = doctors_details.user_id WHERE doctor_or_secretary ='doctor'";
        // $pr_results = mysqli_query($conn,$pr_query);
        // $total_record = mysqli_num_rows($pr_results);
        
        // $total_page = ceil($total_record/$num_per_age);

        // if($page > 1 ){
        //     echo  "<a href='view-doctors.php?page=".($page-1)."' class='btn btn-danger'>Previous</a> ";
        // }
        
        // for($i=1;$i<$total_page;$i++){
        //     echo  "<a href='view-doctors.php?page=".$i."' class='btn btn-primary'>$i</a> ";
        // }

        // if($i > $page ){
        //     echo  "<a href='view-doctors.php?page=".($page+1)."' class='btn btn-danger'>Next</a> ";
        // }

    ob_end_flush();
    ?>


<!--dito may search bar , para search mo na lang si student hshahsahsha-->
    
</body>
</html>