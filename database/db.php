<?php
    // $db = mysqli_connect("127.0.0.1", "root", "", "online_banking");
    $db = mysqli_connect("localhost", "root", "", "online_banking");

    if (!$db) {
        header("location: ../404.php");
    }
?>