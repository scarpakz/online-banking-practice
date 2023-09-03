<?php
include '../database/db.php';

session_start();
if (isset($_POST['submit'])) {
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    $getUserQuery = "SELECT * FROM user WHERE user_name='$user_name' AND password='$password'";
    $executeSelect = mysqli_query($db, $getUserQuery);

    if ($executeSelect) {
        $userDBCredentials = mysqli_fetch_array($executeSelect);
        $role = $userDBCredentials['role'];
        
        if ($userDBCredentials['user_name'] == $user_name && $userDBCredentials['password'] == $password) {
            if ($role == 'customer') {
                header("location: ../customer/DashboardCustomer.php");
                $_SESSION['user_name'] = $user_name;
                $_SESSION['role'] = $role;
            } else { // Employee
                header("location: ../employee/DashboardEmployee.php");
                $_SESSION['user_name'] = $user_name;
                $_SESSION['role'] = $role;
            }
        } else { // if not equal username and password
            header("location: ../login.php?login=false");
        }
    } else { // if no results found
        header("location: ../login.php?login=false");
    }
} else {
    header("location: ../login.php");
}
?>