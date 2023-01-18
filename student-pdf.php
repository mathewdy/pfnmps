<?php
include('connection.php');
session_start();

require 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$id = $_GET['id'];
$sql = "SELECT students.student_id AS student_student_id, students.first_name AS student_first_name, students.last_name AS student_last_name ,students.middle_name AS student_middle_name, students.date_of_birth AS student_date_of_birth, students.gender AS student_gender ,students.room AS student_room,students.house AS student_house,students.street AS student_street,students.subdivision AS student_subdivison,students.barangay AS student_barangay,students.city AS student_city,students.zip AS student_zip,students.grade AS student_grade,students.section AS student_section,students.date_time_created AS student_date_time_created,students.four_ps AS student_four_ps,users.first_name AS user_first_name , users.middle_name AS user_middle_name , users.last_name AS user_last_name, users.room AS user_room, users.house AS user_house , users.street AS user_street, users.subdivision AS user_subdivision, users.barangay AS user_barangay, users.city AS user_city , users.zip AS user_zip ,users.email  AS user_email, users.image AS user_image , users.student_id AS user_student_id, users.user_id AS user_user_id , health_infos.bmi AS health_infos_bmi, health_infos.height AS health_infos_height, health_infos.weight AS health_infos_weight, health_infos.status AS health_infos_status FROM students LEFT JOIN users
ON students.student_id = users.student_id 
LEFT JOIN health_infos ON students.student_id = health_infos.student_id
WHERE students.student_id = '$id'";
$query = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($query);

    

// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
require 'student-record.php';


$html = ob_get_contents();
ob_get_clean();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('student-record.pdf' ,['Attatchment' => false]);

?>