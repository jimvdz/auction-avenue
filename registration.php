<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Auction Avenue | Registration</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/log-reg.css">
    </head>
    <body>
        <main class="log-reg reg">
            <form action="work_registration.php" method="post" class="left leftreg">
                <h1>Register Here!</h1>

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <h3>First Name:</h3>
                <input type="text" 
                            name="first_name"
                            class="inputs" required>

                <h3>Last Name:</h3>
                <input type="text" 
                            name="last_name"
                            class="inputs" required>

                <h3>Email:</h3>
                <input type="email" 
                            name="email"
                            class="inputs" required>

                <h3>Address:</h3>
                <input type="text" 
                            name="address"
                            class="inputs" required>

                <h3>Postal Code:</h3>
                <input type="text" 
                            name="postal_code"
                            class="inputs" required>

                <h3>Country:</h3>
                <input type="text" 
                            name="country"
                            class="inputs" required>

                <h3>Username:</h3>
                <input type="text" 
                            name="username"
                            class="inputs" required>

                <h3>Password:</h3>
                <input type="password" 
                            name="password"
                            class="inputs" required>

                <h3>Re-enter Password:</h3>
                <input type="password" 
                            name="repassword"
                            class="inputs" required>

                <button type="submit" class="buttons">Register</button>

                <p>Already have an account? <a href="login.php">Sign in here.</a></p>
            </form>

            <div class="right">
                <img src="img/Auction Avenue Logo.png" alt="Website Logo" class="logo">
                <h1 class="tagline">Where Rarity Meets Opportunity</h1>
            </div>
        </main>
    </body>
</html>