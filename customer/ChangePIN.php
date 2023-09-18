<?php include "../constant/header.php"; ?>
<?php
    $psql = "SELECT * FROM user";
    $pexcute = mysqli_query($db,$psql);
?>
<div class="add-cust-container">
    <div class="add-cust-header"
    data-aos="fade-right"
    data-aos-offset="300"
    data-aos-easing="ease-in-sine"
    >
        <h1 class="fl-1">Change Your PIN</h1>
        <a class="fl-1" href="../logout.php"> Sign Out</a>
    </div>
    <div class="back-btn">
        <a href="../customer/DashboardCustomer.php" class="m-lg text-white">< Back</a>
    </div>
    <?php if($chge_data = mysqli_fetch_array($pexcute)){ ?>
        <form action="../controllers/ChangePin.php?chnge_pin=<?php echo $chge_data['id']; ?>" method="post" class="chge-pin-form">
            <div class="add-cust-form-group d-flex" data-aos="fade-right">
                <input type="password" name="new_pin" id="PIN_ID" class="add-input" placeholder="" required>
            </div>
            <div class="add-cust-form-group">
                <input type="submit" name="chnge_pin" value="Save Entry" class="save-entry">
            </div>
        </form>
    <?php }?>
</div>

<?php include "../constant/footer.php"; ?>