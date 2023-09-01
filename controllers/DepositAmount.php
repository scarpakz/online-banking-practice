<?php
    include '../database/db.php';
        
    if(isset($_POST['sbmt-dep-amnt'])){
        $sql = "SELECT `regular_balance` FROM `account` WHERE user_id = '1'";
        $excute = mysqli_query($db,$sql);
        $data = mysqli_fetch_assoc($excute);

        $deposit_amount = $_POST['dep_amnt'];
        $balance = $data['regular_balance'];
        $new_amount = $balance += $deposit_amount;

        if($balance = 0){
            echo "Your Balance Is Empty";
        }else{
            echo $new_amount;
        }
        
        $usql = "UPDATE `account` SET `regular_balance`='$new_amount' WHERE user_id = '1'";
        $uresult = mysqli_query($db,$usql);
        
}
?>