<?php 
session_start();

if (isset($_SESSION['username_admin'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/profile.css">
    <title>Auction Avenue | Profile</title>
</head>
<body>
    <nav>
        <a href="biddings.php" class="nav-left"><img class="nav-left" src="img/Auction Avenue Website Name.png" alt="Auction Avenue Website Name"></a>
        <div class="nav-right">
            <ul class="nav-list">
                <li><a href="biddings.php">Biddings</a></li>
                <li><a href="suggestions.php">Suggestions</a></li>
                <li><a href="users.php">Users</a></li>
            </ul>
            <a href="profile_admin.php"><img src="img/Profile Icon.png" alt="User Profile"></a>
        </div>
    </nav>
    <main>
        <div id="profile-left">
            <img src="img/Profile Icon.png" alt="Profile Icon">

            <p><?php echo $_SESSION['username_admin']; ?></p>
            <p>Username</p>

            <a href="work_logout.php" id="buttona"><button id="log-out" class="buttons">Log Out</button></a>
        </div>

        <div id="profile-right">
            <h1>Admin Information</h1>

            <h2>Name:</h2>
            <p><?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?></p>

            <h2>Email:</h2>
            <p><?php echo $_SESSION['email']; ?></p>

            <h2>Address:</h2>
            <p><?php echo $_SESSION['address'] . ' ' . $_SESSION['postal_code']; ?></p>

            <h2>Country:</h2>
            <p><?php echo $_SESSION['country']; ?></p>
        </div>
    </main>
    <footer class="footer">
        <div id="footer-logo">
            <img src="img/Auction Avenue Website Name.png" alt="Auction avenue logo">
        </div>
            <p id="copyright">	&copy; No Copyright Infringement. All Rights Reserved 2024 </p>
            <p id="project">A project of WD-201</p>
            <div class="member-names">
                <div class="names-left">
                    <div>David, Kate Anne</div>
                    <div>Natividad, Christine Jasline</div> 
                </div>
               <div class="names-right">
                    <div>Tayag, Chester Jonathan</div>
                    <div>Valdez, Jimwel</div>
               </div>
            </div>
            <div id="disclaimer">
                <span>Disclaimer: This website is for project purposes only. Any betting made will be considered null and void.</span>
            </div>
        </div>
    </footer>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>