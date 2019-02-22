<?php
require 'server.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=icon href="images/ben_favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>London Tours | Account Activation</title>
</head>

<body>
    <?php    
    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])) {
     $email = $mysqli->escape_string($_GET['email']);
     $hash = $mysqli->escape_string($_GET['hash']);  
        
        
   $search = mysqli_query($mysqli, "SELECT email, hash, active FROM users WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
    
    $match = mysqli_num_rows($search);
        
          if($match > 0 ) {
            mysqli_query($mysqli, "UPDATE users SET active='1' WHERE email='".$email."' AND hash='".$hash."' 
            AND active='0'") or die($mysqli->error); 
              
            echo '<div class="container"> 
                   <div class="row justify-content-center"> 
                      <h1 class="display-3" style="color:#00FF00"> Your account has been activated !</h1> 
                    <a href="../index.php" class="btn btn-success btn-lg">Go To Homepage</a>
              </div> </div> ';
            } else {
               $_SESSION['message'] = "Link is invalid or your account has already been activated";
             header("location: includes/error.php");
            }    
        
    } else {
        $_SESSION['message'] = "Please use the link that has been sent to your email";
        header("location: /error.php");
    }
    ?>
</body>

</html>
