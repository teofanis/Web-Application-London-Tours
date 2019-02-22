<?php
require '../includes/server.php';
session_start();  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>London Tours HeadQuarters | Admin Panel</title>
    <link rel=icon href="../images/ben_favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/cpanel.css">
</head>

<body>

    <?php 
    if(!isset($_SESSION['logged_in']) || $_SESSION['privileges'] == 0) {
        $_SESSION['message'] = "You are not authorised to access this page !";
        header("location: ../includes/error.php");
    }
    
    ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="admin.php">London Tours | Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manage
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Customer Bookings</a>
                        <a class="dropdown-item" href="addServices.php">Add Services</a>
                        <a class="dropdown-item" href="updateServices.php">Update Services </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="deleteServices.php">Delete Services </a>
                    </div>
                </li>
            </ul>

            <form action="index.php" method="GET" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <?php if(!isset($_SESSION['logged_in'])) { echo '<a class="form-control btn btn-outline-info m-2" data-toggle="modal" data-target="#LoginModalCenter" role="button">Sign In </a>'; }?>
                <?php if(isset($_SESSION['logged_in'])) {echo '<a class="nav-link dropdown-toggle btn btn-outline-info ml-2" id="accountSettings" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Account
                            </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountSettings">
                        <a class="dropdown-item" href="#">Manage Bookings</a>
                        <a class="dropdown-item" href="#">Account Settings</a>
                        <a class="dropdown-item" href="../index.php">London Tours | Home </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" target="self" href="../includes/logout.php"><span id="logout">Logout</span></a>
                    </div>'; }?>
            </form>
        </div>

    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>
