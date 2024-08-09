<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    
    $sql = "SELECT current_bid FROM products WHERE product_id=$product_id ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        
        $row = mysqli_fetch_assoc($result);
        $_SESSION['current_bid'] = $row['current_bid'];

    } else {
        header("Location: login.php?error=Incorect User name or password");
    }
}
?>