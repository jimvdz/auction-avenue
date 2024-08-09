<?php

include "db_conn.php";
$query = "select * from suggestions";
$result = mysqli_query($conn, $query);

session_start();

if (isset($_SESSION['username_admin'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/suggestions.css">
    <title>Auction Avenue | Suggestions</title>
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
        <h1>User Suggestions</h1>

        <?php
            while($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="user_suggestions">
                <h2><?= $row['name'] ?></h2>
                <h3><?= $row['email'] ?></h3>
                <p><?= $row['message'] ?></p>
            </div>
            <hr>
        <?php
            }
        ?>
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
     header("Location: login_admin.php");
     exit();
}
 ?>