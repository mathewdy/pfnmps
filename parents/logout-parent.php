<?php
session_start();
$_SESSION['email'];
unset($_SESSION['email']);
unset($_SESSION['student_id']);
echo "<script>window.location.href='login-parent.php' </script>";
?>