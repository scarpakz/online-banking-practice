<?php echo "hello world";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="login-container">
            <div class="login-content">
                <h1>Sign In</h1>
                <div class="login-form">
                    <form action="employee/AddCustomer.php" method="post">
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
    </body>
</html>