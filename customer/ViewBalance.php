<?php include "../constant/header.php"; ?>
<?php
    $sql = "SELECT * FROM `account`";
    $excute = mysqli_query($db,$sql);

    $sqli = "SELECT * FROM `account`";
    $set = mysqli_query($db,$sqli);

    $psql = "SELECT * FROM user";
    $pexcute = mysqli_query($db,$psql);

?>
    <div class="view-balance-container">
        <div class="view-balance-header"
            data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine"
        >
            <h1 class="vb-1">Welcome, cust123!</h1>
            <div class="vb-1">
            <?php if($chge_data = mysqli_fetch_array($pexcute)){ ?>
                <a href="../customer/ChangePIN.php?chnge_pin=<?php echo $chge_data['id']; ?>" class="chnge-pin">Change PIN</a>
            <?php }?>
                <a href="../logout.php">Sign Out</a>
            </div>
        </div>
        <div class="back-btn">
            <a href="../customer/DashboardCustomer.php" class="m-lg text-white">< Back</a>
        </div>
        <div class="balances"
        data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="1500"
        >
            <?php if($data = mysqli_fetch_array($excute)) {?>
                <div class="regular-balance">
                    <span>Regular Balance:</span>
                    <span class="balance"><?php echo $data['regular_balance']; ?></span>
                </div>
                <?php }?>
                <?php if($input = mysqli_fetch_array($set)){?>
                <div class="cheque-balance">
                    <span>Cheque Balance:</span>
                    <span class="balance"><?php echo $data['cheque_balance'] ?></span>
                </div>
                <?php }?>
        </div>
    </div>

<?php include "../constant/footer.php"; ?>