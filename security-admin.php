<?php

if(empty($_SESSION['username'])){
    echo "<script>window.location.href='login-admin.php' </script>";
}

?>