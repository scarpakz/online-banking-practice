<?php
    include '../database/db.php';
 
    session_start();
    $id = $_SESSION['id'];
    if(isset($_POST['chnge_pin'])){
        $change_pin = $_POST['new_pin'];

        $sql = "UPDATE `user` SET `password`='$change_pin' WHERE id='$id'";
        $result = mysqli_query($db,$sql);

        if($result){
            header('location:../customer/SuccessChangePIN.php');
        }else{
            echo "Unsuccessfuly Update PIN";
        }
    }
?>