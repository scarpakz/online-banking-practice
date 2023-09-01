<?php
    include '../database/db.php';
 
    if(isset($_POST['chnge_pin'])){
        $change_pin = $_POST['new_pin'];

        $sql = "UPDATE `user` SET `password`='$change_pin' WHERE id='1'";
        $result = mysqli_query($db,$sql);

        if($result){
            header('location:../customer/DashboardCustomer.php');
        }else{
            echo "Unsuccessfuly Update PIN";
        }
    }
?>