<?php
include('connection.php');
session_start();

require 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$student_id = $_GET['student_id'];
$query_students = "SELECT students.first_name AS student_first_name,students.middle_name AS student_middle_name,students.last_name AS student_last_name,students.grade AS student_grade,students.section AS student_section,students.date_of_birth AS student_date_of_birth,students.age AS student_age ,students.four_ps AS student_four_ps,students.room AS student_room,students.house AS student_house,students.student_id AS student_student_id, students.street AS student_street ,students.subdivision AS student_subdivision ,students.barangay AS student_barangay,students.city AS student_city, users.first_name AS user_first_name, users.middle_name AS user_middle_name,users.last_name AS user_last_name, users.contact_number AS user_contact_number,
health_infos.height AS health_infos_height,health_infos.weight AS health_infos_weight,health_infos.bmi AS health_infos_bmi
FROM students
LEFT JOIN users 
ON students.student_id = users.student_id
LEFT JOIN health_infos 
ON students.student_id = health_infos.student_id";
$run_students = mysqli_query($conn,$query_students);
$row = mysqli_fetch_assoc($run_students);

// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
require 'all-students.php';


$html = ob_get_contents();
ob_get_clean();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('all-students.pdf' ,['Attatchment' => false]);

?>