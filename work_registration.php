<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['postal_code']) && isset($_POST['country']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $first_name = validate($_POST['first_name']);
    $last_name = validate($_POST['last_name']);
    $email = validate($_POST['email']);
    $address = validate($_POST['address']);
    $postal_code = validate($_POST['postal_code']);
    $country = validate($_POST['country']);
	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
    $repassword = validate($_POST['repassword']);

	// $user_data = 'first_name='. $first_name . 'last_name='. $last_name . 'email='. $email . 'address='. $address . 'postal_code='. $postal_code . 'country='. $country . 'username='. $username;


	// if (empty($first_name)) {
	// 	header("Location: registration.php?error=First Name is required&$user_data");
	//     exit();
	// }

    // else if (empty($last_name)) {
	// 	header("Location: registration.php?error=Last Name is required&$user_data");
	//     exit();
	// }

    // else if (empty($email)) {
	// 	header("Location: registration.php?error=Email is required&$user_data");
	//     exit();
	// }

    // else if (empty($address)) {
	// 	header("Location: registration.php?error=Address is required&$user_data");
	//     exit();
	// }

    // else if (empty($postal_code)) {
	// 	header("Location: registration.php?error=Postal Code is required&$user_data");
	//     exit();
	// }

    // else if (empty($country)) {
	// 	header("Location: registration.php?error=Country is required&$user_data");
	//     exit();
	// }

    // else if (empty($username)) {
	// 	header("Location: registration.php?error=Username is required&$user_data");
	//     exit();
	// }
    
    // else if(empty($password)){
    //     header("Location: registration.php?error=Password is required&$user_data");
	//     exit();
	// }

	// else if(empty($repassword)){
    //     header("Location: registration.php?error=Re-enter Password is required&$user_data");
	//     exit();
	// }

	if($password !== $repassword){
        header("Location: registration.php?error=The passwords do not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM users WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: registration.php?error=The username is taken, try another&$user_data");
	        exit();
		} else {
            $sql2 = "INSERT INTO users(username, password, first_name, last_name, email, address, postal_code, country) VALUES('$username', '$password', '$first_name', '$last_name', '$email', '$address', '$postal_code', '$country')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: login.php?success=Your account has been created successfully! You may log in now.");
                exit();
            } else {
                header("Location: registration.php?error=Unknown error occurred&$user_data");
                exit();
            }
		}
	}
	
} else {
	header("Location: registration.php");
	exit();
}