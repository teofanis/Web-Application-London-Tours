<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>London Tours | Error</title>
    <link rel="stylesheet" type="text/css" href="../css/cpanel.css">
</head>

<body>
    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>Oops!</h1>
                <h2>
                    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: index.php" );
    endif;?>
                </h2>

            </div>
            <a href="../index.php">Go To Homepage</a>
        </div>
    </div>

</body>

</html>
