<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>

<?php


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
} else {
  $loggedin = false;

}
echo'
    <div class="parent">
    <nav>
        <ul class="navbar">
            <li class="logo"><a href="Home.php"><span>Cafe</span> Website</a></li>
            <li class="item"><a href="Menu.php">Menu</a></li>
            <li class=" item has-subnavbar">
                <a tabindex="0">Booking</a>
                <ul class="subnavbar">
                    <li class="subitem"><a href="#">Book Table</a></li>
                    <li class="subitem"><a href="#">Book Room</a></li>
                    <li class="subitem"><a href="#">Cancel Booking</a></li>
                </ul>
            </li>
            </li>
            <li class="item"><a href="contact.php">Contact</a></li>
            <li class="item"><a href="about.php">About Us</a></li>';
            if (!$loggedin) {
                echo '
            <li class="item button"><a href="login.php">Login</a></li>
            <li class="item button secondary"><a href="signup.php">Sign Up</a></li>';}
             
              echo'

            <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
    </nav>
    </div>';
    
    ///if ($loggedin) {
       /// require 'accsection.php';
        
     /// }
    ?>
    <script src="navbar.js"></script>
</body>

</html>
