<?php
session_start();

$showAlert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  include 'dbconnect.php';
  $email = $_POST["email"];
  $sub = 'Reset your password';
  $otp = rand(1000,9999);
  $msg = "'Your otp is :', $otp";
  $from = "yadavskyst@gmail.com";
  $hed = "From: $from";

  $sendotp = mail($email,$sub,$msg,$hed);

  if ($sendotp) {
    $showAlert = true;
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset your password</title>
    <link rel="stylesheet" href="forgotpass.css">
    <?php require 'navbar.php' ?>
</head>

<body>

    <div class="center">

        <?php
      if ($showAlert) {
        echo ('<div class="alert alert-success alert-dismissible fade show my-4" role="alert">
      <strong>Thanks for the review!</strong>
      
    </div>');
      }

      ?>
        <form method="post" action="forgotpass.php">
            <h1>Reset Your Password</h1>
            <div class="txt_field">
                <input type="email" id="email" name="email" required />

                <label>E-mail Id</label>
            </div>


            <div class="pass"><a href="login.php">Login into your account</a> </div>
            <input type="submit" value="Send OTP" />
            <div class="signup_link">
                Create new account? <a href="signup.php">Signup</a>
            </div>
        </form>
    </div>

<?php require 'footer.php' ?>
</body>

</html>