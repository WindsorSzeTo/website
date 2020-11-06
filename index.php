<?php
include "php/dbsetup.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="slider.js"></script>   
</head>
<body onload="showSlides()">
</body>

    <header>
        <div class= logo><img src="pic\logo.png" > 
        </div>              
            <nav>                
                <div class ="subNav">
                    <ul>
                        <a href="cart.php">cart</a><br>
                        <a href="aboutus.html">About Us</a><br>
                        <a href="reg.html">Register Now</a><br>
                        
                    </ul>
                </div>
                <div class= "mainNav">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>&nbsp&nbsp
                            <a href="products.html">Products</a>&nbsp&nbsp
                            <a href="contactus.html">Contacts Us</a><br><br>
							

                            <input type="text" placeholder="Search..">
                        </li>
                    </ul>
                </div>
            </nav>

    </header>
    <main>
                <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src= "pic/outdoor2.jpg"style="width:100%">
            <div class="text">ON SALE NOW!</div>
            </div>
        
            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="pic/toilet1.jpg" style="width:100%">
            <div class="text">BEST SELLING!</div>
            </div>
        
            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="pic/bedroom2.jpg" style="width:100%">
            <div class="text">Voted as best bedroom light of 2020!</div>
            </div>
        
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        
        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

    </main>
        
    <div id="footer">
        <i>Copyright &copy; 2020 flr.</i><br>
        <a href="mailto:flr@lights.com">flr@lights.com</a>
    </div>
</body>
</html>