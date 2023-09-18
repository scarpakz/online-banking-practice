<?php
    include '../database/db.php';

    session_start();
    $id = $_SESSION['id'];
        
    if(isset($_POST['sbmt-cheque-amnt'])){
        $sql = "SELECT `cheque_balance` FROM `account` WHERE user_id = '$id'";
        $excute = mysqli_query($db,$sql);
        $data = mysqli_fetch_assoc($excute);

        $deposit_amount = $_POST['cheque-amnt'];
        $balance = $data['cheque_balance'];
        $new_amount = $balance += $deposit_amount;

        if($balance = 0){
            echo "Your Balance Is Empty";
        }else{
            echo $new_amount;
        }
        
        $usql = "UPDATE `account` SET `cheque_balance`='$new_amount' WHERE user_id = '$id'";
        $uresult = mysqli_query($db,$usql);
        
        if($uresult){
            header('location: ../customer/ViewBalance.php');
        }else{
            echo "error";
        }
}
?>