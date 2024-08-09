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
    <link rel="stylesheet" href="css/contact.css">
    <title>Auction Avenue | Contact</title>
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
        <h1>Contact Us!</h1>

        <p id="contact-desc">To get in touch, you may reach us at:</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15405.838824839146!2d120.57971124595778!3d15.133077766698944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f24ec2f5a1f9%3A0x5e0af8a6aaab2282!2sHoly%20Angel%20University!5e0!3m2!1sen!2sph!4v1713335950296!5m2!1sen!2sph" allowfullscreen=""></iframe>

        <h1 id="contact_form">Contact Form</h1>

        <div id="contact-info">
            <h2>Let's Talk</h2>
            <p>Have some ideas in mind you want to request?</p>

            <h2>Email:</h2>
            <p>NoToTOFI@hau.edu.ph</p>

            <h2>Location:</h2>
            <p>#2 Holy Angel Ave., Angeles City, Pampanga 2000</p>
        </div>

        <div>
            <form action="insert_suggestions.php" method="post">
                <h2>Name:</h2>
                <input type="text" name="name" id="name" value="<?= $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?>"><br>

                <h2>Email:</h2>
                <input type="email" name="email" id="email" value = "<?= $_SESSION['email']; ?>"><br>

                <h2>Message:</h2>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message here"></textarea>

                <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                <input type="submit" value="Submit" id="submit" class="buttons">
            </form>
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