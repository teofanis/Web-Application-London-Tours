<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['postcode'] = $_POST['postcode'];
$_SESSION['priviledges'] = $_POST['priviledges'];

// Escape all $_POST variables to protect against SQL injections
$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$phone = $mysqli->escape_string($_POST['phone']);
$address = $mysqli->escape_string($_POST['address']);
$postcode = $mysqli->escape_string($_POST['postcode']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string( password_hash($_POST['password'], PASSWORD_BCRYPT) );
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );

// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error);

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: includes/error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (password, email, firstname, lastname, phone, address, postcode, hash) " 
            . "VALUES ('$password','$email','$first_name','$last_name', '$phone', '$address', '$postcode', '$hash')";

    // Add user to the database
    if ( $mysqli->query($sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true;
        $_SESSION['priviledges'] = 0; 
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification | London Tours ';
        $message_body = '
        Hello '.$first_name.',

        Thank you for signing up!
        
        Please click this link to activate your account:

        http://192.168.0.41/includes/verify.php?email='.$email.'&hash='.$hash;  
        
        $headers = 'From:noreply@londontours.co.uk' . "\r\n"; 
        mail($to, $subject, $message_body, $headers);
        
        
        echo '<script type="text/javascript">
         window.onload = function(){
         $("#MessengerModal").modal("show");
        }</script>';
        
         $_SESSION['messageTitle'] = "Success!"; 
        header("location: ../index.php");
        $_SESSION['message'];
       header("location: ../index.php");

        


}

else {
$_SESSION['message'] = 'Registration failed!';
header("location: includes/error.php");
}

}
?>
