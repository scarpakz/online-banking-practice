<?php include "../constant/header.php"; ?>

    <div class="employee-dasboard">
        <div class="employee-dash-header"
        data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine"
        >
            <h1 class="fl-1">Welcome, admin123!</h1>
            <a href="" class="fl-1">Sign Out</a>
        </div>
        <div class="deposit-regular-container"
        data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="1500"
        >
            <div class="cash-regular-select">
                <a href="WithdrawCash.php">Cash</a>
            </div>
            <div class="cheque-regular-select">
                <a href="WithdrawCheque.php">Cheque</a>
            </div>
        </div>
    </div>

<?php include "../constant/footer.php"; ?>