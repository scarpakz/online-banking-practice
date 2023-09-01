<?php include "../constant/header.php"?>
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
                <a href="" id="link-btn">Change PIN</a>
                <a href="" id="link-btn">Sign Out</a>
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
                            <h3>JASON, JAVIER</h3>
                            <h3>Date Validity</h3>
                        </div>
                        <div class="div-validity">
                            <h3>09/10/1996</h3>
                            <h3>09/2028</h3>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </div> 
        
<?php include "../constant/footer.php";?>