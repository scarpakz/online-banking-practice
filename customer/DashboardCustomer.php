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
                <a href="../logout.php" class="sign-out">Sign Out</a>
            </div>
        </div>
        <button class="m-lg text-white">< Back</button>
        <div class="cust-dash-first-container">
            <h1 data-aos="fade-up" data-aos-duration="1000">What do you want to do today?</h1>
            <div class="cust-dash-content" data-aos="fade-up" data-aos-delay="1000">
                <div class="select-btn">
                    <a href="">View Balance</a>
                </div>
                <div class="select-btn">
                    <a href="">Withdraw</a>
                </div>
                <div class="select-btn">
                    <a href="">Deposit Cash</a>
                </div>
                <div class="select-btn">
                    <a href="VirtualATM.php">View My Card</a>
                </div>
            </div>
        </div>
    </div>

<?php include "../constant/footer.php"; ?>