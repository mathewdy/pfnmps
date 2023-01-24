<?php
include('connection.php');
session_start();

require 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$student_id = $_GET['student_id'];


// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
require 'student-history-pdf.php';


$html = ob_get_contents();
ob_get_clean();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('student-history.pdf' ,['Attatchment' => false]);

?>