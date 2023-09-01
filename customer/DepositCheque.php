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