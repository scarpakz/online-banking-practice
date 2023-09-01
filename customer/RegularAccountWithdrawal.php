<?php include "../constant/header.php"; ?>

<div class="cust-dash-container">
        <div class="cust-dash-header">
            <h1 class="vb-1">Welcome, cust123!</h1>
            <div class="vb-1">
                <a href="" class="chnge-pin">Change PIN</a>
                <a href="" class="sign-out">Sign Out</a>
            </div>
        </div>
        <button class="m-lg text-white">< Back</button>

    <div class="format-container">
        <form action="../controllers/DepositAmount.php">
            <div>
                <h1 id="font-sizing">
                    Regular Account Withdrawal
                </h1>
            </div>
            <div>
                <input type="text" name="dep_amnt" id="input-type" placeholder="Enter amount">
            </div>
            <div>
                <input type="submit" name="sbmt-dep-amnt" value="submit" id="submitted-btn">
            </div>    
        </form>
    </div>
</div>

<?php include "../constant/footer.php"; ?>