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
        <section id="about us" class="AboutUs">
        <h1>About Our Company</h1>
        <br>
        <br>
        <p>At IBM, we are not just a company; we are architects of the future, pioneers of progress, and champions of transformation. </p>
        <div class="row">
            <div class="AboutUs-col">
                <img src="images/Kompania.jpg" alt="Kompania campus">
                <div class="layer">
                <h3>Our Campus</h3>
                </div>
            </div>
            <div class="AboutUs-col">
                <h3>About Us</h3>
                <p id="teksti">IBM, or International Business Machines Corporation, stands as a titan in the technology industry,
                     boasting a legacy of over a century marked by continual innovation and global influence.
                      Renowned for pioneering groundbreaking advancements, IBM has played a pivotal role in shaping the digital landscape. 
                      From introducing the world's first commercially viable computer to spearheading the era of artificial intelligence, 
                      the company's commitment to pushing technological boundaries remains unwavering. Beyond its technological prowess, 
                      IBM is distinguished by its dedication to sustainability, ethical business practices, and fostering a diverse, 
                      inclusive global community. As a corporate giant, IBM not only envisions the future but actively engineers it,
                       weaving together expertise, research, and a forward-thinking ethos to create a world where intelligent solutions 
                       redefine the way we live and work.At IBM, the future is not a distant concept; it's a reality we are actively shaping every day.
                       So, discover the power of IBM-where progress meets possibility, and the extraordinary
                        becomes the new standard.</p>
                        <h3>We welcome you</h3>
            </div>
        </div>
    </section>
    <section id="news" class="News">
            <h1>Latest News</h1>
            <div class="news-container">
                <div class="news-article">
                    <img src="images/1.jpg" alt="News 1 Image">
                    <h2>The importance of diversity in AI isn’t opinion, it’s math</h2>
                    <br>
                    <br>
                    <p> We all want to see our ideal human values reflected in our technologies. We expect technologies such as artificial intelligence (AI) 
                        to not lie to us, to not discriminate, and to be safe for us and our children to use.Today, IBM is announcing that it has signed
                         a definitive agreement to acquire application modernization capabilities</p>
                </div>
        
                <div class="news-article">
                    <img src="images/2.jpg" alt="News 2 Image">
                    <h2>IBM to Acquire Application Modernization Capabilities from Advanced</h2>
                    <br>
                    <p> IBM is announcing that it has signed a definitive agreement to acquire Modern Systems 
                        and other application modernization capabilities from Advanced, bringing a combination of talent, tools...</p>
                </div>
            </div>
        </section>
        <footer>

        <div class="footer">
         <a href="index.html">
         <img class="ibm-img1" src="images/IBM1.png" alt="IBM logo white">
         </a>
         <div class =footer-content>
           <h2>Contact us</h2>
           <br>
           <p>Email:info@ibm.net</p>
           <p>Phone:+1-212-456-7890</p>
           <p>Adress:1 Orchard Road, Armonk, New York</p>
         </div>
           <div class="footer-content">
             <h2>Support</h2>
             <br>
             <p>Privacy Policy</p>
             <p>Help</p>
             <p>Feedback</p>
           </div>
           <div class="footer-content">
             <h2>Follow Us</h2>
             <br>
            <a href="https://www.facebook.com/IBM" target="_blank"> <i class='bx bxl-facebook-circle' style="font-size: 2rem; color: #fff;"></i></a>
                <a href="https://www.instagram.com/ibm/" target="_blank"><i class='bx bxl-instagram' style="font-size: 2rem; color: #fff;"></i></a>
                 <a href="https://www.linkedin.com/company/ibm" target="_blank"><i class='bx bxl-linkedin-square' style="font-size: 2rem; color: #fff;"></i></a>
                 <hr>
                 <h3>&copy; 2023 IBM.All Rights Reserved</h3>
           </div>
        </div> 
     
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>       
</body>
</html>
