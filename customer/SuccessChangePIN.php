<?php include "../constant/header.php"; ?>
<?php
    $psql = "SELECT * FROM user";
    $pexcute = mysqli_query($db,$psql);
?>
    <div class="cust-dash-container">
        <div class="back-btn">
            <a href="../customer/DashboardCustomer.php" class="m-lg text-white">< Back</a>
        </div>
        <div class="success-chge-pin-container">
            <h1>You're PIN has been change successfully</h1>
        </div>
    </div>

<?php include "../constant/footer.php"; ?>