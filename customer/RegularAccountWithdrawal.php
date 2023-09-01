<?php include "../constant/header.php"; ?>

<div class="cust-dash-container">
        <div class="cust-dash-header"
        data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine"
        >
            <h1 class="vb-1">Welcome, cust123!</h1>
            <div class="vb-1">
                <a href="" class="chnge-pin">Change PIN</a>
                <a href="" class="sign-out">Sign Out</a>
            </div>
        </div>
        <button class="m-lg text-white">< Back</button>

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
                <input type="number" min="0" name="dep_amnt" id="input-type" placeholder="Enter amount">
            </div>
            <div>
                <input type="submit" name="sbmt-dep-amnt" value="submit" id="submitted-btn">
            </div>    
        </form>
    </div>
</div>

<?php include "../constant/footer.php"; ?>