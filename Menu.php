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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="menu.css">
  <?php require 'navbar.php' ?>
</head>

<body>
 

  <div class="heads">
    <h1>Explore Our Menu</h1>
    <h2>Our Specials</h2>
  </div>


  <div class="specials">
    <div class="sp1" >
      <img
        src="https://images.pexels.com/photos/3926133/pexels-photo-3926133.jpeg?cs=srgb&dl=pexels-bishop-tamrakar-3926133.jpg&fm=jpg&_gl=1*fhgafo*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDA5MTUuMC4wLjA."
        alt="" class="sp">
      <h3>Fried Rice</h3>
      <p>Rs 499</p>
      <button id="item1" data-price="499" class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
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
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp1">
      <img
        src="https://images.pexels.com/photos/2456435/pexels-photo-2456435.jpeg?cs=srgb&dl=pexels-engin-akyurt-2456435.jpg&fm=jpg&_gl=1*hml3dy*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDI0NTEuMC4wLjA."
        alt="" class="sp">
      <h3>Noodles</h3>
      <p>Rs 299</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp1">
      <img
        src="https://images.pexels.com/photos/5339079/pexels-photo-5339079.jpeg?cs=srgb&dl=pexels-roman-odintsov-5339079.jpg&fm=jpg&_gl=1*17jca9s*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDI3OTYuMC4wLjA."
        alt="" class="sp">
      <h3>Manchurian</h3>
      <p>Rs 499</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
  </div>

  <div class="beveeage">
    <h1>Menu</h1>
    <h2>Beverages
    </h2>
  </div>
  <div class="specials">
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/312418/pexels-photo-312418.jpeg?cs=srgb&dl=pexels-chevanon-photography-312418.jpg&fm=jpg&_gl=1*wzxpx9*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDQ5MDcuMC4wLjA."
        class="sp" alt="">
      <h3>Coffee</h3>
      <p>Rs 99</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/1889571/pexels-photo-1889571.jpeg?cs=srgb&dl=pexels-johnny-edgardo-guzman-1889571.jpg&fm=jpg&_gl=1*x833an*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDUzNjQuMC4wLjA."
        class="sp" alt="">
      <h3>Cold Coffee</h3>
      <p>Rs 150</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/50593/coca-cola-cold-drink-soft-drink-coke-50593.jpeg?cs=srgb&dl=pexels-pixabay-50593.jpg&fm=jpg&_gl=1*1frek0*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDU3NTUuMC4wLjA."
        class="sp" alt="">
      <h3>Coca Cola</h3>
      <p>Rs 60</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/103566/pexels-photo-103566.jpeg?cs=srgb&dl=pexels-photomix-company-103566.jpg&fm=jpg&_gl=1*strm7y*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDU3OTguMC4wLjA."
        alt="" class="sp">
      <h3>Strawberry Shake</h3>
      <p>Rs 149</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/1638280/pexels-photo-1638280.jpeg?cs=srgb&dl=pexels-mareefe-1638280.jpg&fm=jpg&_gl=1*1ef2ux4*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDU4ODQuMC4wLjA."
        class="sp" alt="">
      <h3>Lemon Tea</h3>
      <p>Rs 100</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/7463455/pexels-photo-7463455.jpeg?cs=srgb&dl=pexels-kiro-wang-7463455.jpg&fm=jpg&_gl=1*4k6vkb*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDYwMjkuMC4wLjA."
        class="sp" alt="">
      <h3>Cappuccino</h3>
      <p>Rs 199</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/10406758/pexels-photo-10406758.jpeg?cs=srgb&dl=pexels-sena-10406758.jpg&fm=jpg&_gl=1*3aq0d3*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDYyMDguMC4wLjA."
        class="sp" alt="">
      <h3>Caffe Mocha</h3>
      <p>Rs 299</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/685527/pexels-photo-685527.jpeg?cs=srgb&dl=pexels-victor-freitas-685527.jpg&fm=jpg&_gl=1*14uvp9d*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDYzMzEuMC4wLjA."
        class="sp" alt="">
      <h3>Espresso</h3>
      <p>Rs 249</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>

  </div>

  <div class="chinese">
    <h2>Chinese</h2>
  </div>
  <div class="specials">
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/12103073/pexels-photo-12103073.jpeg?cs=srgb&dl=pexels-rizal-zaelani-12103073.jpg&fm=jpg&_gl=1*1vbxgjw*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDcwNDguMC4wLjA."
        class="sp" alt="">
      <h3>Spring Roll</h3>
      <p>Rs 159</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>

    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/2664216/pexels-photo-2664216.jpeg?cs=srgb&dl=pexels-jan-n-g-u-y-e-n-%F0%9F%8D%81-2664216.jpg&fm=jpg&_gl=1*1t8wmlb*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDcxNTMuMC4wLjA."
        class="sp" alt="">
      <h3>Noodles</h3>
      <p>Rs 299</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>

    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/5339079/pexels-photo-5339079.jpeg?cs=srgb&dl=pexels-roman-odintsov-5339079.jpg&fm=jpg&_gl=1*m6l4w4*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDcyNzYuMC4wLjA."
        class="sp" alt="">
      <h3>Manchurian</h3>
      <p>Rs 499</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/533325/pexels-photo-533325.jpeg?cs=srgb&dl=pexels-pixabay-533325.jpg&fm=jpg&_gl=1*1w644nt*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDczODMuMC4wLjA."
        class="sp" alt="">
      <h3>Hot Pot</h3>
      <p>Rs 399</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>

  </div>

  <div class="southind">
    <h2>South Indian</h2>
  </div>

  <div class="specials">
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/5560763/pexels-photo-5560763.jpeg?cs=srgb&dl=pexels-saveurs-secretes-5560763.jpg&fm=jpg&_gl=1*1c84f30*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDc1NjQuMC4wLjA."
        class="sp" alt="">
      <h3>Dosa</h3>
      <p>Rs 299</p>
      <button class="btn"> <span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/4331489/pexels-photo-4331489.jpeg?cs=srgb&dl=pexels-sarthak-4331489.jpg&fm=jpg&_gl=1*h9zpog*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDc2NjYuMC4wLjA."
        class="sp" alt="">
      <h3>Idli</h3>
      <p>Rs 199</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/10670761/pexels-photo-10670761.jpeg?cs=srgb&dl=pexels-olivia-fern%C3%A1ndez-sosa-10670761.jpg&fm=jpg&_gl=1*hbmgi0*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDc5NzAuMC4wLjA."
        class="sp" alt="">
      <h3>Sambar Rice</h3>
      <p>Rs 399</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img src="pongal.jpg" class="sp" alt="">
      <h3>Pongal</h3>
      <p>Rs 199</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
  </div>
  <div class="northind">
    <h2>North Indian</h2>
  </div>
  <div class="specials">
    <div class="sp2" >
      <img
        src="https://images.pexels.com/photos/4449068/pexels-photo-4449068.jpeg?cs=srgb&dl=pexels-satyam-verma-4449068.jpg&fm=jpg&_gl=1*1n0dkv*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDgyNTYuMC4wLjA."
        class="sp" alt="">
      <h3>Samosa</h3>
      <p>Rs 99</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img src="chole-bhature.png" class="sp" alt="">
      <h3>Chole Bhature</h3>
      <p>Rs 99</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img
        src="https://images.pexels.com/photos/2338407/pexels-photo-2338407.jpeg?cs=srgb&dl=pexels-harry-dona-2338407.jpg&fm=jpg&_gl=1*fqn053*_ga*MTc4NzAwMzU3LjE2NjMzNDA1MDM.*_ga_8JE65Q40S6*MTY2Nzg5OTMyNy4xMy4xLjE2Njc5MDg2MDEuMC4wLjA."
        class="sp" alt="">
      <h3>Butter Chicken</h3>
      <p>Rs 499</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div></button>
    </div>
    <div class="sp2">
      <img src="download.jpeg" class="sp" alt="">
      <h3>Kheer</h3>
      <p>Rs 999</p>
      <button class="btn"><span>Add to Cart</span> 
            <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div>
      <div class="cart">
                <svg viewBox="0 0 36 26">
                    <polyline
                        points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                    ></polyline>
                    <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
            </div>
      </button>
    </div>
</div>


  <script src="app.js"></script>
  <?php require 'footer.php' ?>
</body>




</html>





