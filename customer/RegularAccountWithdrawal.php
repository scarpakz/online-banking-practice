<?php include "../constant/header.php"; ?>
<?php
    $psql = "SELECT * FROM user";
    $pexcute = mysqli_query($db,$psql);
?>
<div class="cust-dash-container">
        <div class="cust-dash-header"
        data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine"
        >
            <h1 class="vb-1">Welcome, cust123!</h1>
            <div class="vb-1">
            <?php if($chge_data = mysqli_fetch_array($pexcute)){ ?>
                <a href="../customer/ChangePIN.php?chnge_pin=<?php echo $chge_data['id']; ?>" class="chnge-pin">Change PIN</a>
            <?php }?>
                <a href="" class="sign-out">Sign Out</a>
            </div>
        </div>
        <div class="back-btn">
            <a href="../customer/DashboardCustomer.php" class="m-lg text-white">< Back</a>
        </div>

    <div class="format-container"
    data-aos="flip-left"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="1500"
    >
        <form action="../controllers/DepositAmount.php" method="post">
            <div>
                <h1 id="font-sizing">
                    Regular Account Withdrawal
                </h1>
            </div>
            <div>
                <input type="number" min="0" name="" id="input-type" placeholder="Enter amount">
            </div>
            <div>
                <input type="submit" name="" value="submit" id="submitted-btn">
            </div>    
        </form>
    </div>
</div>

<?php include "../constant/footer.php"; ?>