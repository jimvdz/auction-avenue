<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['username_admin'])) {

    $sql = "SELECT current_bid FROM products where product_id = 1";
    $result = $conn->query($sql);
    $row1 = $result-> fetch_row();

    $sql = "SELECT current_bid FROM products where product_id = 2";
    $result = $conn->query($sql);
    $row2 = $result-> fetch_row();

    $sql = "SELECT current_bid FROM products where product_id = 3";
    $result = $conn->query($sql);
    $row3 = $result-> fetch_row();

    $sql = "SELECT current_bid FROM products where product_id = 4";
    $result = $conn->query($sql);
    $row4 = $result-> fetch_row();

    $sql = "SELECT current_bid FROM products where product_id = 5";
    $result = $conn->query($sql);
    $row5 = $result-> fetch_row();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/biddings.css">
    <title>Auction Avenue | Biddings</title>
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
        <h1>Product Biddings</h1>

        <h2>Niek Shoes</h2>
        <img class="product_images" src="img/Niek Shoes.png" alt="Niek Shoes">
        <div>
            <h2>Highest Bid</h2>
            <h2>$<?= $row1[0] ?></h2>
        </div>

        <h2>Cry Baby Perfume Bottle</h2>
        <img class="product_images" src="img/Cry Baby Perfume Bottle.png" alt="Cry Baby Perfume Bottle">
        <div>
            <h2>Highest Bid</h2>
            <h2>$<?= $row2[0] ?></h2>
        </div>

        <h2>Luster & Co. Gold Necklace</h2>
        <img class="product_images" src="img/Luster & Co. Gold Necklace.png" alt="Luster & Co. Gold Necklace">
        <div>
            <h2>Highest Bid</h2>
            <h2>$<?= $row3[0] ?></h2>
        </div>

        <h2>Floral Symphony</h2>
        <img class="product_images" src="img/Floral Symphony.png" alt="Floral Symphony">
        <div>
            <h2>Highest Bid</h2>
            <h2>$<?= $row4[0] ?></h2>
        </div>

        <h2>The Beetles Vinyl</h2>
        <img class="product_images" src="img/The Beetles Vinyl.png" alt="The Beetles Vinyl">
        <div>
            <h2>Final Bid</h2>
            <h2>$<?= $row5[0] ?></h2>
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
     header("Location: login_admin.php");
     exit();
}
 ?>