<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
$name = $mysqli->query("SELECT firstname FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: includes/error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];
        $_SESSION['active'] = $user['active'];
        $_SESSION['privileges'] = $user['privileges'];
        
        // This is how we'll know the user is logged in
       $logged_user = $_SESSION['logged_in'] = true;
         if($_SESSION['privileges'] == 0){
             header("location: /includes/profile.php");
        } elseif ($_SESSION['privileges'] == 1){
        
         }
    }
    else {
        $_SESSION['message'] = "Wrong password, try again";
        header("location: includes/error.php");
    }
}

?>
