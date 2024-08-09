<?php 
session_start();

if (isset($_SESSION['username'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/about.css">
    <title>Auction Avenue | About</title>
</head>
<body>
    <nav>
    <a href="index.php" class="nav-left"><img class="nav-left" src="img/Auction Avenue Website Name.png" alt="Auction Avenue Website Name"></a>
        <div class="nav-right">
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="auction.php">Auction</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <a href="profile.php"><img src="img/Profile Icon.png" alt="User Profile"></a>
        </div>
    </nav>
    <main>
        <h1 class="about-header">About Us</h1>
        <div id="about-intro">
            <img id="about-logo" src="img/Auction Avenue Website Name 2.png" alt="Auction Avenue logo">
            <p>Auction Avenue is your one-stop shop for an exciting and dynamic online auction experience. Whether you're a seasoned collector seeking hidden treasures or a casual browser looking for unique finds, we offer a diverse selection of items to ignite your passion.</p>
        </div>
        <h1 class="about-header">Our Mission</h1>
        <img class="about-details" src="img/about-details.png" alt="">
        <p class="about-details">Our mission is to connect buyers and sellers efficiently and securely, which promotes an online marketplace for unique and valuable treasures. We also aim to provide a user-friendly platform which is accessible to everyone, regardless of their location. Furthermore, we set the standard for excellence in online auctions by ensuring transparency, fairness, and exceptional customer service for all customers.</p>
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