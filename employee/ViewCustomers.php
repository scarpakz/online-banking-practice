<?php include "../constant/header.php"; ?>
<?php
    $sql = "SELECT * FROM user";
    $excute = mysqli_query($db,$sql);
?>
<div class="view-cust-container">
    <div class="view-cust-header"
    data-aos="fade-right"
    data-aos-offset="300"
    data-aos-easing="ease-in-sine"
    >
        <h1 class="fl-1">View Customers</h1>
        <a class="fl-1" href="../logout.php"> Sign Out</a>
    </div>
    <div class="back-btn">
        <a href="DashboardEmployee.php" class="m-lg text-white">< Back</a>
    </div>
    <div class="view-cust-display-container"
    data-aos="flip-left"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="2000"
    >
        <div class="view-cust-headline">
            <ul>
                <li>ID</li>
                <li>First Name</li>
                <li>Last Name</li>
                <li>Birthdate</li>
            </ul>
        </div>
        <div class="view-cust-data">
            <?php while($data = mysqli_fetch_array($excute)){?>
                <ul>
                    <li><?php echo $data['id'];?></li>
                    <li><?php echo $data['first_name'];?></li>
                    <li><?php echo $data['last_name'];?></li>
                    <li><?php echo $data['birth_date'];?></li>
                </ul>
            <?php }?>
        </div>
    </div>
</div>

<?php include "../constant/footer.php"; ?>