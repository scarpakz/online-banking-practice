<?php include "../constant/header.php"?>
<?php
    $user_name = $_SESSION['user_name'];
    $psql = "SELECT * FROM user WHERE user_name = '$user_name'";
    $pexcute = mysqli_query($db,$psql);

    $first_name = "";
    $last_name = "";
    $birth_date = "";

    $data = mysqli_fetch_array($pexcute);

    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $birth_date = $data['birth_date'];
?>
    <div class="virtual-header-container">   
        <div class="virtual-displaying-set"
            data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine"
        >
            <div>
                <h1>Welcome, cust123!</h1>
            </div>
            <div class="virtual-container">
            <?php if($chge_data = mysqli_fetch_array($pexcute)){ ?>
                <a href="../customer/ChangePIN.php?chnge_pin=<?php echo $chge_data['id']; ?>" id="link-btn">Change PIN</a>
            <?php }?>
                <a href="../logout.php" id="link-btn">Sign Out</a>
            </div>
        </div>  
        
        <button class="m-lg text-white">< Back</button>
        <div>
            <h1 class="text-atm" data-aos="fade-up">My Virtual ATM card</h1>
        </div>
        <div class="card-box" 
        data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000"
        >
            <div class="color-background">
                <div>
                    <h1 id="banking-text">Banking Online, Ph</h1>
                </div>
                <div class="adjustment-container">
                    <?php for ($i=0; $i < 3; $i++) { ?>
                        <img src="../assets/img/Mastercard-Logo.png" width="150vh">
                    <?php   }?>
                    <div class="lining-height">
                        <div class="div-box">
                            <h3><?php echo $first_name . " " . $last_name; ?></h3>
                            <h3>Date Validity</h3>
                        </div>
                        <div class="div-validity">
                            <h3><?php echo $birth_date; ?></h3>
                            <h3>09/2028</h3>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </div> 
        
<?php include "../constant/footer.php";?>