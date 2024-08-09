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
    <link rel="stylesheet" href="css/index.css">
    <title>Auction Avenue | Home</title>
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
        <img src="img/Introduction.png" alt="Introduction Image" id="intro">

        <img src="img/Auctions Preview.png" alt="Auctions Preview Image" class="previews">
        <div class="preview-text">
            <h1>Browse Our Products</h1>
            <p>From the melodic crackle of vinyl to the timeless elegance of art, our upcoming auctions offer a treasure trove of finds. Discover rare records, captivating paintings, dazzling jewelry, and stylish shoes. Bid now! </p>
        </div>

        <div class="preview-text">
            <h1>Our Story</h1>
            <p>Launched in 2024, Auction Avenue is your gateway to unique finds! We curate diverse collections across categories - vinyl, art, jewelry, and more. Discover hidden gems, bid on your passions, and join our growing collector community.</p>
        </div>
        <img src="img/About Preview.png" alt="About Preview Image" class="previews">

        <img src="img/Contact Preview.png" alt="Contact Preview Image" class="previews">
        <div class="preview-text">
            <h1>Contact Us</h1>
            <p>Have a question? Reach out! We're here to help. Contact us via email or phone.</p>
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