<?php

$conn = new mysqli('localhost', 'root' , '' , 'pfnmps');

if($conn == false) {
    echo "error" . $conn->error;
}
?>