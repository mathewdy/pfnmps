<?php
session_start();
$_SESSION['email'];
unset($_SESSION['email']);
echo "<script>window.location.href='login-parent.php' </script>";
?>