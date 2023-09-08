<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="login-container"
        data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine"
        >
            <div class="login-content">
                <h1>Sign In</h1>
                <div class="login-form">
                    <?php if (isset($_GET['login'])) { ?>
                        <div class="alert-danger">Error! Incorrect credentials.</div>
                    <?php }?>
                    <form action="controllers/PostLogin.php?" method="post">
                        <div class="login-group">
                            <input type="text" name="username" placeholder="Enter Username" required/>
                        </div>
                        <div class="login-group">
                            <input type="password" name="password" placeholder="Enter Password" required/>
                        </div>
                        <div class="login-group">
                            <input class="login-btn" type="submit" value="Enter" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>