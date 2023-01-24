<?php
include('connection.php');
session_start();
ob_start();
include('security-admin.php');


$query_students = "SELECT * FROM students";
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

					<li class="sidebar-item ">
						<a class="sidebar-link" href="view-students.php">
                            <i class="align-middle " data-feather="user"></i> <span class="align-middle">Students</span>
                        </a>
					</li>

					

					<li class="sidebar-item active">
						<a class="sidebar-link" href="view-history.php">
                            <i class="align-middle text-dark" data-feather="book-open"></i> <span class="align-middle">History</span>
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
                        <span class="d-flex justify-content-between">
                            <h2 class="mb-5">Students</h2>
                            <a href="pdf.php" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg></a>
                        </span>
                        
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Date of Birth</th>
                                    <th>Grade</th>
                                    <th>Section</th>
                                    <th>Action</th>
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
                                                <td><?php echo $row ['date_of_birth']?></td>
                                                <td><?php echo $row ['grade']?></td>
                                                <td><?php echo $row ['section']?></td>
                                                <td><a class="btn btn-success" href="history.php?student_id=<?php echo $row['student_id']?>">View</a>
                                                <a class="deleteBtn" href="delete-student.php?student_id=<?php echo $row ['student_id']?>">Delete</a></td>
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
