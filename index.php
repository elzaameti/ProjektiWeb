<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBM Corporation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

      <!--Box Icons-->
      <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      <!-- Link Swiper's CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
      <style>
body {
  margin: 0;
  padding: 0;
  overflow-x: hidden; 
}
.hamburger {
  display: none;
  font-size: 24px; /* Adjust size as needed */
  cursor: pointer;
}

/* Hide menu items on small screens */
@media screen and (max-width: 600px) {
  .hamburger {
    display: block;
  }
  nav ul {
    display: none;
  }
  nav ul.active {
    display: block;
    position: absolute;
    width: 100%;
    top: 60px; /* Adjust based on your header's height */
    left: 0;
    background: white; /* or any color you want */
  }
}
      </style>
</head>
<body>
<?php
    include 'dbconnect.php'; // Ensure this points to your database connection file

    // Fetch categories
    $categoriesQuery = "SELECT id, name FROM categories";
    $categoriesResult = $conn->query($categoriesQuery);
    ?>
    <header>
        <div class="logo">  
            <span> <img class="logo" src="images/provim.png" alt="Logo IBM Black"></span>
        </div>
        <div class="flex-spacer"></div>
              <button class="hamburger" onclick="toggleMenu()">☰</button>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Products <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-content">
                    <a href="products.php?category_id=1">Operating System</a>
                    <a href="products.php?category_id=2">Middleware</a>
                    <a href="products.php?category_id=3">Databases</a>
                    <a href="products.php?category_id=4">AI & Machine Learning</a>
                    </div>
                </li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about us">About us</a></li>
                <li><a href="#news">News</a></li>
            </ul>
        </nav>
        <div class="sign-in">
           <button> <a href="signin.html" class="button">Sign In</a>
        </div>
    </header>
    <section class="home swiper" id="home">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide container">
                    <img src="images/foto1.jpg" alt="">
                    <div class="home-text">
                        <span><strong>Unlock the power of AIOps</strong></span>
                        <h1></h1>
                        <i class='bx bx-chevrons-down'></i>
                        <a href="#" class="btn">See more</a>
                    </div>
                </div> 
                <!-- Slide 2 -->
                <div class="swiper-slide container">
                    <img src="images/foto2.jpeg" alt="">
                    <div class="home-text">
                        <span><strong>What is IBM Cloud Pak for AIOps?</strong></span>
                        <h1></h1>
                        <i class='bx bx-chevrons-down'></i>
                        <a href="#" class="btn">See more</a>
                    </div>
                </div> 
                <!-- Slide 3 -->
                <div class="swiper-slide container">
                    <img src="images/foto3.jpg" alt="">
                    <div class="home-text">
                        <span><strong>Discover how to achieve proactive IT operations with IBM Cloud Pak for AIOps</strong></span>
                        <h1></h1>
                        <i class='bx bx-chevrons-down'></i>
                        <a href="#" class="btn">See more</a>
                    </div>
                </div> 
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>