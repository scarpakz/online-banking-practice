<?php
    include '../database/db.php';

    if(isset($_POST['sbmt-dep-amnt'])){
        $deposit_amount = $_POST['dep_amnt'];
        $balance = 0;

        if($balance){
            $ 
        }

        $sql = "SELECT * FROM `account` WHERE regular_balance = '$balance'";
        $excute = mysqli_query($db,$sql);

    }
?>