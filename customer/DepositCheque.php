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
        <button class="m-lg text-white">< Back</button>
        <div class="deposit-cheq-container"
        data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="1500"
        >
            <h1>Deposit Cheque</h1>
            <form action="" method="post">
                <div class="input-cheq-amount">
                    <input type="text" placeholder="Enter amount">
                </div>
                <div class="deposit-cheq-btn">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

<?php include "../constant/footer.php"; ?>