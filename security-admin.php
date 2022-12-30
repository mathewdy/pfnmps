<?php

if(empty($_SESSION['email'])){
    echo "<script>window.location.href='login-admin.php' </script>";
}

?>