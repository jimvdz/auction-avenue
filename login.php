<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Auction Avenue | Login</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/log-reg.css">
    </head>
    <body>
        <main class="log-reg">
            <form action="work_login.php" method="post" class="left">
                <h1>Welcome to Auction Avenue!</h1>

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                <h3>Username:</h3>
                <input type="text" name="username" id="username" class="inputs" >

                <h3>Password:</h3>
                <input type="password" name="password" id="password" class="inputs" >

                <button type="submit" id="sign-in" class="buttons">Sign In</button>

                <p>Don't have an account? <a href="registration.php">Register Now!</a></p>

                <p>For admins, <a href="login_admin.php"> sign in here.</a></p>
            </form>


            <div class="right">
                <img src="img/Auction Avenue Logo.png" alt="Website Logo" class="logo">
                <h1 class="tagline">Where Rarity Meets Opportunity</h1>
            </div>
        </main>
    </body>
</html>