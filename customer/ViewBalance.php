<?php include "../constant/header.php"; ?>
<?php
    $sql = "SELECT * FROM `account`";
    $excute = mysqli_query($db,$sql);
?>
    <div class="view-balance-container">
        <div class="view-balance-header">
            <h1 class="vb-1">Welcome, cust123!</h1>
            <div class="vb-1">
                <a href="" class="chnge-pin">Change PIN</a>
                <a href="">Sign Out</a>
            </div>
        </div>
        <button class="m-lg text-white">< Back</button>
        <div class="balances">
            <?php if($data = mysqli_fetch_array($excute)) {?>
                <div class="regular-balance">
                    <span>Regular Balance:</span>
                    <span class="balance"><?php echo $data['regular_balance']; ?></span>
                </div>
                <div class="cheque-balance">
                    <span>Cheque Balance:</span>
                    <span class="balance"><?php echo $data['cheque_balance'] ?></span>
                </div>
            <?php }?>
        </div>
    </div>

<?php include "../constant/footer.php"; ?>