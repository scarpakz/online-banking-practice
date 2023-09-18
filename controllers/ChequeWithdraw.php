<?php
    include "../database/db.php";
    session_start();

    if(isset($_POST['submit'])) {
        $passage = $_POST['cheque'];
        $session = $_SESSION['id'];
        $data = "SELECT * FROM account WHERE user_id = '$session'";

        $execute = mysqli_query($db, $data);


        $fetch = mysqli_fetch_array($execute);
        
        $_query = $fetch['cheque_balance'] - $passage; 

        $executor = "UPDATE `account` SET `cheque_balance`='$_query' WHERE `user_id`='$session'";

        $query = mysqli_query($db, $executor);

        header("location: ../customer/ViewBalance.php");
    }else {
        header("location: WithdrawCash.php");
    }
?>