<?php include "../constant/header.php"; ?>

    <div class="view-balance-container">
        <div class="view-balance-header"
            data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine"
        >
            <h1 class="vb-1">Welcome, cust123!</h1>
            <div class="vb-1">
                <a href="" class="chnge-pin">Change PIN</a>
                <a href="">Sign Out</a>
            </div>
        </div>
        <button class="m-lg text-white">< Back</button>
        <div class="balances" 
            data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="1500"
        >
            <div class="regular-balance">
                <span>Regular Balance:</span>
                <span class="balance">P 100.00</span>
            </div>
            <div class="cheque-balance">
                <span>Cheque Balance:</span>
                <span class="balance">P 950,000.00</span>
            </div>
        </div>
    </div>

<?php include "../constant/footer.php"; ?>