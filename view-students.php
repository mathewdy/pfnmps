<?php
include('connection.php');
session_start();
ob_start();
include('security-admin.php');
//year month date
date_default_timezone_set("Asia/Manila");
$time= date("h:i:s", time());
$date = date('Y-m-d');
$total_date_time = $date ." ". $time;


$query_students = "SELECT DISTINCT students.image, students.first_name,students.middle_name,students.last_name,students.student_id,students.grade,students.section, program_records.ended_day FROM students LEFT JOIN
program_records ON students.student_id = program_records.student_id ";
$run = mysqli_query($conn,$query_students);
$no = 0;


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <link href="admin-template/css/app.css" rel="stylesheet">
	<link rel="./stylesheet" href="src/styles/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="home-admin.php">
                <img src="logo.jpg" alt="" height="50" style="border-radius: 50px;">
					<span class="align-middle px-3 text-dark">Bucal ES</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="home-admin.php">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
                         </a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="view-students.php">
                            <i class="align-middle text-dark" data-feather="user"></i> <span class="align-middle">Students</span>
                        </a>
					</li>

					

					<li class="sidebar-item">
						<a class="sidebar-link" href="view-history.php">
                            <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">History</span>
                        </a>
					</li>


                    <li class="sidebar-item">
						<a class="sidebar-link" href="bmi-records.php">
                            <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Reports</span>
                        </a>
					</li>
				
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                
                <span class="mt-2">
                    <h4 class="fw-bold">
                    Personalized Food and Nutritional  Metabolic  Profiling System
                    </h4>
                </span>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                <span class="text-dark">ADMIN</span>
                            </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="admin-profile.php"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout-admin.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>


            <!----searchbox---->
            <!-- <form action="" method="GET">
                <input type="text" name="search">
                <button type="submit" class="btn btn-primary">Search</button>

            </form> -->

			<main class="content">
				<div class="container-fluid p-0">
                    <div class="card p-5">
                        <!-- <h1 class="mb-4 mt-0 text-muted">Students</h1> -->

                        <span class="d-flex justify-content-between">
                                <a href="add-patient.php" class="btn btn-success rounded-circle mb-4" style="padding: 8px 12px;"><i class="align-middle" data-feather="plus"></i></a>
                            <!-- <span >
                                <a href="pdf.php" class="btn btn-md btn-primary" ><i class="align-middle" data-feather="download"></i> Download List</a>
                            </span> -->
                        </span>
                        
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Grade</th>
                                    <th>Section</th>
                                    <th class="text-center">Action</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody> 
                            <?php

                                if(mysqli_num_rows($run) > 0){
                                    foreach($run as $row){
                                        $no++;
                                        ?>

                                               <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><img src= "<?php echo "./parents/student_image/" . $row['image'];?> " alt="image" width="80px" height="80px"></td>
                                                <td>
                                                    <?php echo $row ['first_name']. " " . $row['middle_name'] . " " . $row ['last_name']?>
                                                </td>
                                                <td><?php echo $row ['grade']?></td>
                                                <td><?php echo $row ['section']?></td>
                                                <td>
                                                    <span class="d-flex justify-content-evenly align-items-center">
                                                        <a class="btn btn-sm btn-primary" href="edit-student.php?student_id=<?php echo $row ['student_id']?>"><i class="align-middle" data-feather="edit"></i> Edit </a>
                                                        <a class="deleteBtn btn btn-sm btn-danger" href="delete-student.php?student_id=<?php echo $row['student_id']?>"><i class="align-middle" data-feather="trash-2"></i> Delete</a>
                                                    </span>
                                                </td>
                                                <td>
                                                    <?php
                                                    if($row['ended_day'] < $date){
                                                        echo "Inactive";
                                                    }else{
                                                        echo "Active";
                                                    }

                                                    ?>
                                                </td>
                                            </tr>
                                        
                                        <?php
                                         
                                    }   
                                   
                                }
                            ?>
                            </tbody>
                        </table>
                        
                    </div>
				</div>

                    <!-- // $pr_query = "SELECT * FROM students";
                    $pr_result = mysqli_query($conn,$pr_query);

                    $total_record = mysqli_num_rows($pr_result);
                    $total_page = ceil($total_record/$num_per_page);

                    for($i=1; $i <= $total_page ; $i++){
                        echo "<a href='view-students.php?page=".$i."' class='btn btn-primary'> $i </a>";
                    } -->
			</main>
            <footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>@PFNMPS</strong></a> 
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<small>Copyright &copy; 2023</small>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
    <?php if(isset($_GET['m'])){ ?>
        <div class="flash-data" data-flashdata="<?= $_GET['m']; ?>"></div> 
    <?php }?>

<!-- Bootstrap -->
<script src="src/styles/custom/app.js"></script>
<script src="src/styles/bootstrap/@popperjs/core/dist/umd/popper.js"></script>
<script src="admin-template/js/app.js"></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Datatables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function() {
        $('#dataTable').DataTable();
        // $('.deleteBtn').each(function(){ 

        // // const deleteBtn = $('#deleteBtn');
        //     $(".deleteBtn").on('click', function(event){
        //        event.preventDefault();
        //        sweetAlert();
        //     })
        // })
        
    });
    $(".deleteBtn").on('click', function(e){
        e.preventDefault();
        const link = $(this).attr('href')
        Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm Deletion'
                }).then((result) => {
                if (result.isConfirmed) {
                   document.location.href = link;
                }
        })
    })
    // function sweetAlert(){
    //     Swal.fire({
    //             title: 'Are you sure?',
    //             text: "You won't be able to revert this!",
    //             icon: 'warning',
    //             showCancelButton: true,
    //             confirmButtonColor: '#3085d6',
    //             cancelButtonColor: '#d33',
    //             confirmButtonText: 'Confirm Deletion'
    //             }).then((result) => {
    //             if (result.isConfirmed) {
    //                 console.log($(".deleteBtn").data("id"))
    //                 // window.location.href = ;
    //             }
    //     })
    // }
    const flashdata = $('.flash-data').data('flashdata')
    if(flashdata){
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'A record has been deleted!',
            showConfirmButton: false,
            timer: 1500
        })
    }
</script>


</body>
</html>


<?php


ob_end_flush(); 
?>
