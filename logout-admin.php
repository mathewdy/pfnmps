<?php
session_start();
$_SESSION['username'];
unset($_SESSION['username']);
echo "<script>window.location.href='login-admin.php' </script>";
?>