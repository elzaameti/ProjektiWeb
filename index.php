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
    <section id="services" class="Services">
        <h1>Services We Offer</h1>
        <br>
        <br>
        <p>At IBM, we don't just provide services; 
            we engineer experiences that transcend the ordinary.</p>
        <div class="row">
            <div class="services-col">
                <h3> Cloud Services:</h3>
                <p>Embark on a journey to the cloud with IBM,
                     where possibilities are as boundless as the sky.
                      Our Cloud Services transcend the ordinary, offering a cosmic array of Infrastructure as a Service (IaaS),
                       Platform as a Service (PaaS), and Software as a Service (SaaS).
                        Elevate your business operations to new altitudes,
                         effortlessly blending the physical and digital realms 
                         with our seamless hybrid and multicloud solutions.Your future is now,
                      crafted with the brilliance of IBM's technological prowess. </p>
            </div>
            <div class="services-col">
                <h3>Cognitive and AI Solutions:</h3>
                <p>Step into Watson's Wonderland, where the extraordinary meets the everyday.
                     IBM's AI and Cognitive Solutions bring a touch of magic to your data, 
                     transforming it into insights that spark innovation.
                     Unleash the power of Watson, our brilliant cognitive computing platform, to decipher complexities, make informed decisions, and infuse artificial intelligence into the very fabric of your business.
                     It's not just about computing; it's about crafting a future where intelligence knows no bounds.</p>
            </div>
            <div class="services-col">
                <h3>Blockchain Technology:</h3>
                <p>IBM is actively involved in the development and implementation of blockchain technology. 
                    They offer blockchain services that aim to streamline business processes,
                     increase transparency, and enhance security in various industries. 
                     IBM's blockchain solutions are designed to help organizations create and manage distributed ledgers for improved efficiency and trust. 
                     This technology has applications in supply chain management, finance, healthcare, and more.</p>
            </div>
        </div>
        </section>