<?php
session_start();

if (!isset($_SESSION['loggedin']) && $_SESSION['loggediin'] != true) {
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome To Sumit's Hotel </title>
  <link rel="stylesheet" href="home.css" />
</head>



<body>
  <?php require 'navbar.php' ?>
  <div class="midbody">
    <p>Hey!
      <?php echo $_SESSION['username'] ?> ,Welcome
    </p>
  </div>

  <div class="good">Good to see you again</div>

  <h1>Our Specials</h1>
  <div class="specials">
    <div class="sp1">
      <img
        src="https://images.pexels.com/photos/3926133/pexels-photo-3926133.jpeg?cs=srgb&dl=pexels-bishop-tamrakar-3926133.jpg&fm=jpg&_gl=1*fhgafo*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDA5MTUuMC4wLjA."
        alt="" class="sp">
      <h3>Fried Rice</h3>
      <p>Rs 499</p>
      <button class="btn" onclick="redirect()"><span>Order Now</span>
        <div class="cart">
          <svg viewBox="0 0 36 26">
            <polyline points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"></polyline>
            <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
          </svg>
        </div>
      </button>
    </div>
    <div class="sp1">
      <img
        src="https://images.pexels.com/photos/5639546/pexels-photo-5639546.jpeg?cs=srgb&dl=pexels-shameel-mukkath-5639546.jpg&fm=jpg&_gl=1*1ri0tsz*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDE4MzMuMC4wLjA."
        alt="" class="sp">
      <h3>Chicken Pizza</h3>
      <p>Rs 699</p>
      <button class="btn" onclick="redirect()"><span>Order Now</span>
        <div class="cart">
          <svg viewBox="0 0 36 26">
            <polyline points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"></polyline>
            <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
          </svg>
        </div>
      </button>
    </div>
    <div class="sp1">
      <img
        src="https://images.pexels.com/photos/2456435/pexels-photo-2456435.jpeg?cs=srgb&dl=pexels-engin-akyurt-2456435.jpg&fm=jpg&_gl=1*hml3dy*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDI0NTEuMC4wLjA."
        alt="" class="sp">
      <h3>Noodles</h3>
      <p>Rs 299</p>
      <button class="btn" onclick="redirect()"><span>Order Now</span>
        <div class="cart">
          <svg viewBox="0 0 36 26">
            <polyline points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"></polyline>
            <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
          </svg>
        </div>
      </button>
    </div>
    <div class="sp1">
      <img
        src="https://images.pexels.com/photos/5339079/pexels-photo-5339079.jpeg?cs=srgb&dl=pexels-roman-odintsov-5339079.jpg&fm=jpg&_gl=1*17jca9s*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDI3OTYuMC4wLjA."
        alt="" class="sp">
      <h3>Manchurian</h3>
      <p>Rs 499</p>
      <button class="btn" onclick="redirect()"><span>Order Now</span>
        <div class="cart">
          <svg viewBox="0 0 36 26">
            <polyline points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"></polyline>
            <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
          </svg>
        </div>
      </button>
    </div>

  </div>
  <div class="happ1">
    <h1>HAPPENINGS</h1>
  </div>
  <div class="happ">


    <div class="happening">

      <img
        src="https://www.tajhotels.com/content/dam/luxury/hotels/sawai-man-mahal-jaipur/images/rooms-and-suites/facade-1.jpg/jcr:content/renditions/cq5dam.web.512.512.jpeg"
        class="sp" alt="">
      <h4>Our Mumbai Branch</h4>
    </div>
    <div class="happening">
      <img
        src="https://www.tajhotels.com/content/dam/luxury/hotels/taj-wayanad/images/gallery/hotel-overview-1.jpg/jcr:content/renditions/cq5dam.web.512.512.jpeg"
        class="sp" alt="">
      <h4>Our Chennai Branch</h4>
    </div>
  </div>

  


  <script>
    function redirect() {
      window.location.href = "menu.php";
    }

    function redirect2() {
      window.location.href = "contact.php";
    }

    function redirect3() {
      window.location.href = "booktabel.php";
    }
  </script>
  <script src="app.js"></script>



  <?php require 'footer.php' ?>
</body>

</html>