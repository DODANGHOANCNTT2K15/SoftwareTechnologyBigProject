<?php
    $database ="shopdb";
    $conn = mysqli_connect("localhost", "root", "", $database);
    if($conn) {
        echo "kết nối thành công";
    }
?>