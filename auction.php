<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['username'])) {
    // $sql = "SELECT current_bid FROM products where product_id = $product_id";
    // $result = $conn->query($sql);
    // $row = $result-> fetch_row();

    $username = $_SESSION['username'];

?>

<?php
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

    if (isset($_POST['update1'])) {
        $qry = "update products set current_bid=current_bid+50 where product_id=1;";
        $qry2 = "insert into bids(username, product_name, bid_value) values('$username', 'Niek Shoes', $row1[0]+50)";

        if(mysqli_query($conn, $qry) && mysqli_query($conn, $qry2)) {
            header('location: auction.php?success1=Bid placed successfully!#product1');
        }else{
            echo mysqli_error($conn);
        }
    }

    if (isset($_POST['update2'])) {
        $qry = "update products set current_bid=current_bid+50 where product_id=2";
        $qry2 = "insert into bids(username, product_name, bid_value) values('$username', 'Cry Baby Perfume Bottle', $row2[0]+50)";
        
        if(mysqli_query($conn, $qry) && mysqli_query($conn, $qry2)) {
            header('location: auction.php?success2=Bid placed successfully!#product2');
        }else{
            echo mysqli_error($conn);
        }
    }

    if (isset($_POST['update3'])) {
        $qry = "update products set current_bid=current_bid+50 where product_id=3";
        $qry2 = "insert into bids(username, product_name, bid_value) values('$username', 'Luster & Co. Gold Necklace', $row3[0]+50)";
        
        if(mysqli_query($conn, $qry) && mysqli_query($conn, $qry2)) {
            header('location: auction.php?success3=Bid placed successfully!#product3');
        }else{
            echo mysqli_error($conn);
        }
    }
    if (isset($_POST['update4'])) {
        $qry = "update products set current_bid=current_bid+50 where product_id=4";
        $qry2 = "insert into bids(username, product_name, bid_value) values('$username', 'Floral Symphony', $row4[0]+50)";
        
        if(mysqli_query($conn, $qry) && mysqli_query($conn, $qry2)) {
            header('location: auction.php?success4=Bid placed successfully!#product4');
        }else{
            echo mysqli_error($conn);
        }
    }
    
    if (isset($_POST['update5'])) {
        $qry = "update products set current_bid=current_bid+50 where product_id=5";
        $qry2 = "insert into bids(username, product_name, bid_value) values('$username', 'The Beetles Vinyl', $row5[0]+50)";
        
        if(mysqli_query($conn, $qry) && mysqli_query($conn, $qry2)) {
            header('location: auction.php?success5=Bid placed successfully!#product5');
        }else{
            echo mysqli_error($conn);
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/auction.css">
    <title>Auction Avenue | Auction</title>
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
        <h1 id="auctions-header">Featured Auctions</h1>
        <div id="product1" class="product-container">
            <img src="img/Niek Shoes.png" alt="Niek" class="product-img">
            <div class="product-info">
                <h1 class="product-title">Niek Shoes</h1>
                <form action="auction.php" method="post" class="product-desc">
                    <p>Style and comfort combined. Walk confidently with sleek design and all-day ease. Perfect for any occasion, 'Niek' brings effortless sophistication to every step.</p>
                    <?php if (isset($_GET['success1'])) { ?>
                        <p class="success"><?php echo $_GET['success1']; ?></p>
                    <?php } ?>
                    <p>Time left: <strong id="time1"></strong></p>
                    <h2>Highest Bid: $<?php echo $row1[0];?></h2>
                    <input type="submit" name="update1" value="Bid Higher Value" class="buttons">
                </form>
            </div>
        </div>

        <div id="product2" class="product-container">
            <div class="product-info">
                <h1 class="product-title">Cry Baby Perfume Bottle</h1>
                <form action="auction.php" method="post" class="product-desc">
                    <p>Laconic milk and sweet strawberries create a playful innocence, while dark fruits add a hint of rebellion. As it dries down, the fragrance is warmed by caramel and deepened by woody notes, creating a scent that is both sweet and sophisticated.</p>
                    <?php if (isset($_GET['success2'])) { ?>
                        <p class="success"><?php echo $_GET['success2']; ?></p>
                    <?php } ?>
                    <p>Time left: <strong id="time2"></strong></p>
                    <h2>Highest Bid: $<?php echo $row2[0];?></h2>
                    <input type="submit" name="update2" value="Bid Higher Value" class="buttons">
                </form>
            </div>
            <img src="img/Cry Baby Perfume Bottle.png" alt="Cry Baby Perfume Bottle" class="product-img">
        </div>

        <div id="product3" class="product-container">
            <img src="img/Luster & Co. Gold Necklace.png" alt="Luster & Co. Gold Necklace" class="product-img">
            <div class="product-info">
                <h1 class="product-title">Luster & Co. Gold Necklace</h1>
                <form action="auction.php" method="post" class="product-desc">
                    <p>Shine every day. This gold necklace adds timeless elegance to any outfit. Luxuriously crafted, it flatters every neckline. A treasure you'll love for years.</p>
                    <?php if (isset($_GET['success3'])) { ?>
                        <p class="success"><?php echo $_GET['success3']; ?></p>
                    <?php } ?>
                    <p>Time left: <strong id="time3"></strong></p>
                    <h2>Highest Bid: $<?php echo $row3[0];?></h2>
                    <input type="submit" name="update3" value="Bid Higher Value" class="buttons">
                </form>
            </div>
        </div>

        <div id="product4" class="product-container">
            <div class="product-info">
                <h1 class="product-title">Floral Symphony</h1>
                <form action="auction.php" method="post" class="product-desc">
                    <p>Aged beauty whispers from this old painting. Soft colors hint at a life long past. More than art, it's a window to another era, waiting to be cherished.</p>
                    <?php if (isset($_GET['success4'])) { ?>
                        <p class="success"><?php echo $_GET['success4']; ?></p>
                    <?php } ?>
                    <p>Time left: <strong id="time4"></strong></p>
                    <h2>Highest Bid: $<?php echo $row4[0];?></h2>
                    <input type="submit" name="update4" value="Bid Higher Value" class="buttons">
                </form>
            </div>
            <img src="img/Floral Symphony.png" alt="Floral Symphony" class="product-img">
        </div>

        <div id="product5" class="product-container">
            <img src="img/The Beetles Vinyl (Sold).png" alt="The Beetles Vinyl" class="product-img">
            <div class="product-info">
                <h1 class="product-title">[SOLD] The Beetles Vinyl</h1>
                <form action="auction.php" method="post" class="product-desc">
                    <p>More than just music, this pre-loved vinyl record is a time capsule waiting to be unlocked. "We the Beetles” by The Beetles has been meticulously cared for, offering a chance to experience classic tunes in their original glory.</p>
                    <?php if (isset($_GET['success5'])) { ?>
                        <p class="success"><?php echo $_GET['success5']; ?></p>
                    <?php } ?>
                    <h2>Winner: Juan dela Cruz</h2>
                    <h2>Final Bid: $<?php echo $row5[0];?> </h2>
                </form>
            </div>
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
    <script>

        var cdown1 = new Date("May 11, 2024 12:30:30").getTime(); var part1 = "time1";
        var cdown2 = new Date("May 20, 2024 5:00:15").getTime(); var part2 = "time2";
        var cdown3 = new Date("Jun 12, 2024 7:45:20").getTime(); var part3 = "time3";
        var cdown4 = new Date("Jun 24, 2024 7:45:00").getTime(); var part4 = "time4";

        var x = setInterval(function() { wow(cdown1, part1, x); }, 1000);  
        var y = setInterval(function() { wow(cdown2, part2, y); }, 1000); 
        var z = setInterval(function() { wow(cdown3, part3, z); }, 1000); 
        var b = setInterval(function() { wow(cdown4, part4, b); }, 1000); 

        function wow (cdown, part, el) {
            var now = new Date().getTime();

            var distance = cdown - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById(part).innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

            if (distance < 0) {
                clearInterval(el);
                document.getElementById(part).innerHTML = "FINISHED.";
            }
        }
</script>
</body>
</html>

<?php 
} else{
    header("Location: login.php");
    exit();
} ?>