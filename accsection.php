<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Static Template</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
    crossorigin="anonymous" />
  <link href="accsection.css" rel="stylesheet" />
</head>

<body>
  <div class="action">
    <div class="profile" onclick="menuToggle();">
      <img src="accicon.png" />
    </div>
    <div class="menu">
      <h3>
        <?php echo $_SESSION['username'] ?>
      </h3>
      <ul>
        <li>
          <img src="" /><a href="menu.php">Menu</a>
        </li>

        <li>
          <img src="" /><a href="delbooking.php">Cancel Booking</a>
        </li>

        <li><img src="" /><a href="contact.php">Get Help</a></li>

        <li>
          <button style="outline: none; background: none; border: none; padding-left: 10px;" onclick="confirmAction()">
            <a href="#">Delete your account</a>
          </button>
        </li>

        <li>
          <img src="" /><a href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
  <script>
    function menuToggle() {
      const toggleMenu = document.querySelector(".menu");
      toggleMenu.classList.toggle("active");
    }
    const confirmAction = () => {
      const response = confirm("Delete your account ?");

      if(response){
        window.location.href = "delacc.php";
      }
      
    }


  </script>

</body>

</html>