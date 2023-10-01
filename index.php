<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
    <div class="slider">
        <div class="images">

            <input type="radio" name="slide" id="img1" >
            <input type="radio" name="slide" id="img2">
            <input type="radio" name="slide" id="img3">
            <input type="radio" name="slide" id="img4">
            <input type="radio" name="slide" id="img5">

            <img src="img/p1.jpg" class="m1" alt="img1">
            <img src="img/p2.webp" class="m2" alt="img2">
            <img src="img/p3.jpg" class="m3" alt="img3">
            <img src="img/p4.jpg" class="m4" alt="img4">
            <img src="img/p5.webp" class="m5" alt="img5">

        </div>
        <div class="dots">
            <label for="img1"></label>
            <label for="img2"></label>
            <label for="img3"></label>
            <label for="img4"></label>
            <label for="img5"></label>

        </div>

    </div>
    <div class="banner-container">
        <h2 class="white pb-3">Smiles Within Every Space</h2>

        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter city name to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
            City Spotlight
        </h1>
        <div class="row">    
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bengaluru">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

<script>
  /*const slider = document.querySelector('.images');
  const radios = document.querySelectorAll('input[name="slide"]');
  let currentIndex = 0;
  const intervalTime = 2000; // Change image every 2 seconds (adjust as needed)
  let slideInterval;

  // Function to change the slide
  const changeSlide = () => {
    currentIndex++;

    if (currentIndex === radios.length) {
      currentIndex = 0;
    }

    radios[currentIndex].checked = true;
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
  };

  // Start the auto-slide interval
  slideInterval = setInterval(changeSlide, intervalTime);

  // Pause auto-slide when user interacts with the slider
  slider.addEventListener('mouseenter', () => {
    clearInterval(slideInterval);
  });

  // Resume auto-slide when user stops interacting with the slider
  slider.addEventListener('mouseleave', () => {
    slideInterval = setInterval(changeSlide, intervalTime);
  });*/

  const slider = document.querySelector('.images');
  const radios = document.querySelectorAll('input[name="slide"]');
  let currentIndex = 0;
  const intervalTime = 4000; // Change image every 2 seconds (adjust as needed)
  let slideInterval;

  // Function to change the slide
  const changeSlide = () => {
    currentIndex++;

    if (currentIndex === radios.length) {
      currentIndex = 0;
    }

    // Hide all images
    slider.querySelectorAll('img').forEach((img) => {
      img.style.display = 'none';
    });

    // Show the current image
    slider.querySelector(`.m${currentIndex + 1}`).style.display = 'block';

    radios[currentIndex].checked = true;
  };

  // Start the auto-slide interval
  slideInterval = setInterval(changeSlide, intervalTime);

  // Pause auto-slide when user interacts with the slider
  slider.addEventListener('mouseenter', () => {
    clearInterval(slideInterval);
  });

  // Resume auto-slide when user stops interacting with the slider
  slider.addEventListener('mouseleave', () => {
    slideInterval = setInterval(changeSlide, intervalTime);
  });


</script>


</body>

</html>
