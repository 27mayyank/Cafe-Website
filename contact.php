<?php
session_start();

$showAlert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  include 'dbconnect.php';
  $fname = $_POST["fname"];
  $email = $_POST["email"];
  $note = $_POST["note"];

  $sql = "INSERT INTO `reviews` (`fname`, `email`, `note`) VALUES ('$fname', '$email', '$note')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $showAlert = true;
  } else {
    $showAlert = false;
  }

}
?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Share your Experience</title>
    <link rel="stylesheet" href="contact.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <?php require 'navbar.php' ?>
</head>

<body>

    <div class="full">
        <div class="cont2">
            <?php
                if ($showAlert) {
                  echo ('<div class="alert alert-success alert-dismissible fade show my-4" role="alert">
                <strong>Thanks for the review!</strong>
                
              </div>');
                }

                ?>

            <div class="form">
                <form action="contact.php" method="post">
                    <p>Leave a review !</p>
                    <div class="input_field">
                        <label for="name"> Your Name :</label>
                        <input type="text" maxlength="30" minlength="3" id="fname" name="fname"
                            placeholder="Enter your Name" required>
                    </div>
                    <div class="input_field">
                        <label for="email">Your E-mail:</label>
                        <input type="email" id="email" name="email" maxlength="30" placeholder="Enter your e-mail"
                            required>
                    </div>
                    <div class="input_field">
                        <label for="msg">Your Message :</label>
                        <textarea rows="10" id="note" name="note" cols="60" maxlength="300" placeholder="Type here..."
                            required></textarea>
                    </div>
                    <div class="btn"><input type="submit" value="Submit"></div>
                </form>
            </div>
        </div>

        <div class="cont1">
            <p>Get in Touch</p>
            <div class="mno">
                <i style="font-size: 18px" class="fa fa-phone"></i> +919467181804
            </div>
            <div class="mno">
                <i class="fa fa-envelope"></i> yadavskyst@gmail.com
            </div>
            <p>Meet Us</p>
            <div class="mno">
                <i class="material-icons">place</i>Cluster Innovation Centre, Delhi
                University, Delhi-110046
            </div>
        </div>

    </div>
    <?php require 'footer.php' ?>
</body>

</html>